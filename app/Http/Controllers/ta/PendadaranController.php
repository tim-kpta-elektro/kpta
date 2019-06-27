<?php

namespace App\Http\Controllers\ta;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use PDF;

class PendadaranController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (!Session::get('login')) {
                return redirect('login')->with('alert', 'Kamu harus login dulu');
            } elseif (!Session::get('level') == 1) {
                return redirect('dashboard');
            } else {
                return $next($request);
            }
        });
    }

    public function pengajuan()
    {
        $ta = DB::table('ta')
            ->where('nim_mhs', Session::get('nim'))
            ->first();

        $data = DB::table('mahasiswa')
            ->where('nim', Session::get('nim'))
            ->first();
        // echo "<pre>";print_r($ta);exit;
        if ($data && $ta) {
            $pembimbing1 = DB::table('pembimbing')
                ->join('dosen', 'dosen.kode_dosen', '=', 'pembimbing.pembimbing1')
                ->where('id_ta', $ta->id_ta)
                ->first();
            $pembimbing2 = DB::table('pembimbing')
                ->join('dosen', 'dosen.kode_dosen', '=', 'pembimbing.pembimbing2')
                ->where('id_ta', $ta->id_ta)
                ->first();

            return view('ta/pengajuan_pendadaran', [
                'data'  => $data,
                'ta'    => $ta,
                'pembimbing1' => $pembimbing1,
                'pembimbing2' => $pembimbing2,
            ]);
        }
        return abort(404);
    }

    public function store(Request $request)
    {
        // echo "<pre>";print_r($request);exit;
        date_default_timezone_set('Asia/Jakarta');

        $validatedData = $request->validate([
            'tanggal' => 'required',
            'tempat' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        $ta = DB::table('ta')
            ->where('nim_mhs', Session::get('nim'))
            ->first();
        // echo "<pre>";print_r($ta->id_ta);exit;
        if ($ta) {
            DB::table('seminar_ta')->insert([
                'id_ta' => $ta->id_ta,
                'tanggal' => $request->tanggal,
                'tempat' => $request->tempat,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'status_seminar' => 'PENDING'
            ]);
            return redirect('dashboard');
        }
    }

    public function cetak_persetujuan(){

        $pdf = PDF::loadview('/ta/laporan/cetak_persetujuan');
        return $pdf->stream();
    }

    public function cetak_undangan(){
    	$pdf = PDF::loadview('/ta/laporan/cetak_undangan');
    	return $pdf->stream();
    }

    public function cetak_bukti(){
    	$pdf = PDF::loadview('/ta/laporan/cetak_bukti');
    	return $pdf->stream();
    }
}

?>
