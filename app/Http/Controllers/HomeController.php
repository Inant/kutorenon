<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $param;

    public function __construct()
    {
        $this->middleware('auth');
        $this->param['icon'] = 'ni-tv-2 text-primary';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->param['pageInfo'] = 'Dashboard';
        return view('pages.dashboard', $this->param);
    }
}
