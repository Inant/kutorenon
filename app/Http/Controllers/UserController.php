<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    private $param;
    public function __construct()
    {
        $this->param['icon'] = 'ni-collection text-purple';
    }

    public function index(Request $request)
    {
        $this->param['pageInfo'] = 'List Data';
        $this->param['btnRight']['text'] = 'Tambah Data';
        $this->param['btnRight']['link'] = route('user.create');

        $keyword = $request->get('keyword');
        
        if ($keyword) {
            $user = User::where('nama', 'LIKE', "%$keyword%")->paginate(10);
        }
        else{
            $user = User::paginate(10);
        }

        return \view('master-user.list-user', ['user' => $user], $this->param);
    }

    public function create()
    {
        $this->param['pageInfo'] = 'Tambah Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('user.index');

        return \view('master-user.tambah-user', $this->param);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'email' => 'email|unique:users',
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
        ]);

        $newUser = new User;

        $newUser->nama = $request->get('nama');
        $newUser->username = $request->get('username');
        $newUser->email = $request->get('email');
        $newUser->password = \Hash::make($request->get('password'));

        $newUser->save();

        return redirect()->route('user.create')->withStatus('Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $this->param['pageInfo'] = 'Edit Data';
        $this->param['btnRight']['text'] = 'Lihat Data';
        $this->param['btnRight']['link'] = route('user.index');

        $user = User::findOrFail($id);
        return \view('master-user.edit-user', ['user' => $user], $this->param);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $isUniqueUsername = $user->username == $request->get('username') ? "" : "|unique:users";
        $isUniqueEmail = $user->email == $request->get('email') ? "" : "|unique:users";

        $validatedData = $request->validate([
            'nama' => 'required',
            'username' => 'required'.$isUniqueUsername,
            'email' => 'email'.$isUniqueEmail,
        ]);

        $user->nama = $request->get('nama');
        $user->username = $request->get('username');
        $user->email = $request->get('email');

        $user->save();

        return redirect()->route('user.index')->withStatus('Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('user.index')->withStatus('Data berhasil dihapus.');
    }

    public function gantiPassword()
    {
        $this->param['pageInfo'] = 'Ganti Password';

        return \view('master-user.ganti-password', $this->param);
    }

    public function updatePassword(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $request->validate([
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
            'old_password' => ['required', function ($attribute, $value, $fail) use ($user) {
                if (!\Hash::check($value, $user->password)) {
                    return $fail(__('Password lama tidak sesuai.'));
                }
            }],
        ]);

        $user->password = \Hash::make($request->get('password'));

        $user->save();

        return redirect()->route('user.ganti-password')->withStatus(__('Password berhasil diperbarui.'));
    }
}
