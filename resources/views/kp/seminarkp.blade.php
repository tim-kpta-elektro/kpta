@extends('_partials/master')
@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
@endsection
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
        <h3 class="block-title">Pengajuan Seminar Kerja Praktek</h3>
    </div>
    <div class="block-content block-content-full">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-md-3 col-lg-6">
                <!-- Form Labels on top - Default Style -->
                <form class="mb-5" action="{{url('/kp/seminarkp/store')}}" method="POST">
                {{ csrf_field() }}
                <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id_kp" value="{{$data->id_kp}}">
                    </div>
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$data->nama_mhs}}" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <label for="Nim">NIM</label>
                        <input type="text" class="form-control"name="nim" value="{{$data->nim}}" readonly="readonly">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                    <div class="form-group">
                        <label for="sks">Jumlah SKS Lulus</label>
                        <input type="number" class="form-control" name="sks" value="{{$data->sks}}">
                    </div>
                    <div class="form-group">
                        <label for="IPK">IPK</label>
                        <input type="text" class="form-control" name="ipk" value="{{$data->ipk}}">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Judul Laporan KP</h2>
                    <div class="form-group">
                        <label for="nama perusahaan">Judul Laporan KP</label>
                        <input type="text" class="form-control" name="judul_laporan" placeholder="Masukkan Judul Lapoaran KP..">
                    </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Tanggal Pelaksanaan</h2>
                    <div class="form-group">
                        <label for="Tanggal Mulai">Tanggal Seminar KP</label>
                        <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_seminar" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                    </div>
                    <div class="form-group">
                        <label for="Tanggal Mulai">Jam Mulai</label>
                        <div class="input-group date" id="datetimepicker5" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker5" name="jam_mulai" />
                            <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-clock"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Tanggal Mulai">Jam Selesai</label>
                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" name="jam_selesai" />
                            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-clock"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="acceptor">Ruang:</label>
                      <select class="form-control selectpicker" name="ruang" id="ruang" onchange="autofill()" data-live-search="true">
                      <option value="">Pilih Ruang</option>
                      <?php foreach ($ruang as $ruangs): ?>
                        <option name="ruang" value="{{ $ruangs->id_ruang }}">{{$ruangs->nama_ruang}}</option>
                      <?php endforeach; ?>
                      </select>
                    </div>
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
@section('script')
<script type="text/javascript">
            $(function () {
                $('#datetimepicker5').datetimepicker({
                    format: 'HH:mm'
                });
                $('#datetimepicker4').datetimepicker({
                    format: 'HH:mm'
                });
            });
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
@endsection