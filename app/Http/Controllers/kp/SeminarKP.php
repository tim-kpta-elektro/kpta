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

class SeminarKP extends Controller
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

	public function index(){
		$test= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('seminar_kpp','seminar_kpp.id_kp','=','kp.id_kp')
			->join('ref_ruang','seminar_kpp.ruang','=','ref_ruang.id_ruang')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','SETUJU')
			->where('status_seminarkp','PENDING')
			->first();

		$test1= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('seminar_kpp','seminar_kpp.id_kp','=','kp.id_kp')
			->join('ref_ruang','seminar_kpp.ruang','=','ref_ruang.id_ruang')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','SETUJU')
			->where('status_seminarkp','SETUJU')
			->first();

		$test2= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('seminar_kpp','seminar_kpp.id_kp','=','kp.id_kp')
			->join('ref_ruang','seminar_kpp.ruang','=','ref_ruang.id_ruang')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','SETUJU')
			->where('status_seminarkp','TOLAK')
			->first();

		$data= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','SETUJU')
			->first();
		//dd($test);
		if ($test != null) { //sudah input dan disetujui
			return view('kp/sem_pending',['test'=>$test]);
		}elseif ($test1 != null) { //sudah input tetapi belum disetujui
			return view('kp/sem_disetujui',['test1'=>$test1]);
		}elseif ($test2 != null) { //sudah input tetapi ditolak
			return view('kp/sem_ditolak',['test2'=>$test2]);
		}elseif ($data != null) { //sudah input tetapi ditolak
			return view('kp/seminarkp',['data'=>$data]);
		}else{ //belum input
			return view('kp/error3');	
		}
		
	}

	public function store_sem(Request $request)
	{
		// insert data ke table mahasiswa dan seminar_kpp
		$validatedData = $request->validate([
            'sks' => 'required|numeric',
            'ipk' => 'required',
            'id_kp' => 'required',
            //'judul_seminar' => 'required',
            //'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'ruang' => 'required',
        ]);

        DB::table('mahasiswa')->where('nim',$request->nim)->update([
			'sks' => $request->sks,
			'ipk' => $request->ipk,
    	]);

		DB::table('seminar_kpp')->insert([
    		'id_kp' => $request->id_kp,
            'judul_seminar' => $request->judul_laporan,
            'tanggal' => $request->tgl_seminar,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'ruang' => $request->ruang,
            'status_seminarkp' => 'PENDING'
    	]);
		// alihkan halaman ke halaman index
		return redirect('dashboard');
	}

	public function update_sem(Request $request)
	{
		// insert data ke table mahasiswa dan seminar_kpp
		$validatedData = $request->validate([
            'sks' => 'required|numeric',
            'ipk' => 'required',
            //'judul_seminar' => 'required',
            //'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'ruang' => 'required',
        ]);

        DB::table('mahasiswa')->where('nim',$request->nim)->update([
			'sks' => $request->sks,
			'ipk' => $request->ipk,
    	]);

		DB::table('seminar_kpp')->where('id_seminar',$request->id_seminar)->update([
            'judul_seminar' => $request->judul_laporan,
            'tanggal' => $request->tgl_seminar,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'ruang' => $request->ruang,
            'status_seminarkp' => 'PENDING'
    	]);
		// alihkan halaman ke halaman index
		return redirect('dashboard');
	}

	// public function seminarkp ()
	// {
	// 	return view('kp/seminarkp');
	// }

	public function cetak_pengajuansem()
	{
		$test= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('seminar_kpp','seminar_kpp.id_kp','=','kp.id_kp')
			->join('ref_ruang','seminar_kpp.ruang','=','ref_ruang.id_ruang')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','SETUJU')
			->where('status_seminarkp','PENDING')
			->first();
		$pdf = PDF::loadview('/kp/cetak_seminarkp',['test' => $test]);
		return $pdf->stream();
	}

	public function cetak_undangan()
	{
		$test1= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('seminar_kpp','seminar_kpp.id_kp','=','kp.id_kp')
			->join('ref_ruang','seminar_kpp.ruang','=','ref_ruang.id_ruang')
			->join('dosen','pem_kp','=','kode_dosen')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','SETUJU')
			->where('status_seminarkp','SETUJU')
			->first();
		$dayList = array(
			'Sun' => 'Minggu',
			'Mon' => 'Senin',
			'Tue' => 'Selasa',
			'Wed' => 'Rabu',
			'Thu' => 'Kamis',
			'Fri' => 'Jumat',
			'Sat' => 'Sabtu'
		);
		$pdf = PDF::loadview('/kp/cetak_undangan',['test1'=>$test1,'dayList'=>$dayList]);
		return $pdf->stream();
	}

	public function cetak_daftarhadir()
	{
		$test1= DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('seminar_kpp','seminar_kpp.id_kp','=','kp.id_kp')
			->join('ref_ruang','seminar_kpp.ruang','=','ref_ruang.id_ruang')
			->join('dosen','pem_kp','=','kode_dosen')
			->where('nim_mhs',Session::get('nim'))
			->where('status_kp','SETUJU')
			->where('status_seminarkp','SETUJU')
			->first();
		$pdf = PDF::loadview('/kp/cetak_daftarhadir',['test1'=>$test1]);
		return $pdf->stream();
	}
}