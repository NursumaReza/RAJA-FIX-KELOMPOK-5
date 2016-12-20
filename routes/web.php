<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/himami', function () {
    return view('himami');
});

Route::get('/', function () {
    return view('welcome2');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('admin/mahasiswa', 'MahasiswaController');

Route::resource('admin/pembimbing', 'DosenPembimbingController');

Route::resource('admin/nilai', 'NilaiController');

Route::resource('admin/proposal', 'ProposalController');

Route::resource('admin/ujian', 'UjianController');

Route::resource('admin/hasill', 'HasilController');

Route::resource('admin/registrasi', 'RegistrasiController');

Route::resource('admin/pengumuman', 'PengumumanController');












