<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FPengumumanController extends Controller
{
    public function index(Request $request)
    {
        $allPengumuman = \App\Pengumuman::orderBy('id', 'desc')->paginate(6);

        return view('frontend.pengumuman.pengumuman', ['allPengumuman' => $allPengumuman]);
    }

    public function show($slug)
    {
        $pengumuman = \App\Pengumuman::where('slug', $slug)->get()[0];

        return view('frontend.pengumuman.show-pengumuman', ['pengumuman' => $pengumuman]);
    }
}
