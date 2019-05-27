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
Route::get('/seminarkp','PkpController@seminarkp');
Route::get('/seminarkp/cetak_surat_seminarkp','PkpController@cetak_surat_seminarkp');
Route::get('/seminarkp/cetak_undangan','PkpController@cetak_undangan');
Route::get('/seminarkp/cetak_daftarhadir','PkpController@cetak_daftarhadir');