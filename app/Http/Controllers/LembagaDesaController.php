<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\LembagaDesa;

class LembagaDesaController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-atom text-green';
    }

    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'List Data';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('lembaga-desa.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $lembagaDesa = LembagaDesa::where('nama', 'LIKE', "%$keyword%")->paginate(10);
        }
        else{
            $lembagaDesa = LembagaDesa::paginate(10);
        }

        return \view('lembaga-desa.list-lembaga', ['lembagaDesa' => $lembagaDesa], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('lembaga-desa.index');

        return \view('lembaga-desa.tambah-lembaga-desa', $this->param);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'foto' => 'required',
            'konten' => 'required',
        ]);

        $newLembaga = new LembagaDesa;

        $newLembaga->nama = $request->get('nama');
        $newLembaga->slug = strtolower(str_replace(' ', '-', $request->get('nama')));
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/lembaga-desa';
            $foto->move($pathUpload,time().".".$foto->getClientOriginalName());
            $namaFoto = time().".".$foto->getClientOriginalName();
            $newLembaga->foto = $namaFoto;
        }
        $newLembaga->konten = $request->get('konten');
        $newLembaga->save();

        return redirect()->back()->withStatus('Data berhasil ditambahkan.');
    }
    
    public function edit($id)
    {
        $this->param['pageInfo'] = 'Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('lembaga-desa.index');

        $lembagaDesa = LembagaDesa::findOrFail($id);
        return \view('lembaga-desa.edit-lembaga-desa', ['lembagaDesa' => $lembagaDesa], $this->param);
    }

    public function update(Request $request, $id)
    {
        $lembagaDesa = LembagaDesa::findOrFail($id);
        $isUnique = $lembagaDesa->nama == $request->get('nama') ? "" : "|unique:lembaga_desa";

        $validatedData = $request->validate([
            'nama' => 'required'.$isUnique,
            'konten' => 'required',
        ]);

        $lembagaDesa->nama = $request->get('nama');
        $lembagaDesa->slug = strtolower(str_replace(' ', '-', $request->get('nama')));
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/lembaga-desa';
            $foto->move($pathUpload,time().".".$foto->getClientOriginalName());
            $namaFoto = time().".".$foto->getClientOriginalName();
            $lembagaDesa->foto = $namaFoto;
        }
        $lembagaDesa->konten = $request->get('konten');

        $lembagaDesa->save();

        return redirect()->route('lembaga-desa.index')->withStatus('Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $lembagaDesa = LembagaDesa::findOrFail($id);

        $lembagaDesa->delete();

        return redirect()->route('lembaga-desa.index')->withStatus('Data berhasil dihapus.');
    }
}
