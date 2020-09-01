<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FBeritaController extends Controller
{
    public function index(Request $request)
    {
        $allBerita = \App\Berita::orderBy('id', 'desc')->paginate(6);

        return view('frontend.berita.berita', ['allBerita' => $allBerita]);
    }

    public function show($slug)
    {
        $berita = \App\Berita::where('slug', $slug)->get()[0];

        return view('frontend.berita.show-berita', ['berita' => $berita]);
    }
}
