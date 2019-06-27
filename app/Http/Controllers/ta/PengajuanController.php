<?php

namespace App\Http\Controllers\ta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PengajuanController extends Controller
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
        $data = DB::table('mahasiswa')
            ->where('nim', Session::get('nim'))
            ->first();
        if ($data) {
            $dosens = DB::table('dosen')
                ->where('status_dosen', 'AKTIF')
                ->orderBy('nama_dosen')
                ->get();
            $peminatans = DB::table('peminatan')
                ->where('angkatan', $data->angkatan)
                ->orderBy('kode')
                ->get();
            return view('ta/pengajuan', [
                'data' => $data,
                'dosens' => $dosens,
                'peminatans' => $peminatans
            ]);
        }
        // echo "<pre>";print_r($dosen);exit;
        return abort(404);
    }

    public function store(Request $request)
    {
        // echo "<pre>";print_r($request);exit;
		date_default_timezone_set('Asia/Jakarta');

        $validatedData = $request->validate([
            'sks' => 'required|numeric',
            'ipk' => 'required',
            'kode_peminatan' => 'required',
            'judul' => 'required',
            'abstrak' => 'required',
            'kode_mk1' => 'required',
            'mk1' => 'required',
            'nilai_mk1' => 'required|numeric',
            'huruf_mk1' => 'required',
            'kode_mk2' => 'required',
            'mk2' => 'required',
            'nilai_mk2' => 'required|numeric',
            'huruf_mk2' => 'required',
            'kode_mk3' => 'required',
            'mk3' => 'required',
            'nilai_mk3' => 'required|numeric',
            'huruf_mk3' => 'required',
        ]);

        DB::table('mahasiswa')->where('nim', $request->nim)->update([
            'sks' => $request->sks,
            'ipk' => $request->ipk,
        ]);

        $ta = DB::table('ta')->insert([
            'judul' => $request->judul,
            'nim_mhs' => $request->nim,
            'abstrak' => $request->abstrak,
            'kode_peminatan' => $request->kode_peminatan,
    		'tgl_pengajuan' => date('Y-m-d H:i:s'),
            'status_ta' => 'PENDING'
        ]);
        $id = DB::getPdo()->lastInsertId();;
        if ($ta) {
            for($i=1;$i<=3;$i++){
                $mk = 'mk' . $i;
                $kode_mk = 'kode_mk' . $i;
                $nilai_mk = 'nilai_mk' . $i;
                $huruf_mk = 'huruf_mk' . $i;
                // echo "<pre>";print_r($request->$mk);exit;
                DB::table('matkul')->insert([
                    'id_ta' => $id,
                    'nama_matkul' => $request->$mk,
                    'kode_matkul' => $request->$kode_mk,
                    'ip' => $request->$nilai_mk,
                    'huruf' => $request->$huruf_mk,
                ]);
            }

            DB::table('pembimbing')->insert([
                'id_ta' => $id,
                'pembimbing1' => $request->pembimbing1,
                'pembimbing2' => $request->pembimbing2,
            ]);
            // alihkan halaman ke halaman index
            return redirect('dashboard');
        }
        // alihkan halaman ke halaman index
        // return redirect("{{url('ta/pengajuan')}}");
    }
}
