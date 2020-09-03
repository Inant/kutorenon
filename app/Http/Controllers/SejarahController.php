<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Sejarah;

class SejarahController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-collection text-purple';
    }

    public function index()
    {
        $this->param['pageInfo'] = 'Sejarah Desa';

        $this->param['sejarah'] = Sejarah::first();
        return \view('profil-desa.sejarah', $this->param);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'sejarah' => 'required',
        ]);
        $sejarah = Sejarah::findOrFail($id);
        if($request->file('cover')){
            $cover = $request->file('cover');
            $pathUpload = 'public/assets/backend/img/profil-desa/sejarah';
            $namaCover = time().".".$cover->getClientOriginalName();
            $cover->move($pathUpload, $namaCover);
            $sejarah->cover = $namaCover;
        }
        $sejarah->sejarah = $request->get('sejarah');
        $sejarah->save();
        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }

}
