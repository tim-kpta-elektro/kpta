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
<div class="block">
    <div class="block-header">
        <h1 class="block-title" style="text-align: center; color: red;">Ditolak! Update Data Kerja Praktek!</h1>
    </div>
    <div class="block-content block-content-full">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-md-3 col-lg-6">
                <!-- Form Labels on top - Default Style -->
                <form class="mb-5" action="{{url('/kp/seminarkp/update')}}" method="POST">
                {{ csrf_field() }}
                <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$test2->nama_mhs}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="Nim">NIM</label>
                        <input type="text" class="form-control" name="nim"
                        value="{{$test2->nim_mhs}}" readonly="readonly">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                    <div class="form-group">
                        <label for="sks">Jumlah SKS Lulus</label>
                        <input type="number" class="form-control" name="sks" value="{{$test2->sks}}">
                    </div>
                    <div class="form-group">
                        <label for="IPK">IPK</label>
                        <input type="text" class="form-control" name="ipk" value="{{$test2->ipk}}">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Data Perusahaan</h2>
                    <div class="form-group">
                        <label for="nama perusahaan">Nama Perusahaan</label>
                        <input type="text" class="form-control" name="perusahaan_nama" value="{{$test2->perusahaan_nama}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat perusahaan">Alamat Perusahaan</label>
                        <input type="text" class="form-control" name="perusahaan_almt" value="{{$test2->perusahaan_almt}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis usaha perusahaan">Jenis Usaha Perusahaan</label>
                        <input type="text" class="form-control" name="perusahaan_jenis" value="{{$test2->perusahaan_jenis}}">
                    </div>
                    <div class="form-group">
                        <label for="PIC">PIC</label>
                        <input type="text" class="form-control" name="pic" value="{{$test2->pic}}">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Tanggal Pelaksanaan</h2>
                    <div class="form-group">
                    	<label for="Tanggal Mulai">Tanggal Dimulai KP</label>
                        <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_mulai_kp" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" value="{{$test2->tgl_mulai_kp}}">
                    </div>
                    <div class="form-group">
                    	<label for="Tanggal Mulai">Tanggal Selesai KP</label>
                        <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_selesai_kp" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" value="{{$test2->tgl_selesai_kp}}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                <!-- END Form Labels on top - Default Style -->
            </div>
        </div>
    </div>
</div>
<!-- END Labels on top -->
</div>
@endsection