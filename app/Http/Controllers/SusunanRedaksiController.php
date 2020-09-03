<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\SusunanRedaksi;

class SusunanRedaksiController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-archive-2 text-primary';
    }

    public function index()
    {
        $this->param['pageInfo'] = 'Susunan Redaksi';

        $this->param['susunanRedaksi'] = SusunanRedaksi::first();
        return \view('susunan-redaksi.susunan-redaksi', $this->param);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'susunan_redaksi' => 'required',
        ]);
        $susunanRedaksi = SusunanRedaksi::findOrFail($id);
        $susunanRedaksi->susunan_redaksi = $request->get('susunan_redaksi');
        $susunanRedaksi->save();
        return redirect()->back()->withStatus('Data berhasil diperbarui.');
    }
}
