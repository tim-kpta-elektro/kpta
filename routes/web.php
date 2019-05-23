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
Route::get('/dashboard','DashController@home');

//Route Kerja Praktek
Route::get('/pengajuan','PkpController@index');
Route::get('/pengajuan/cetak_surat','PkpController@cetak_surat');
Route::get('/pengajuan/cetak_form','PkpController@cetak_form');

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->middleware('admin');

Route::get('admin/login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin/login', 'Auth\AdminLoginController@login')->name('admin.login');

Route::group(['prefix' => 'admin','middleware' => 'assign.guard:admin,admin/login'],function(){

	Route::get('home',function ()
	{
		return view('adminhome');
	});

});

Route::get('adminkp/login', 'Auth\AdminKPLoginController@showLoginForm');
Route::post('adminkp/login', 'Auth\AdminKPLoginController@login')->name('adminkp.login');

Route::group(['prefix' => 'adminkp','middleware' => 'assign.guard:adminkp,adminkp/login'],function(){

	Route::get('home',function ()
	{
		return view('adminkp');
	});

});

Route::get('adminta/login', 'Auth\AdminTALoginController@showLoginForm');
Route::post('adminta/login', 'Auth\AdminTALoginController@login')->name('adminta.login');

Route::group(['prefix' => 'adminta','middleware' => 'assign.guard:adminta,adminta/login'],function(){

	Route::get('home',function ()
	{
		return view('adminta');
	});

});


Route::get('dosen/login', 'Auth\DosenLoginController@showLoginForm');
Route::post('dosen/login', 'Auth\DosenLoginController@login')->name('dosen.login');

Route::group(['prefix' => 'dosen','middleware' => 'assign.guard:dosen,dosen/login'],function(){

	Route::get('home',function ()
	{
		return view('dosen');
	});

});
