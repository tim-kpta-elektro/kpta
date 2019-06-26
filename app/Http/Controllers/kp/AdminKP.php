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

	public function pembimbing($id){
		$data = DB::table('mahasiswa')
			->where('nim',$id)
			->get();
		$pem = DB::table('dosen')->select('kode_dosen','nip','nama_dosen','status_dosen')->get();
		return view('kp/admin/pilihpem',['data'=>$data,'pem'=>$pem]);
	}

	public function updatepem(Request $request){
    	DB::table('mahasiswa')->where('nim',$request->nim)->update([
    		'pem_kp' => $request->pem_kp
    	]);
    	return redirect('dashboard');
    }

	public function pengajuankp(){
		$data = DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->where('status_kp','PENDING')
			->get();
		return view('kp/admin/pengajuan',['data'=>$data]);
	}

	public function seminarkp(){
		$data = DB::table('kp')
			->join('seminar_kpp','kp.id_kp','=','seminar_kpp.id_kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->where('status_seminarkp','PENDING')
			->get();
		return view('kp/admin/seminar',['data'=>$data]);
	}

	public function editkp($id){
		$data = DB::table('kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->where('nim_mhs',$id)
			->get();
		//dd($data);
		return view('kp/admin/editkp',['data'=>$data]);
	}

	public function updatekp(Request $request){
    	//Update data
		switch ($request->input('action')) {
        case 'setuju':
	    	DB::table('kp')->where('nim_mhs',$request->nim)->update([
	    		'status_kp' =>'SETUJU'
	    	]);
			return redirect('dashboard');
            break;

        case 'tolak':
            DB::table('kp')->where('nim_mhs',$request->nim)->update([
	    		'status_kp' =>'TOLAK'
	    	]);
			return redirect('dashboard');
            break;
    	}
	}

	public function hapuskp($id){
    	DB::table('kp')->where('nim_mhs',$id)->update([
    		'status_kp' => 'HAPUS'
    	]);
    	\Session::flash('delete', 'Data berhasil dihapus.');
    	return redirect('dashboard');
    }

	public function editsem($id){
		$data = DB::table('kp')
			->join('seminar_kpp','kp.id_kp','=','seminar_kpp.id_kp')
			->join('mahasiswa','mahasiswa.nim','=','kp.nim_mhs')
			->join('ref_ruang','seminar_kpp.ruang','=','ref_ruang.id_ruang')
			->where('kp.id_kp',$id)
			->get();
		//dd($data);
		return view('kp/admin/editsem',['data'=>$data]);
	}

	public function updatesem(Request $request){
		switch ($request->input('action')) {
        case 'setuju':
	    	DB::table('seminar_kpp')->where('id_kp',$request->id_kp)->update([
	    		'status_seminarkp' =>'SETUJU'
	    	]);
			return redirect('dashboard');
            break;

        case 'tolak':
            DB::table('seminar_kpp')->where('id_kp',$request->id_kp)->update([
	    		'status_seminarkp' =>'TOLAK'
	    	]);
			return redirect('dashboard');
            break;
    	}	
	}
}
