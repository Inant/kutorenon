<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FSuaraRedaksiController extends Controller
{
    public function index(Request $request)
    {
        $allSuaraRedaksi = \App\SuaraRedaksi::orderBy('id', 'desc')->paginate(6);

        return view('frontend.berita.suara-redaksi', ['allSuaraRedaksi' => $allSuaraRedaksi]);
    }

    public function show($slug)
    {
        $suaraRedaksi = \App\SuaraRedaksi::where('slug', $slug)->get()[0];

        return view('frontend.berita.show-suara-redaksi', ['suaraRedaksi' => $suaraRedaksi]);
    }
}
