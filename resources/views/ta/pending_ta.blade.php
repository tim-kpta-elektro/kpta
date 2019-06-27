@extends('_partials/master')
@section('konten')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Form Pengajuan Tugas Akhir
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Form Pengajuan TA</a>
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
            <h1 class="block-title" style="text-align: center; color: red;">Menunggu Persetujuan Admin Tugas Akhir</h1>
        </div>
        <div class="block-content block-content-full">
            <p><strong>Mohon Cetak</strong> <a href="#" class="btn btn-sm btn-primary" target="_blank">Lembar Pengajuan TA</a></p>
            <div>
                <table class="table">
                    <tr>
                        <td>Nama:</td>
                        <td><strong>{{$data->nama_mhs}}</strong></td>
                    </tr>
                    <tr>
                        <td>NIM:</td>
                        <td><strong>{{$data->nim}}</strong></td>
                    </tr>
                    <tr>
                        <td>Jumlah SKS Lulus:</td>
                        <td><strong>{{$data->sks}}</strong></td>
                    </tr>
                    <tr>
                        <td>Indeks Prestasi Mahasiswa (IPK):</td>
                        <td><strong>{{$data->ipk}}</strong></td>
                    </tr>
                    <tr>
                        <td>Bidang Keahlian:</td>
                        <td><strong>{{$peminatans->nama_peminatan}}</strong></td>
                    </tr>
                    <tr>
                        <td>Judul:</td>
                        <td><strong>{{$pending->judul}}</strong></td>
                    </tr>
                    <tr>
                        <td>Abstrak:</td>
                        <td><strong>{{$pending->abstrak}}</strong></td>
                    </tr>
                    <tr>
                        <td>Pembimbing 1:</td>
                        <td><strong>{{$pembimbing1->nama_dosen}}</strong></td>
                    </tr>
                    <tr>
                        <td>Pembimbing 2:</td>
                        <td><strong>{{$pembimbing2->nama_dosen}}</strong></td>
                    </tr>
                </table>
            </div>
            <div>
            <table class="table table-bordered table-striped table-vcenter ">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center" style="width: 80px;">Kode</th>
                        <th class="d-none d-sm-table-cell text-center">Nama Mata Kuliah</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Nilai</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 20%;">Huruf</th>
                    </tr>
                </thead>
                <tbody>
                	<?php $no=1; ?>
                    <?php foreach ($matkuls as $matkul): ?>
                      <tr>
                        <td class="text-center font-size-sm text-center">{{$no++}}</td>
                        <td class="text-center font-size-sm text-center">{{$matkul->kode_matkul}}</td>
                        <td class="font-w600 font-size-sm text-center">
                            <a href="#">{{$matkul->nama_matkul}}</a>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                            {{$matkul->ip}}
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                            {{$matkul->huruf}}
                        </td>
                      </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <!-- END Labels on top -->
</div>

@endsection
