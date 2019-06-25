<?php

namespace App\Http\Controllers\kp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\PengajuanKP;
use App\Kp;
use App\Mahasiswa;
use PDF;

class PelaksanaanKP extends Controller
{
	public function __construct()
	{
        $this->middleware(function ($request, $next) {
	        if(!Session::get('login')){
	            return redirect('login')->with('alert','Kamu harus login dulu');
	        }elseif (Session::get('level') !== 1) {
	        	return redirect('dashboard');
	        }else{
	            return $next($request);
	        }
    	});
	}

	public function cetak_lembartugas()
	{
		$data= DB::table('kp')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','SETUJU')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('dosen','pem_kp','=','kode_dosen')
			->select('nama_mhs','nim','nama_dosen','nip','perusahaan_nama','perusahaan_almt','tgl_mulai_kp','tgl_selesai_kp')
			->first();

		if ($data != null) {
			$pdf = PDF::loadview('/kp/cetak_lmbrtugas',['data'=>$data]);
			return $pdf->stream();
		} else {
			return view('kp/error2');
		}
		
	}

	public function cetak_formnilai()
	{
		$data= DB::table('kp')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','SETUJU')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('dosen','pem_kp','=','kode_dosen')
			->select('nama_mhs','nim','nama_dosen','nip','perusahaan_nama','perusahaan_almt','tgl_mulai_kp','tgl_selesai_kp')
			->first();
		if ($data != null) {
			$pdf = PDF::loadview('/kp/cetak_formnilai',['data'=>$data]);
			return $pdf->stream();
		} else {
			return view('kp/error2');
		}
	}
}