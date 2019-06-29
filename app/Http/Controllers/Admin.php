<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\ModelUser;

class Admin extends Controller
{
    //
    public function __construct()
	{
        $this->middleware(function ($request, $next) {
	        if(!Session::get('login')){
	            return redirect('login')->with('alert','Kamu harus login dulu');
	        }elseif (!Session::get('level') == 2) {
	        	return redirect('dashboard');
	        }else{
	            return $next($request);
	        }
    	});
	}

	public function pemakademik(){
		//$data = Mahasiswa::all();
		$data = DB::table('mahasiswa')
    				->select('nim', 'nama_mhs','nama_dosen')
    				->leftJoin('dosen','mahasiswa.pem_akademik','=','dosen.kode_dosen')
    				->get();
		return view('admin/listmhs',['data'=>$data]);
	}

	public function pembimbing($id){
		$data = DB::table('mahasiswa')
			->where('nim',$id)
			->get();
		$pem = DB::table('dosen')->select('kode_dosen','nip','nama_dosen','status_dosen')->get();
		return view('admin/pemakademik',['data'=>$data,'pem'=>$pem]);
	}

	public function updatepem(Request $request){
    	DB::table('mahasiswa')->where('nim',$request->nim)->update([
    		'pem_akademik' => $request->pem_akademik
    	]);
    	return redirect('dashboard');
    }

    public function register(Request $request){
        return view('admin/register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'nim' => 'required|min:4|unique:users',
            'email' => 'required|min:4|email|unique:users',
            'level' => 'required',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->nim = $request->nim;
        $data->email = $request->email;
        $data->level = $request->level;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('dashboard');
    }
}