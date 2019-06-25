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

class PkpController extends Controller
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

    public function index()
    {	
    	//Data Kp Sudah Ada
    	$test= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','SETUJU')
			->first();
		$test1= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','PENDING')
			->first();
		$test2= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','TOLAK')
			->first();
		//Data Kp Belum Ada
		$data= DB::table('mahasiswa')
			->join('dosen','pem_kp','=','kode_dosen')
			->where('nim',Session::get('nim'))
			->first();
        //dd($test);
        if ($test != null) {
        	return view('kp/disetujui',['test'=>$test]); //Sudah input dan disetujui
        }else if($test1 != null){
       		return view('kp/pending',['test1'=>$test1]); //Sudah input menunggu persetujuan
       	}else if($test2 != null){
       		return view('kp/ditolak',['test2'=>$test2]); //Sudah input tetapi ditolak
       	}else if($data != null){
       		return view('kp/pengajuankp',['data'=>$data]); //Data pembimbing sudah ada tetapi belum daftar kp
       	}else{
       		return view('kp/error'); //Data pembimbing belum ada
       	}
	}
	
	/*public function show(){
		//$nim = Session::get('nim');
		$test= DB::table('kp')
			->where('nim_mhs',Session::get('nim'))
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->first();
        //Session::put('test', $test);
        //dd($test);
        if ($test != null) {
        	return view('kp/pengajuankpshow',['test'=>$test]);
        } else {
        	return view('kp/pengajuankp');
       	}
	}*/

    public function store(Request $request)
	{
		// insert data ke table kp dan mahasiswa
		date_default_timezone_set('Asia/Jakarta');
		
		$validatedData = $request->validate([
            //'nim_mhs' => 'required',
            //'tgl_ajuan' => 'required|numeric',
            'sks' => 'required|numeric',
            'ipk' => 'required',
            'perusahaan_nama' => 'required',
            'perusahaan_almt' => 'required',
            'perusahaan_jenis' => 'required',
            'pic' => 'required',
            'tgl_mulai_kp' => 'required',
            'tgl_selesai_kp' => 'required',
        ]);

        DB::table('mahasiswa')->where('nim',$request->nim)->update([
			'sks' => $request->sks,
			'ipk' => $request->ipk,
    	]);

		DB::table('kp')->insert([
    		'nim_mhs' => $request->nim,
    		'tgl_ajuan' => date('Y-m-d H:i:s'),
            'perusahaan_nama' => $request->perusahaan_nama,
            'perusahaan_almt' => $request->perusahaan_almt,
            'perusahaan_jenis' => $request->perusahaan_jenis,
            'pic' => $request->pic,
            'tgl_mulai_kp' => $request->tgl_mulai_kp,
            'tgl_selesai_kp' => $request->tgl_selesai_kp,
            'status_kp' => 'PENDING'
    	]);
		// alihkan halaman ke halaman index
		return redirect('dashboard');
	}

	public function update(Request $request)
	{
		// insert data ke table kp dan mahasiswa
		date_default_timezone_set('Asia/Jakarta');
		
		$validatedData = $request->validate([
            //'nim_mhs' => 'required',
            //'tgl_ajuan' => 'required|numeric',
            'sks' => 'required|numeric',
            'ipk' => 'required',
            'perusahaan_nama' => 'required',
            'perusahaan_almt' => 'required',
            'perusahaan_jenis' => 'required',
            'pic' => 'required',
            'tgl_mulai_kp' => 'required',
            'tgl_selesai_kp' => 'required',
        ]);

        DB::table('mahasiswa')->where('nim',$request->nim)->update([
			'sks' => $request->sks,
			'ipk' => $request->ipk,
    	]);

		DB::table('kp')->where('nim_mhs',$request->nim)->update([
    		//'tgl_ajuan' => date('Y-m-d H:i:s'),
            'perusahaan_nama' => $request->perusahaan_nama,
            'perusahaan_almt' => $request->perusahaan_almt,
            'perusahaan_jenis' => $request->perusahaan_jenis,
            'pic' => $request->pic,
            'tgl_mulai_kp' => $request->tgl_mulai_kp,
            'tgl_selesai_kp' => $request->tgl_selesai_kp,
            'status_kp' => 'PENDING'
    	]);
		// alihkan halaman ke halaman dashboard
		return redirect('dashboard');
	}

	public function cetak_pengajuankp()
	{
		$data =DB::table('kp')
			->where('nim_mhs',Session::get('nim'))
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->first();
		$pdf = PDF::loadview('/kp/cetak_pengajuankp',['data'=>$data]);
		return $pdf->stream();
	}

	public function cetak_konsul(){
		$data= DB::table('mahasiswa')
			->where('nim',Session::get('nim'))
			->join('dosen','pem_kp','=','kode_dosen')
			->select('nama_mhs','nim','nama_dosen','nip')
			->first();
		$pdf = PDF::loadview('/kp/cetak_konsul',['data'=>$data]);
		return $pdf->stream();	
	}

	public function cetak_surat()
	{
		$data =DB::table('kp')
			->where('nim_mhs',Session::get('nim'))
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->first();
	 	$pdf = PDF::setOptions(['isRemoteEnabled' => 'true']);
		$pdf = PDF::loadview('/kp/cetak_surat',['data'=>$data]);
		return $pdf->stream();
	}

	public function cetak_form()
	{
		$data= DB::table('kp')
			->where('nim_mhs',Session::get('nim'))
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('dosen','pem_kp','=','kode_dosen')
			->select('nama_mhs','nim','nama_dosen','nip','perusahaan_nama','perusahaan_almt','tgl_mulai_kp','tgl_selesai_kp')
			->first();
		$pdf = PDF::loadview('/kp/cetak_form',['data'=>$data]);
		return $pdf->stream();
	}

}
