<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FBumdesController extends Controller
{
    public function index($slug)
    {
        $bumdes = \App\Bumdes::where('slug', $slug)->get()[0];

        return view('frontend.bumdes.bumdes', ['bumdes' => $bumdes]);
    }
}
