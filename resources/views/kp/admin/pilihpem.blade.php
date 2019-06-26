@extends('_partials/master')
@section('konten')
<!-- Hero -->
<div class="bg-body-light">
<div class="content content-full">
    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-sm-fill h3 my-2">
            Form Pembimbing
        </h1>
        <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-alt">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item" aria-current="page">
                    <a class="link-fx" href="">Form Pembimbing</a>
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
        <h3 class="block-title">Pemilihan Pembimbing</h3>
    </div>
    <div class="block-content block-content-full">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-md-3 col-lg-6">
                <!-- Form Labels on top - Default Style -->
                <form class="mb-5" action="{{url('/kp/pembimbing/update')}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                      <label for="pem_kp">Pembimbing Kerja Praktek</label>
                      <select class="form-control selectpicker" name="pem_kp" id="pem_kp" onchange="autofill()" data-live-search="true">
                      <option value="">Pilih Pembimbing</option>
                      <?php foreach ($pem as $pems): ?>
                        <option name="ruang" value="{{ $pems->kode_dosen }}">{{$pems->nama_dosen}}</option>
                      <?php endforeach; ?>
                      </select>
                    </div>
                    <?php foreach ($data as $datas): ?>
                <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$datas->nama_mhs}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="Nim">NIM</label>
                        <input type="text" class="form-control" name="nim" value="{{$datas->nim}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="Nim">Angkatan</label>
                        <input type="text" class="form-control" name="angkatan" value="{{$datas->angkatan}}" readonly="readonly">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                    <div class="form-group">
                        <label for="sks">Jumlah SKS Lulus</label>
                        <input type="text" class="form-control" name="sks" value="{{$datas->sks}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="IPK">IPK</label>
                        <input type="text" class="form-control" name="ipk" value="{{$datas->ipk}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="nama perusahaan">Pembimbing Akademik</label>
                        <input type="text" class="form-control" name="pem_akademik" value="{{$datas->pem_akademik}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="nama perusahaan">Status Mahasiswa</label>
                        <input type="text" class="form-control" name="status_mhs" value="{{$datas->status_mhs}}" readonly="readonly">
                    </div>
                    <?php endforeach; ?>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <!-- END Form Labels on top - Default Style -->
            </div>
        </div>
    </div>
</div>
<!-- END Labels on top -->
@endsection