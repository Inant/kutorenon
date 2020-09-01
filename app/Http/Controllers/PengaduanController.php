<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pengaduan;

class PengaduanController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-send text-grey';
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email|max:40',
            'keluhan' => 'required',
        ]);

        $newPengaduan = new Pengaduan;

        $newPengaduan->nama = $request->get('nama');
        $newPengaduan->email = $request->get('email');
        $newPengaduan->keluhan = $request->get('keluhan');
        $newPengaduan->save();

        return redirect('pengaduan')->withStatus('Data berhasil disimpan.');
    }

    public function list(Request $request)
    {
        $this->param['pageInfo'] = 'List Data';
        // $this->param['btnRight']['text'] = 'Tambah Data';
        // $this->param['btnRight']['link'] = route('pengumuman.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $pengaduan = Pengaduan::where('nama', 'LIKE', "%$keyword%")->orderBy('id', 'desc')->paginate(10);
        }
        else{
            $pengaduan = Pengaduan::orderBy('id', 'desc')->paginate(10);
        }

        return \view('pengaduan.list-pengaduan', ['pengaduan' => $pengaduan], $this->param);
    }

    public function show($id)
    {
        $this->param['pageInfo'] = 'Detail Pengaduan';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = url('administrator/pengaduan');

        $this->param['pengaduan'] = Pengaduan::find($id);
        return \view('pengaduan.show-pengaduan', $this->param);
    }
}
