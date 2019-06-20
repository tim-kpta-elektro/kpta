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
    	$listkp = DB::table('daftar_kp')
	    			->select('nim','mhs_nama','perusahaan_nama','perusahaan_almt')
	    			->get();
	    $semkp = DB::table('seminar_kp')
	    			->select('*')->get();
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
