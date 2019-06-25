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
<a href="{{url('/kp/seminarkp/cetak_undangan')}}" class="btn btn-primary" target="_blank">Cetak Undangan Seminar KP</a>
<a href="{{url('/kp/seminarkp/cetak_daftarhadir')}}" class="btn btn-primary" target="_blank">Cetak Daftar Hadir Seminar KP</a>
<br><br>
<div class="block">
    <div class="block-header">
        <h3 class="block-title">Pengajuan Seminar Kerja Praktek</h3>
    </div>
    <div class="block-content block-content-full">
    	<table class="table">
            <tr>
                <td style="width: 30%">Nama</td>
                <td style="width: 3%">:</td>
                <td style="width: 67%"><strong>{{$test1->nama_mhs}}</strong></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><strong>{{$test1->nim}}</strong></td>
            </tr>
            <tr>
                <td>Jumlah SKS Lulus</td>
                <td>:</td>
                <td><strong>{{$test1->sks}}</strong></td>
            </tr>
            <tr>
                <td>Indeks Prestasi Mahasiswa (IPK)</td>
                <td>:</td>
                <td><strong>{{$test1->ipk}}</strong></td>
            </tr>
            <tr>
                <td>Nama Perusahaan</td>
                <td>:</td>
                <td><strong>{{$test1->perusahaan_nama}}</strong></td>
            </tr>
            <tr>
                <td>Judul Seminar</td>
                <td>:</td>
                <td><strong>{{$test1->judul_seminar}}</strong></td>
            </tr>
            <tr>
                <td>Tanggal Seminar</td>
                <td>:</td>
                <td><strong>{{$test1->tanggal}}</strong></td>
            </tr>
            <tr>
                <td>Jam Mulai Seminar</td>
                <td>:</td>
                <td><strong>{{$test1->jam_mulai}}</strong></td>
            </tr>
            <tr>
                <td>Jam Selesai Seminar</td>
                <td>:</td>
                <td><strong>{{$test1->jam_selesai}}</strong></td>
            </tr>
            <tr>
                <td>Ruang Seminar</td>
                <td>:</td>
                <td><strong>{{$test1->nama_ruang}}</strong></td>
            </tr>
        </table>
    </div>
</div>
<!-- END Labels on top -->
</div>

@endsection