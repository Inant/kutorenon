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

Route::get('/', function () {
    return view('welcome');
});

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
    });
});