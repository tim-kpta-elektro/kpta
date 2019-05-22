<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function home()
    {
    	$listkp = DB::table('daftar_kp')
    			->select('nim','mhs_nama','perusahaan_nama','perusahaan_almt')
    			->get();
    	$semkp = DB::table('seminar_kp')
    			->select('*')->get();
    	return view('dashboard',['listkp'=>$listkp,'semkp'=>$semkp]);
    }
}