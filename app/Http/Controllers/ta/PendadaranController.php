<?php

namespace App\Http\Controllers\ta;
use App\Http\Controllers\Controller;
use PDF;

class PendadaranController extends Controller
{
    public function cetak_persetujuan(){

        $pdf = PDF::loadview('/ta/laporan/cetak_persetujuan');
        return $pdf->stream();
    }

    public function cetak_undangan(){
<<<<<<< HEAD
    	$pdf = PDF::loadview('/ta/laporan/cetak_undang');
=======
    	$pdf = PDF::loadview('/ta/laporan/cetak_undangan');
>>>>>>> master
    	return $pdf->stream();
    }

    public function cetak_bukti(){
    	$pdf = PDF::loadview('/ta/laporan/cetak_bukti');
    	return $pdf->stream();
    }
}

?>