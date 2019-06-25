@extends('_partials/master')
@section('konten')
<!-- Hero -->
<div class="bg-body-light">
<div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-sm-fill h3 my-2">
            Form Pengajuan Seminar Kerja Praktek
        </h1>
        <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alt">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="link-fx" href="">Form Pengajuan Seminar KP</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- END Hero -->
<!-- Page Content -->
<div class="content">
<!-- Labels on top -->
<div class="block">
    <div class="block-header">
        <h1 class="block-title" style="text-align: center; color: red;">Menunggu Persetujuan Admin Kerja Praktek</h1>
    </div>
    <div class="block-content block-content-full">
        <p><strong>Mohon Cetak</strong> <a href="{{url('/kp/seminarkp/cetak_seminarkp')}}" class="btn btn-sm btn-primary" target="_blank">Lembar Pengajuan Seminar KP</a></p>
    	<table class="table">
            <tr>
                <td style="width: 30%">Nama</td>
                <td style="width: 3%">:</td>
                <td style="width: 67%"><strong>{{$test->nama_mhs}}</strong></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><strong>{{$test->nim}}</strong></td>
            </tr>
            <tr>
                <td>Jumlah SKS Lulus</td>
                <td>:</td>
                <td><strong>{{$test->sks}}</strong></td>
            </tr>
            <tr>
                <td>Indeks Prestasi Mahasiswa (IPK)</td>
                <td>:</td>
                <td><strong>{{$test->ipk}}</strong></td>
            </tr>
            <tr>
                <td>Nama Perusahaan</td>
                <td>:</td>
                <td><strong>{{$test->perusahaan_nama}}</strong></td>
            </tr>
            <tr>
                <td>Judul Seminar</td>
                <td>:</td>
                <td><strong>{{$test->judul_seminar}}</strong></td>
            </tr>
            <tr>
                <td>Tanggal Seminar</td>
                <td>:</td>
                <td><strong>{{$test->tanggal}}</strong></td>
            </tr>
            <tr>
                <td>Jam Mulai Seminar</td>
                <td>:</td>
                <td><strong>{{$test->jam_mulai}}</strong></td>
            </tr>
            <tr>
                <td>Jam Selesai Seminar</td>
                <td>:</td>
                <td><strong>{{$test->jam_selesai}}</strong></td>
            </tr>
            <tr>
                <td>Ruang Seminar</td>
                <td>:</td>
                <td><strong>{{$test->nama_ruang}}</strong></td>
            </tr>
        </table>
    </div>
</div>
<!-- END Labels on top -->
</div>

@endsection