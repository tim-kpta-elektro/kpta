<?php

namespace App\Http\Controllers\ta;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class koordinatorController extends Controller{

    public function mahasiswa_ta(){
        $mahasiswa_ta = DB::table('ta')
	    		->select('*')
	    		->get();
	    return view('ta/admin/mahasiswa_ta',['mahasiswa_ta'=>$mahasiswa_ta]);	
    }

}

?>