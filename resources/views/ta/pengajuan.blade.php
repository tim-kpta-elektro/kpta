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
    <!-- Form Labels on top - Default Style -->
    <form class="mb-5" action="{{url('/ta/pengajuan/store')}}" method="POST">
    {{ csrf_field() }}
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Pengajuan Tugas Akhir</h3>
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
                            <input type="number" step="1" min="0" class="form-control" name="sks">
                        </div>
                        <div class="form-group">
                            <label for="IPK">IPK Sementara</label>
                            <input type="number" step="0.01" min="0" max="4" class="form-control" name="ipk">
                        </div>
                        <div class="form-group">
                            <label for="sks">Bidang Keahlian</label>
                            <select class="form-control" name="kode_peminatan">
                                <option value="" selected="selected" disabled>--- Pilih ---</option>
                                @foreach ($peminatans as $peminatan)
                                <option value="{{$peminatan->kode}}">{{$peminatan->kode}} - {{$peminatan->nama_peminatan}}</option>
                                @endforeach
                            </select>
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
                    <textarea type="text" class="form-control" name="judul" placeholder="Masukkan Judul Anda.."></textarea>
                </div>
                <div class="form-group">
                    <label for="alamat perusahaan">Abstrak</label>
                    <textarea type="text" class="form-control" name="abstrak" placeholder="Masukkan Abstrak Anda.."></textarea>
                </div>
                <div class="form-group">
                    <label for="MK Pendukung">Mata Kuliah Pilihan Pendukung</label>
                    <div class="row">
                        @for ($i = 1; $i <= 3; $i++)
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="kode_mk{{$i}}" placeholder="Kode MK {{$i}}"><br>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="mk{{$i}}" placeholder="MK Pendukung {{$i}}"><br>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="nilai_mk{{$i}}" placeholder="Nilai MK {{$i}}"><br>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="huruf_mk{{$i}}" placeholder="Huruf Nilai {{$i}}"><br>
                        </div>
                            @endfor
                    </div>
                </div>
                <div class="form-group">
                    <label for="sks">Pembimbing 1 Tugas Akhir</label>
                    <select class="form-control" name="pembimbing1" id="">
                        <option value="" selected="selected" disabled>--- Pilih ---</option>
                        @foreach ($dosens as $dosen)
                        <option value="{{$dosen->kode_dosen}}">{{$dosen->nama_dosen}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="sks">Pembimbing 2 Tugas Akhir</label>
                    <select class="form-control" name="pembimbing2" id="">
                        <option value="" selected="selected" disabled>--- Pilih ---</option>
                        @foreach ($dosens as $dosen)
                        <option value="{{$dosen->kode_dosen}}">{{$dosen->nama_dosen}} </option>
                        @endforeach
                    </select>
                </div>
                <!-- <h2 class="content-heading border-bottom mb-4 pb-2">Tanggal Pengajuan</h2> -->
                <!-- <div class="form-group">
                    <label for="tgl_pengajuan">Tanggal Pengajuan TA</label>
                    <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_pengajuan" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                </div> -->
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
