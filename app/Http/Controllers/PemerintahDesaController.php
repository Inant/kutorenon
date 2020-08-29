<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\PemerintahDesa;

class PemerintahDesaController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-building text-info';
    }

    public function index()
    {
        $this->param['pageInfo'] = 'Pemerintah Desa';

        $this->param['pemerintahDesa'] = PemerintahDesa::first();
        return \view('pemerintah-desa.pemerintah-desa', $this->param);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'konten' => 'required',
        ]);
        $pemerintahDesa = PemerintahDesa::findOrFail($id);
        if($request->file('cover')){
            $cover = $request->file('cover');
            $pathUpload = 'public/assets/backend/img/pemerintah-desa/pemerintah-desa';
            $cover->move($pathUpload,time().".".$cover->getClientOriginalName());
            $namaCover = time().".".$cover->getClientOriginalName();
            $pemerintahDesa->cover = $namaCover;
        }
        $pemerintahDesa->konten = $request->get('konten');
        $pemerintahDesa->save();
        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }
}
