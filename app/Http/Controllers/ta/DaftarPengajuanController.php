<?php

namespace App\Http\Controllers\ta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class DaftarPengajuanController extends Controller{
	public function __construct(){
		$this->middleware(function ($request, $next){
			if(!Session::get('login')){
				return redirect('login')->with('alert','Kamu harus login dulu');
			} elseif (!Session::get('level') == 4){
				return redirect('dashboard');
			} else {
				return $next($request);
			}
		});
	}

    public function daftar_pengajuan(){
        $mahasiswa_ta = DB::table('ta')
        		->join('mahasiswa','ta.nim_mhs','=','mahasiswa.nim')
	    		->select('*')
	    		->where('status_ta','PENDING')
	    		->get();

	    $peminatan_ta = DB::table('ta')
        		->join('peminatan','ta.kode_peminatan','=','peminatan.id')
	    		->select('*')
	    		->first();
	    $matkul_ta = DB::table('ta')
        		->join('matkul','ta.id_ta','=','matkul.id_ta')
	    		->select('*')
	    		->get();

	    $dosen = DB::table('dosen')
	    		->select('*')
	    		->get();
	    		
	    $pembimbing1_ta = DB::table('ta')
        		->join('pembimbing','ta.id_ta','=','pembimbing.id_ta')
        		->join('dosen','pembimbing.pembimbing1','=','kode_dosen')
	    		->select('*')
	    		->first();

	    $pembimbing2_ta = DB::table('ta')
        		->join('pembimbing','ta.id_ta','=','pembimbing.id_ta')
        		->join('dosen','pembimbing.pembimbing2','=','kode_dosen')
	    		->select('*')
	    		->first();
	    	
	    return view('ta/admin/daftar_pengajuan',['mahasiswa_ta'=>$mahasiswa_ta,'peminatan_ta'=>$peminatan_ta,'matkul_ta'=>$matkul_ta,'pembimbing1_ta'=>$pembimbing1_ta,'pembimbing2_ta'=>$pembimbing2_ta,'dosen'=>$dosen]);	
    }


}

?>