<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Bumdes;

class BumdesController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-bag-17 text-yellow';
    }
    
    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'List Data';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('bumdes.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $bumdes = Bumdes::where('nama', 'LIKE', "%$keyword%")->paginate(10);
        }
        else{
            $bumdes = Bumdes::paginate(10);
        }

        return \view('bumdes.list-bumdes', ['bumdes' => $bumdes], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('bumdes.index');

        return \view('bumdes.tambah-bumdes', $this->param);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'ketua_unit' => 'required',
            'foto' => 'required',
            'konten' => 'required',
        ]);

        $newBumdes = new Bumdes;

        $newBumdes->nama = $request->get('nama');
        $newBumdes->ketua_unit = $request->get('ketua_unit');
        $newBumdes->slug = strtolower(str_replace(' ', '-', $request->get('nama')));
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/bumdes';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $newBumdes->foto = $namaFoto;
        }
        $newBumdes->konten = $request->get('konten');
        $newBumdes->save();

        return redirect()->back()->withStatus('Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('bumdes.index');

        $bumdes = Bumdes::findOrFail($id);
        return \view('bumdes.edit-bumdes', ['bumdes' => $bumdes], $this->param);
    }

    public function update(Request $request, $id)
    {
        $bumdes = Bumdes::findOrFail($id);
        $isUnique = $bumdes->nama == $request->get('nama') ? "" : "|unique:bumdes";

        $validatedData = $request->validate([
            'nama' => 'required'.$isUnique,
            'ketua_unit' => 'required',
            'konten' => 'required',
        ]);

        $bumdes->nama = $request->get('nama');
        $bumdes->ketua_unit = $request->get('ketua_unit');
        $bumdes->slug = strtolower(str_replace(' ', '-', $request->get('nama')));
        if($request->file('foto')){
            $foto = $request->file('foto');
            $pathUpload = 'public/assets/backend/img/bumdes';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $bumdes->foto = $namaFoto;
        }
        $bumdes->konten = $request->get('konten');

        $bumdes->save();

        return redirect()->route('bumdes.index')->withStatus('Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bumdes = Bumdes::findOrFail($id);

        $bumdes->delete();

        return redirect()->route('bumdes.index')->withStatus('Data berhasil dihapus.');
    }
}
