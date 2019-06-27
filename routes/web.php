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
Route::post('/kp/pengajuan/store','kp\PkpController@store');
Route::post('/kp/pengajuan/update','kp\PkpController@update');
//Route::get('/kp/pengajuan/show','kp\PkpController@show');
Route::get('/kp/pengajuan/cetak_pengajuankp','kp\PkpController@cetak_pengajuankp');
Route::get('/kp/pengajuan/cetak_konsul','kp\PkpController@cetak_konsul');
Route::get('/kp/pengajuan/cetak_surat','kp\PkpController@cetak_surat');
Route::get('/kp/pengajuan/cetak_form','kp\PkpController@cetak_form');
//Pelaksanaan KP
Route::get('/kp/pelaksanaan/cetak_lmbr_tugas','kp\PelaksanaanKP@cetak_lembartugas');
Route::get('/kp/pelaksanaan/cetak_form_nilai','kp\PelaksanaanKP@cetak_formnilai');
//Seminar KP
Route::get('/kp/seminarkp','kp\SeminarKP@index');
Route::post('/kp/seminarkp/store','kp\SeminarKP@store_sem');
Route::post('/kp/seminarkp/update','kp\SeminarKP@update_sem');
Route::get('/kp/seminarkp/cetak_seminarkp','kp\SeminarKP@cetak_pengajuansem');
Route::get('/kp/seminarkp/cetak_undangan','kp\SeminarKP@cetak_undangan');
Route::get('/kp/seminarkp/cetak_daftarhadir','kp\SeminarKP@cetak_daftarhadir');
//Admin KP
Route::get('/kp/pembimbing','kp\AdminKP@pemkp');
Route::get('/kp/pembimbing/{id}', 'kp\AdminKP@pembimbing');
Route::post('/kp/pembimbing/update', 'kp\AdminKP@updatepem');
Route::get('/kp/kerjapraktek','kp\AdminKP@pengajuankp');
Route::get('/kp/kerjapraktek/edit/{id}', 'kp\AdminKP@editkp');
Route::post('/kp/kerjapraktek/update', 'kp\AdminKP@updatekp');
Route::get('/kp/seminar','kp\AdminKP@seminarkp');
Route::get('/kp/seminar/edit/{id}', 'kp\AdminKP@editsem');
Route::post('/kp/seminar/update', 'kp\AdminKP@updatesem');
//Admin
Route::get('/admin/pembimbing','Admin@pemakademik');
Route::get('/admin/pembimbing/{id}', 'Admin@pembimbing');
Route::post('/admin/pembimbing/update', 'Admin@updatepem');
Route::get('/admin/register', 'Admin@register');
Route::post('/admin/registerPost', 'Admin@registerPost');


//Route Tugas Akhir
Route::get('ta/admin/daftar_pengajuan','ta\DaftarPengajuanController@daftar_pengajuan');
Route::get('ta/admin/mahasiswa_ta','ta\koordinatorController@mahasiswa_ta');
//Route Pengajuan
Route::get('/ta/pengajuan','ta\PengajuanController@pengajuan');
Route::post('/ta/pengajuan/store','ta\PengajuanController@store');

//Route Laporan
Route::get('/ta/laporan/daftar_hadir_dosen','ta\LaporanController@daftar_hadir_dosen');
Route::get('/ta/laporan/berita_acara','ta\LaporanController@berita_acara');
//Route Pendadaran
Route::get('/ta/pengajuan_pendadaran','ta\PendadaranController@pengajuan');
Route::post('/ta/pengajuan_pendadaran/store','ta\PendadaranController@store');
Route::get('/pendadaran/cetak_persetujuan','ta\PendadaranController@cetak_persetujuan');
Route::get('/pendadaran/cetak_undangan','ta\PendadaranController@cetak_undangan');
Route::get('/pendadaran/cetak_bukti','ta\PendadaranController@cetak_bukti');
//Route Seminar
Route::get('/ta/pengajuan_seminar','ta\SeminarController@pengajuan');
Route::post('/ta/pengajuan_seminar/store','ta\SeminarController@store');



//User Login
Route::get('/home_user', 'User@index');
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');

