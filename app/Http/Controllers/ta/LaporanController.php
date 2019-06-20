<?php

namespace App\Http\Controllers\ta;
use App\Http\Controllers\Controller;
use PDF;

class LaporanController extends Controller
{
    public function daftar_hadir_dosen(){

        $pdf = PDF::loadview('/ta/laporan/hadir_dosen');
        return $pdf->stream();

    }

    public function berita_acara(){

        $pdf = PDF::loadview('/ta/laporan/berita_acara');
        return $pdf->stream();

    }

}

?>
