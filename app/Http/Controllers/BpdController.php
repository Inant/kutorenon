<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Bpd;

class BpdController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-building text-info';
    }

    public function index()
    {
        $this->param['pageInfo'] = 'Badan Permusyawaratan Desa';

        $this->param['bpd'] = Bpd::first();
        return \view('pemerintah-desa.bpd', $this->param);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'konten' => 'required',
        ]);
        $bpd = Bpd::findOrFail($id);
        if($request->file('cover')){
            $cover = $request->file('cover');
            $pathUpload = 'public/assets/backend/img/pemerintah-desa/bpd';
            $namaCover = time().".".$cover->getClientOriginalName();
            $cover->move($pathUpload, $namaCover);
            $bpd->cover = $namaCover;
        }
        $bpd->konten = $request->get('konten');
        $bpd->save();
        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }
}
