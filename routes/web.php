<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/beranda', 'BerandaController');

Route::resource('/pasien', 'PasienController');
Route::resource('/penyakit', 'PenyakitController');
Route::resource('/gejala', 'GejalaController');

Route::resource('/pertanyaan', 'PertanyaanController');
Route::resource('/diagnosa', 'DiagnosaController');
Route::resource('/solusi', 'SolusiController');
Route::resource('/kaidah_produksi', 'KaidahproduksiController');
Route::resource('/hasil_konsultasi', 'HasilkonsultasiController');
Route::resource('/submit_pasien', 'SubmitpasienController');

Route::resource('/konsultasi', 'KonsultasiclientController');
