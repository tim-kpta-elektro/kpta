@extends('_partials/master')
@section('konten')
<!-- Page Content -->
<div class="content">
<!-- Labels on top -->
<div class="block">
    <div class="block-header">
        <h1 class="block-title" style="text-align: center; color: red;">Menunggu Persetujuan Admin Kerja Praktek</h1>
    </div>
    <div class="block-content block-content-full">
        <p><strong>Mohon Cetak</strong> <a href="{{url('/kp/pengajuan/cetak_pengajuankp')}}" class="btn btn-sm btn-primary" target="_blank">Lembar Pengajuan KP</a></p>
    	<table class="table">
            <tr>
                <td>Nama:</td>
                <td><strong>{{$test1->nama_mhs}}</strong></td>
            </tr>
            <tr>
                <td>NIM:</td>
                <td><strong>{{$test1->nim}}</strong></td>
            </tr>
            <tr>
                <td>Jumlah SKS Lulus:</td>
                <td><strong>{{$test1->sks}}</strong></td>
            </tr>
            <tr>
                <td>Indeks Prestasi Mahasiswa (IPK):</td>
                <td><strong>{{$test1->ipk}}</strong></td>
            </tr>
            <tr>
                <td>Nama Perusahaan:</td>
                <td><strong>{{$test1->perusahaan_nama}}</strong></td>
            </tr>
            <tr>
                <td>Alamat Perusahaan:</td>
                <td><strong>{{$test1->perusahaan_almt}}</strong></td>
            </tr>
            <tr>
                <td>Jenis Perusahaan:</td>
                <td><strong>{{$test1->perusahaan_jenis}}</strong></td>
            </tr>
            <tr>
                <td>PIC:</td>
                <td><strong>{{$test1->pic}}</strong></td>
            </tr>
            <tr>
                <td>Tanggal Mulai KP:</td>
                <td><strong>{{$test1->tgl_mulai_kp}}</strong></td>
            </tr>
            <tr>
                <td>Tanggal Selesai KP:</td>
                <td><strong>{{$test1->tgl_selesai_kp}}</strong></td>
            </tr>
        </table>
    </div>
</div>
<!-- END Labels on top -->
</div>

@endsection