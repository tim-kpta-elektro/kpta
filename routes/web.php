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

//Route Dashboard
Route::get('/dashboard','HomeController@home');

//Route Kerja Praktek
Route::get('/pengajuan','PkpController@index');
Route::get('/pengajuan/cetak_surat','PkpController@cetak_surat');
Route::get('/pengajuan/cetak_form','PkpController@cetak_form');

//Route Tugas Akhir
Route::get('/ta/laporan/daftar_hadir_dosen','ta\LaporanController@daftar_hadir_dosen');
Route::get('/ta/laporan/berita_acara','ta\LaporanController@berita_acara');

	//Route Pendadaran
	Route::get('/pendadaran/cetak_persetujuan','ta\PendadaranController@cetak_persetujuan');
	Route::get('/pendadaran/cetak_undangan','ta\PendadaranController@cetak_undangan');
	Route::get('/pendadaran/cetak_bukti','ta\PendadaranController@cetak_bukti');