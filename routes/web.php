<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// beranda
Route::get('/', function () {
    return view('frontend.beranda.beranda');
});

// profil desa
Route::group(['prefix' => 'profil-desa'], function () {
    Route::get('sejarah-desa', function () {
        return view('frontend.profil-desa.sejarah-desa');
    });
    Route::get('profil-desa', function () {
        return view('frontend.profil-desa.profil-desa');
    });
});

// pemerintah desa
Route::group(['prefix' => 'pemerintahan-desa'], function () {
    Route::get('visi-misi', function () {
        return view('frontend.pemerintahan-desa.visi-misi');
    });
    Route::get('pemerintahan-desa', function () {
        return view('frontend.pemerintahan-desa.pemerintahan-desa');
    });
    Route::get('bpd', function () {
        return view('frontend.pemerintahan-desa.bpd');
    });
});

// lembaga desa
Route::get('lembaga-desa/{slug}', 'FLembagaDesaController@index');

// bumdes
Route::get('bumdes/{slug}', 'FBumdesController@index');

// berita
Route::get('berita', 'FBeritaController@index');
Route::get('berita/{slug}', 'FBeritaController@show');
Route::get('susunan-redaksi', function () {
    return view('frontend.berita.susunan-redaksi');
});
Route::get('suara-redaksi', 'FSuaraRedaksiController@index');
Route::get('suara-redaksi/{slug}', 'FSuaraRedaksiController@show');

// pengumuman
Route::get('pengumuman', 'FPengumumanController@index');
Route::get('pengumuman/{slug}', 'FPengumumanController@show');

// pengaduan
Route::get('pengaduan', function () {
    return view('frontend.pengaduan.pengaduan');
});
Route::post('submit-pengumuman', 'PengaduanController@store')->name('submit-pengaduan');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'administrator'], function () {
        Route::get('home', 'HomeController@index');

        // user's routes
        Route::get('user/ganti-password/', 'UserController@gantiPassword')->name('user.ganti-password');

        Route::put('user/update-password/{id}', 'UserController@updatePassword')->name('user.update-password');

        Route::resource('user', 'UserController');
        
        // profil desa
        Route::group(['prefix' => 'profil-desa'], function () {
            Route::resource('sejarah', 'SejarahController');
            Route::resource('profil-desa', 'ProfilDesaController');
        });

        // Pemerintah Desa
        Route::group(['prefix' => 'pemerintah-desa'], function () {
            Route::resource('visi-misi', 'VisiMisiController');
            Route::resource('pemerintah-desa', 'PemerintahDesaController');
            Route::resource('bpd', 'BpdController');
        });

        // lembaga-desa
        Route::resource('lembaga-desa', 'LembagaDesaController');
        
        // bumdes
        Route::resource('bumdes', 'BumdesController');

        // berita
        Route::resource('berita', 'BeritaController');

        // susunan redaksi
        Route::resource('susunan-redaksi', 'SusunanRedaksiController');
        
        // suara redaksi
        Route::resource('suara-redaksi', 'SuaraRedaksiController');
        
        // pengumuman
        Route::resource('pengumuman', 'PengumumanController');

        // sambutan kades
        Route::resource('sambutan-kades', 'SambutanKadesController');

        // pengaduan
        Route::get('pengaduan', 'PengaduanController@list');
        Route::get('show-pengaduan/{id}', 'PengaduanController@show')->name('show-pengaduan');
    });
});