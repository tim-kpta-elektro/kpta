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
        $setuju = DB::table('ta')
            ->where('nim_mhs', Session::get('nim'))
            ->where('status_ta', 'SETUJU')
            ->first();

        $pending = DB::table('ta')
            ->where('nim_mhs', Session::get('nim'))
            ->where('status_ta', 'PENDING')
            ->first();

        $tolak = DB::table('ta')
            ->where('nim_mhs', Session::get('nim'))
            ->where('status_ta', 'TOLAK')
            ->first();

        $data = DB::table('mahasiswa')
            ->where('nim', Session::get('nim'))
            ->first();

        $dosens = DB::table('dosen')
            ->where('status_dosen', 'AKTIF')
            ->orderBy('nama_dosen')
            ->get();
        $peminatans = DB::table('peminatan')
            ->where('angkatan', $data->angkatan)
            ->orderBy('nama_peminatan')
            ->get();

        if ($setuju != null) { //jika SETUJU ada isinya maka
            $pembimbing1 = DB::table('pembimbing')
                ->join('dosen', 'dosen.kode_dosen', '=', 'pembimbing.pembimbing1')
                ->where('id_ta', $setuju->id_ta)
                ->first();
            $pembimbing2 = DB::table('pembimbing')
                ->join('dosen', 'dosen.kode_dosen', '=', 'pembimbing.pembimbing2')
                ->where('id_ta', $setuju->id_ta)
                ->first();
            $peminatans = DB::table('peminatan')
                ->where('id', $setuju->kode_peminatan)
                ->first();
            $matkuls = DB::table('matkul')
                ->where('id_ta', $setuju->id_ta)
                ->get();
            return view('ta/setuju_ta', [
                'setuju' => $setuju,
                'data' => $data,
                'pembimbing1' => $pembimbing1,
                'pembimbing2' => $pembimbing2,
                'matkuls'     => $matkuls,
                'peminatans' => $peminatans
            ]);
        } elseif ($pending != null) { //jika PENDING ada isinya maka
            $pembimbing1 = DB::table('pembimbing')
                ->join('dosen', 'dosen.kode_dosen', '=', 'pembimbing.pembimbing1')
                ->where('id_ta', $pending->id_ta)
                ->first();
            $pembimbing2 = DB::table('pembimbing')
                ->join('dosen', 'dosen.kode_dosen', '=', 'pembimbing.pembimbing2')
                ->where('id_ta', $pending->id_ta)
                ->first();
            $peminatans = DB::table('peminatan')
                ->where('id', $pending->kode_peminatan)
                ->first();
            $matkuls = DB::table('matkul')
                ->where('id_ta', $pending->id_ta)
                ->get();
            // echo "<pre>";print_r($matkuls);exit;
            return view('ta/pending_ta', [
                'pending' => $pending,
                'data' => $data,
                'pembimbing1' => $pembimbing1,
                'pembimbing2' => $pembimbing2,
                'matkuls'     => $matkuls,
                'peminatans' => $peminatans
            ]);
        } elseif ($tolak != null) { //jika TOLAK ada isinya maka
            # code...
        } elseif ($data != null) {
            return view('ta/pengajuan', [
                'data' => $data,
                'dosens' => $dosens,
                'peminatans' => $peminatans
            ]);
        }

        // $data = DB::table('mahasiswa')
        //     ->where('nim', Session::get('nim'))
        //     ->first();
        // if ($data) {
        //     $dosens = DB::table('dosen')
        //         ->where('status_dosen', 'AKTIF')
        //         ->orderBy('nama_dosen')
        //         ->get();
        //     $peminatans = DB::table('peminatan')
        //         ->where('angkatan', $data->angkatan)
        //         ->orderBy('kode')
        //         ->get();
        //     return view('ta/pengajuan', [
        //         'data' => $data,
        //         'dosens' => $dosens,
        //         'peminatans' => $peminatans
        //     ]);
        // }
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
            for ($i = 1; $i <= 3; $i++) {
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
