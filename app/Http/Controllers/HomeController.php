<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
    	$listkp['listkp'] = DB::table('daftar_kp')
    			->select('nim','mhs_nama','perusahaan_nama','perusahaan_almt')
    			->get();

    	return view('dashboard',$listkp);
    }
}
