<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Welcome extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware(function ($request, $next) {
	    	if(Session::get('login')){
	            return redirect('dashboard');
	        }else{
	            return $next($request);
	        }
    	});
    }

    public function index(){
    	$listkp = DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->select('nama_mhs','nim','perusahaan_nama','perusahaan_almt')
			->where('status_kp','SETUJU')
			->get();
		$semkp= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('seminar_kpp','seminar_kpp.id_kp','=','kp.id_kp')
			->join('dosen','pem_kp','=','kode_dosen')
			->join('ref_ruang','seminar_kpp.ruang','=','ref_ruang.id_ruang')
			->where('status_kp','SETUJU')
			->where('status_seminarkp','SETUJU')
			->select('nim','nama_mhs','judul_seminar','nama_dosen','tanggal','jam_mulai','jam_selesai','nama_ruang')
			->get();
	    $jumhs = DB::table('mahasiswa')
	    			->count();
	    $mhs_aktif = DB::table('mahasiswa')
	    			->where('status_mhs','AKTIF')
	    			->count();
	    $mhs_lulus = DB::table('mahasiswa')
	    			->where('status_mhs','LULUS')
	    			->count();
	    	return view('welcome',['listkp'=>$listkp,'semkp'=>$semkp,'jumhs'=>$jumhs,'mhs_aktif'=>$mhs_aktif,'mhs_lulus'=>$mhs_lulus]);
    }
}
