<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-notification-70 text-dark';
    }

    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'List Data';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('pengumuman.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $pengumuman = Pengumuman::where('judul', 'LIKE', "%$keyword%")->orderBy('id', 'desc')->paginate(10);
        }
        else{
            $pengumuman = Pengumuman::orderBy('id', 'desc')->paginate(10);
        }

        return \view('pengumuman.list-pengumuman', ['pengumuman' => $pengumuman], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('pengumuman.index');

        return \view('pengumuman.tambah-pengumuman', $this->param);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|unique:pengumuman',
            'penulis' => 'required',
            'foto' => 'required',
            'ulasan_singkat' => 'required',
            'konten' => 'required',
        ]);

        $newPengumuman = new Pengumuman;

        $newPengumuman->judul = $request->get('judul');
        $newPengumuman->penulis = $request->get('penulis');
        $newPengumuman->slug = strtolower(str_replace(' ', '-', $request->get('judul')));
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/pengumuman';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $newPengumuman->foto = $namaFoto;
        }
        $newPengumuman->ulasan_singkat = $request->get('ulasan_singkat');
        $newPengumuman->konten = $request->get('konten');
        $newPengumuman->save();

        return redirect()->back()->withStatus('Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('pengumuman.index');

        $pengumuman = Pengumuman::findOrFail($id);
        return \view('pengumuman.edit-pengumuman', ['pengumuman' => $pengumuman], $this->param);
    }

    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        $isUnique = $pengumuman->judul == $request->get('judul') ? "" : "|unique:pengumuman";

        $validatedData = $request->validate([
            'judul' => 'required'.$isUnique,
            'penulis' => 'required',
            'ulasan_singkat' => 'required',
            'konten' => 'required',
        ]);

        $pengumuman->judul = $request->get('judul');
        $pengumuman->penulis = $request->get('penulis');
        $pengumuman->slug = strtolower(str_replace(' ', '-', $request->get('judul')));
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/pengumuman';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $pengumuman->foto = $namaFoto;
        }
        $pengumuman->ulasan_singkat = $request->get('ulasan_singkat');
        $pengumuman->konten = $request->get('konten');
        $pengumuman->save();

        return redirect()->route('pengumuman.index')->withStatus('Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $pengumuman->delete();

        return redirect()->route('pengumuman.index')->withStatus('Data berhasil dihapus.');
    }
}
