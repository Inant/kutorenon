<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\SambutanKades;

class SambutanKadesController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-align-center text-orange';
    }

    public function index()
    {
        $this->param['pageInfo'] = 'Sambutan Kepala Desa';

        $this->param['sambutanKades'] = SambutanKades::first();
        return \view('sambutan-kades.sambutan-kades', $this->param);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'sambutan' => 'required',
        ]);
        $sambutanKades = SambutanKades::findOrFail($id);
        if($request->file('foto_kades')){
            $foto = $request->file('foto_kades');
            $pathUpload = 'public/assets/backend/img/sambutan-kades';
            $namaFoto = time().".".$foto->getClientOriginalName();
            $foto->move($pathUpload, $namaFoto);
            $sambutanKades->foto_kades = $namaFoto;
        }
        $sambutanKades->sambutan = $request->get('sambutan');
        $sambutanKades->save();
        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }
}
