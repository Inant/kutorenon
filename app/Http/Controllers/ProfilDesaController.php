<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ProfilDesa;

class ProfilDesaController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-collection text-purple';
    }

    public function index()
    {
        $this->param['pageInfo'] = 'Profil Desa';

        $this->param['profil'] = ProfilDesa::first();
        return \view('profil-desa.profil-desa', $this->param);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'profil' => 'required',
        ]);
        $profil = ProfilDesa::findOrFail($id);
        if($request->file('cover')){
            $cover = $request->file('cover');
            $pathUpload = 'public/assets/backend/img/profil-desa/profil';
            $namaCover = time().".".$cover->getClientOriginalName();
            $cover->move($pathUpload, $namaCover);
            $profil->cover = $namaCover;
        }
        $profil->profil = $request->get('profil');
        $profil->save();
        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }
}
