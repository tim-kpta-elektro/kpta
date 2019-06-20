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
                    <a href="x" class="btn btn-primary" target="_blank">Cetak Form Pengajuan Seminar KP</a>
                    <a href="x" class="btn btn-primary" target="_blank">Cetak Undangan Seminar KP</a>
                    <a href="/kpta/public/seminarkp/cetak_daftarhadir" class="btn btn-primary" target="_blank">Cetak Daftar Hadir Seminar KP</a>
                    <br><br>
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Pengajuan Seminar Kerja Praktek</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-md-3 col-lg-6">
                                    <!-- Form Labels on top - Default Style -->
                                    <form class="mb-5" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                                    <h2 class="content-heading border-bottom mb-4 pb-2">Data Diri</h2>
                                        <div class="form-group">
                                            <label for="Nama">Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda..">
                                        </div>
                                        <div class="form-group">
                                            <label for="Nim">NIM</label>
                                            <input type="text" class="form-control"name="nim" placeholder="Masukkan NIM Anda..">
                                        </div>
                                    <h2 class="content-heading border-bottom mb-4 pb-2">Data Akademik</h2>
                                        <div class="form-group">
                                            <label for="sks">Jumlah SKS Lulus</label>
                                            <input type="number" class="form-control" name="jml_sks" placeholder="Masukkan Jumlah SKS Anda..">
                                        </div>
                                        <div class="form-group">
                                            <label for="IPK">IPK</label>
                                            <input type="text" class="form-control" name="ipk" placeholder="Masukkan IPK Anda..">
                                        </div>
                                    <h2 class="content-heading border-bottom mb-4 pb-2">Data Perusahaan</h2>
                                        <div class="form-group">
                                            <label for="nama perusahaan">Nama Perusahaan</label>
                                            <input type="text" class="form-control" name="nama_per" placeholder="Masukkan Nama Perusahaan..">
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat perusahaan">Alamat Perusahaan</label>
                                            <input type="text" class="form-control" name="alamat_per" placeholder="Masukkan Alamat Perusahaan..">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis usaha perusahaan">Jenis Usaha Perusahaan</label>
                                            <input type="text" class="form-control" name="jenis_usaha_per" placeholder="Masukkan Jenis Usaha Perusahaan..">
                                        </div>
                                        <div class="form-group">
                                            <label for="PIC">PIC</label>
                                            <input type="text" class="form-control" name="pic" placeholder="Masukkan PIC Perusahaan..">
                                        </div>
                                    <h2 class="content-heading border-bottom mb-4 pb-2">Tanggal Pelaksanaan</h2>
                                        <div class="form-group">
                                        	<label for="Tanggal Mulai">Tanggal Dimulai KP</label>
                                            <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_mulai" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                        </div>
                                        <div class="form-group">
                                        	<label for="Tanggal Mulai">Tanggal Selesai KP</label>
                                            <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_selesai" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                        </div>
                                        <h2 class="content-heading border-bottom mb-4 pb-2">Judul Laporan KP</h2>
                                        <div class="form-group">
                                            <label for="nama perusahaan">Judul Laporan KP</label>
                                            <input type="text" class="form-control" name="nama_judul_lap" placeholder="Masukkan Judul Lapoaran KP..">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="submit" class="btn btn-danger">Cancel</button>
                                        </div>
                                    </form>

                                    <!-- END Form Labels on top - Default Style -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Labels on top -->

@endsection