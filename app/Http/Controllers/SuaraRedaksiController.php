<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\SuaraRedaksi;

class SuaraRedaksiController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-chat-round text-success';
    }

    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'List Data';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('suara-redaksi.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $suaraRedaksi = SuaraRedaksi::where('judul', 'LIKE', "%$keyword%")->orderBy('id', 'desc')->paginate(10);
        }
        else{
            $suaraRedaksi = SuaraRedaksi::orderBy('id', 'desc')->paginate(10);
        }

        return \view('suara-redaksi.list-suara-redaksi', ['suaraRedaksi' => $suaraRedaksi], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('suara-redaksi.index');

        return \view('suara-redaksi.tambah-suara-redaksi', $this->param);
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

        $newSuaraRedaksi = new SuaraRedaksi;

        $newSuaraRedaksi->judul = $request->get('judul');
        $newSuaraRedaksi->penulis = $request->get('penulis');
        $newSuaraRedaksi->slug = strtolower(str_replace(' ', '-', $request->get('judul')));
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/suara-redaksi';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $newSuaraRedaksi->foto = $namaFoto;
        }
        $newSuaraRedaksi->ulasan_singkat = $request->get('ulasan_singkat');
        $newSuaraRedaksi->konten = $request->get('konten');
        $newSuaraRedaksi->save();

        return redirect()->back()->withStatus('Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('suara-redaksi.index');

        $suaraRedaksi = SuaraRedaksi::findOrFail($id);
        return \view('suara-redaksi.edit-suara-redaksi', ['suaraRedaksi' => $suaraRedaksi], $this->param);
    }

    public function update(Request $request, $id)
    {
        $suaraRedaksi = SuaraRedaksi::findOrFail($id);
        $isUnique = $suaraRedaksi->judul == $request->get('judul') ? "" : "|unique:suara_redaksi";

        $validatedData = $request->validate([
            'judul' => 'required'.$isUnique,
            'penulis' => 'required',
            'ulasan_singkat' => 'required',
            'konten' => 'required',
        ]);

        $suaraRedaksi->judul = $request->get('judul');
        $suaraRedaksi->penulis = $request->get('penulis');
        $suaraRedaksi->slug = strtolower(str_replace(' ', '-', $request->get('judul')));
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/suara-redaksi';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $suaraRedaksi->foto = $namaFoto;
        }
        $suaraRedaksi->ulasan_singkat = $request->get('ulasan_singkat');
        $suaraRedaksi->konten = $request->get('konten');
        $suaraRedaksi->save();

        return redirect()->route('suara-redaksi.index')->withStatus('Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $suaraRedaksi = SuaraRedaksi::findOrFail($id);

        $suaraRedaksi->delete();

        return redirect()->route('suara-redaksi.index')->withStatus('Data berhasil dihapus.');
    }
}
