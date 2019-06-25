<?php

namespace App\Http\Controllers\kp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Mahasiswa;

class AdminKP extends Controller
{
    //
    public function __construct()
	{
        $this->middleware(function ($request, $next) {
	        if(!Session::get('login')){
	            return redirect('login')->with('alert','Kamu harus login dulu');
	        }elseif (Session::get('level') !== 3) {
	        	return redirect('dashboard');
	        }else{
	            return $next($request);
	        }
    	});
	}

	public function pemkp(){
		//$data = Mahasiswa::all();
		$data = DB::table('mahasiswa')
    				->select('nim', 'nama_mhs','nama_dosen')
    				->leftJoin('dosen','mahasiswa.pem_kp','=','dosen.kode_dosen')
    				->get();
		return view('kp/admin/pembimbing',['data'=>$data]);
	}
}
