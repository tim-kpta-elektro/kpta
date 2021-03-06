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
        <h3 class="block-title">Pengajuan Kerja Praktek</h3>
    </div>
    <div class="block-content block-content-full">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-md-3 col-lg-6">
                <!-- Form Labels on top - Default Style -->
                @foreach($data as $datas)
                <form class="mb-5" action="{{url('/kp/seminar/update')}}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id_kp" value="{{$datas->id_kp}}">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$datas->nama_mhs}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="Nim">NIM</label>
                        <input type="text" class="form-control" name="nim" value="{{$datas->nim}}" readonly="readonly">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                    <div class="form-group">
                        <label for="sks">Jumlah SKS Lulus</label>
                        <input type="number" class="form-control" name="sks" value="{{$datas->sks}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="IPK">IPK</label>
                        <input type="text" class="form-control" name="ipk" value="{{$datas->ipk}}" readonly="readonly">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Judul Laporan KP</h2>
                    <div class="form-group">
                        <label for="nama perusahaan">Judul Laporan KP</label>
                        <input type="text" class="form-control" name="judul_laporan" value="{{$datas->judul_seminar}}" readonly="readonly">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Tanggal Pelaksanaan</h2>
                    <div class="form-group">
                        <label for="Tanggal Mulai">Tanggal Seminar KP</label>
                        <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_seminar" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{$datas->tanggal}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="Tanggal Mulai">Jam Mulai</label>
                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker5" name="jam_mulai" value="{{$datas->jam_mulai}}" readonly="readonly" />
                    </div>
                    <div class="form-group">
                        <label for="Tanggal Mulai">Jam Selesai</label>
                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="jam_selesai" value="{{$datas->jam_selesai}}" readonly="readonly" />
                    </div>
                    <div class="form-group">
                      <label for="acceptor">Ruang:</label>
                      <input type="text" class="form-control" name="judul_laporan" value="{{$datas->nama_ruang}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <button type="submit" name="action" value="setuju" class="btn btn-primary">Setuju</button>
                      <button type="submit" name="action" value="tolak" class="btn btn-danger">Tolak</button>
                    </div>
                </form>
                @endforeach
                <!-- END Form Labels on top - Default Style -->
            </div>
        </div>
    </div>
</div>
<!-- END Labels on top -->
</div>
@endsection