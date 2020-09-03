<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Berita;

class BeritaController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-planet text-blue';
    }

    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'List Data';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('berita.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $berita = Berita::where('judul', 'LIKE', "%$keyword%")->orderBy('id', 'desc')->paginate(10);
        }
        else{
            $berita = Berita::orderBy('id', 'desc')->paginate(10);
        }

        return \view('berita.list-berita', ['berita' => $berita], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('berita.index');

        return \view('berita.tambah-berita', $this->param);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|unique:berita',
            'penulis' => 'required',
            'foto' => 'required',
            'ulasan_singkat' => 'required',
            'konten' => 'required',
        ]);

        $newBerita = new Berita;

        $newBerita->judul = $request->get('judul');
        $newBerita->penulis = $request->get('penulis');
        $newBerita->slug = strtolower(str_replace(' ', '-', $request->get('judul')));
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/berita';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $newBerita->foto = $namaFoto;
        }
        $newBerita->ulasan_singkat = $request->get('ulasan_singkat');
        $newBerita->konten = $request->get('konten');
        $newBerita->save();

        return redirect()->back()->withStatus('Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('berita.index');

        $berita = Berita::findOrFail($id);
        return \view('berita.edit-berita', ['berita' => $berita], $this->param);
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        $isUnique = $berita->judul == $request->get('judul') ? "" : "|unique:berita";

        $validatedData = $request->validate([
            'judul' => 'required'.$isUnique,
            'penulis' => 'required',
            'ulasan_singkat' => 'required',
            'konten' => 'required',
        ]);

        $berita->judul = $request->get('judul');
        $berita->penulis = $request->get('penulis');
        $berita->slug = strtolower(str_replace(' ', '-', $request->get('judul')));
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/berita';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $berita->foto = $namaFoto;
        }
        $berita->ulasan_singkat = $request->get('ulasan_singkat');
        $berita->konten = $request->get('konten');
        $berita->save();

        return redirect()->route('berita.index')->withStatus('Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        $berita->delete();

        return redirect()->route('berita.index')->withStatus('Data berhasil dihapus.');
    }
}
