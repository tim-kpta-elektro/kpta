@extends('_partials/master')
@section('konten')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                Form Pengajuan Pendadaran Tugas Akhir
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Form Pengajuan Pendadaran TA</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Form Labels on top - Default Style -->
    <form class="mb-5" action="{{url('/ta/pengajuan_pendadaran/store')}}" method="POST">
        {{ csrf_field() }}
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Pengajuan Pendadaran Tugas Akhir</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$data->nama_mhs}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="Nim">NIM</label>
                            <input type="text" class="form-control" name="nim" value="{{$data->nim}}" readonly>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                        <div class="form-group">
                            <label for="IPK">Jumlah SKS</label>
                            <input type="number" value="{{$data->sks}}" class="form-control" name="sks" disabled>
                        </div>
                        <div class="form-group">
                            <label for="IPK">IPK Sementara</label>
                            <input type="number" value="{{$data->ipk}}" class="form-control" name="ipk" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Labels on top -->
        <div class="block">
            <div class="block-content block-content-full">

                <h2 class="content-heading border-bottom mb-4 pb-2">Data Tugas Akhir</h2>
                <div class="form-group">
                    <label for="nama perusahaan">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{$ta->judul}}" disabled>
                </div>
                <div class="form-group">
                    <label for="alamat perusahaan">Abstrak</label>
                    <input type="text" class="form-control" name="abstrak" value="{{$ta->abstrak}}" disabled>
                </div>
                <div class="form-group">
                    <label for="sks">Pembimbing 1 Tugas Akhir</label>
                    <input type="text" value="{{$pembimbing1->nama_dosen}}" class="form-control" name="pembimbing1" disabled>
                </div>
                <div class="form-group">
                    <label for="sks">Pembimbing 2 Tugas Akhir</label>
                    <input type="text" value="{{$pembimbing2->nama_dosen}}" class="form-control" name="pembimbing2" disabled>
                </div>
                <h2 class="content-heading border-bottom mb-4 pb-2">Informasi Seminar Hasil</h2>
                <div class="form-group">
                    <label for="tgl_pengajuan">Tanggal Seminar</label>
                    <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tanggal" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                </div>
                <div class="form-group">
                    <label for="sks">Tempat Pelaksanaan</label>
                    <input type="text" class="form-control" name="tempat">
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
                <br>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
                <br>
                <br>
                <br>
                <br>

            </div>
    </form>
    <!-- END Form Labels on top - Default Style -->
</div>
<!-- END Labels on top -->

@endsection
@section('script')
<script type="text/javascript">
    $(function() {
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
