<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\VisiMisi;

class VisiMisiController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-building text-info';
    }

    public function index()
    {
        $this->param['pageInfo'] = 'Visi Misi';

        $this->param['visiMisi'] = VisiMisi::first();
        return \view('pemerintah-desa.visi-misi', $this->param);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'visi_misi' => 'required',
        ]);
        $visiMisi = VisiMisi::findOrFail($id);
        if($request->file('cover')){
            $cover = $request->file('cover');
            $pathUpload = 'public/assets/backend/img/pemerintah-desa/visi-misi';
            $cover->move($pathUpload,time().".".$cover->getClientOriginalName());
            $namaCover = time().".".$cover->getClientOriginalName();
            $visiMisi->cover = $namaCover;
        }
        $visiMisi->visi_misi = $request->get('visi_misi');
        $visiMisi->save();
        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }
}
