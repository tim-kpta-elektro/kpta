<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PengajuanKP;

class PkpController extends Controller
{
    public function index()
    {
    	return view('kp/pengajuankp');
    }
}
