<?php

namespace App\Http\Controllers\kp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\PengajuanKP;
use PDF;

class PkpController extends Controller
{

	public function __construct()
	{
        $this->middleware(function ($request, $next) {
	        if(!Session::get('login')){
	            return redirect('login')->with('alert','Kamu harus login dulu');
	        }else{
	            return $next($request);
	        }
    	});
	}

    public function index()
    {
    	return view('kp/pengajuankp');
	}
	
	public function seminarkp ()
	{
		return view('kp/seminarkp');
	}

    public function pengajuankpPost(Request $request)
	{
		// insert data ke table pegawai
		DB::table('daftar_kp')->insert([
			'nim' => $request->nim,
			'mhs_nama' => $request->mhs_nama,
			'sks_lulus' => $request->sks_lulus,
			'ipk' => $request->ipk,
			'perusahaan_nama' => $request->per_nama,
			'perusahaan_almt' => $request->per_almt,
			'perusahaan_jenis' => $request->per_jenis,
			'pic' => $request->pic,
			'tgl_kp' => $request->tgl_mulai,
			'tgl_sls_kp' => $request->tgl_selesai,
			'judul_laporan' => $request->judul_laporan
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('dashboard');
 
	}

	public function cetak_surat()
	{
		$data = PengajuanKP::all();
	 	$pdf = PDF::setOptions(['isRemoteEnabled' => 'true']);
		$pdf = PDF::loadview('/kp/cetak_surat',['data'=>$data]);
		return $pdf->stream();
	}

	public function cetak_form()
	{
		$pdf = PDF::loadview('/kp/cetak_form');
		return $pdf->stream();
	}
	public function cetak_daftarhadir()
	{
		$pdf = PDF::loadview('/kp/cetak_daftarhadir');
		return $pdf->stream();
	}
}
