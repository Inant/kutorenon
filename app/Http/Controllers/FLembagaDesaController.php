<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FLembagaDesaController extends Controller
{
    public function index($slug)
    {
        $lembaga = \App\LembagaDesa::where('slug', $slug)->get()[0];

        return view('frontend.lembaga-desa.lembaga-desa', ['lembaga' => $lembaga]);
    }
}
