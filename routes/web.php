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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route Dashboard
//Route::resource('/dashboard','DashController');
Route::get('/','Welcome@index');
Route::get('/dashboard','DashController@home');

//Route Kerja Praktek
Route::get('/kp/pengajuan','kp\PkpController@index');
Route::get('/kp/pengajuan/cetak_surat','kp\PkpController@cetak_surat');
Route::get('/kp/pengajuan/cetak_form','kp\PkpController@cetak_form');

//Route Tugas Akhir
//Route Pengajuan
Route::get('/ta/pengajuan','ta\PengajuanController@pengajuan');
//Route Laporan
Route::get('/ta/laporan/daftar_hadir_dosen','ta\LaporanController@daftar_hadir_dosen');
Route::get('/ta/laporan/berita_acara','ta\LaporanController@berita_acara');
//Route Pendadaran
Route::get('/pendadaran/cetak_persetujuan','ta\PendadaranController@cetak_persetujuan');
Route::get('/pendadaran/cetak_undangan','ta\PendadaranController@cetak_undangan');
Route::get('/pendadaran/cetak_bukti','ta\PendadaranController@cetak_bukti');


//User Login
Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');