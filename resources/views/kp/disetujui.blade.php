@extends('_partials/master')
@section('konten')
<!-- Hero -->
<div class="bg-body-light">
<div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-sm-fill h3 my-2">
            Form Pengajuan Kerja Praktek
        </h1>
        <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alt">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="link-fx" href="">Form Pengajuan KP</a>
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
<a href="{{url('/kp/pengajuan/cetak_surat')}}" class="btn btn-primary" target="_blank">Surat Pengajuan KP</a>
<a href="{{url('/kp/pengajuan/cetak_form')}}" class="btn btn-primary" target="_blank">Form Konsultasi KP</a>
<br><br>
<div class="block">
    <div class="block-header">
        <h3 class="block-title">Pengajuan Kerja Praktek</h3>
    </div>
    <div class="block-content block-content-full">
        <table class="table">
            <tr>
                <td style="width: 30%">Nama</td>
                <td style="width: 5%">:</td>
                <td style="width: 65%"><strong>{{$test->nama_mhs}}</strong></td>
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
                <td>Alamat Perusahaan</td>
                <td>:</td>
                <td><strong>{{$test->perusahaan_almt}}</strong></td>
            </tr>
            <tr>
                <td>Jenis Perusahaan</td>
                <td>:</td>
                <td><strong>{{$test->perusahaan_jenis}}</strong></td>
            </tr>
            <tr>
                <td>PIC</td>
                <td>:</td>
                <td><strong>{{$test->pic}}</strong></td>
            </tr>
            <tr>
                <td>Tanggal Mulai KP</td>
                <td>:</td>
                <td><strong>{{$test->tgl_mulai_kp}}</strong></td>
            </tr>
            <tr>
                <td>Tanggal Selesai KP</td>
                <td>:</td>
                <td><strong>{{$test->tgl_selesai_kp}}</strong></td>
            </tr>
        </table>
    </div>
</div>
<!-- END Labels on top -->
</div>
@endsection