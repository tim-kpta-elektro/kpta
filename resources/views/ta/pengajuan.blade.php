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
                            <h3 class="block-title">Pengajuan Tugas Akhir</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-md-3 col-lg-6">
                                    <!-- Form Labels on top - Default Style -->
                                    <form class="mb-5" action="" method="POST" onsubmit="return false;">
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
                                            <label for="sks">Bidang Keahlian</label>
                                            <select class="form-control" name="keahlian" id="">
                                                <option value="SEL">Sistem Energi Listrik</option>
                                                <option value="MEKA">Mekatronika</option>
                                                <option value="SIE">Sistem Isyarat dan Elektronik</option>
                                                <option value="SKI">Sistem Komputer Informatika</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="IPK">Jumlah SKS</label>
                                            <input type="text" class="form-control" name="sks" placeholder="Masukkan Jumlah SKS Anda..">
                                        </div>
                                        <div class="form-group">
                                            <label for="IPK">IPK Sementara</label>
                                            <input type="text" class="form-control" name="ipk" placeholder="Masukkan IPK Sementara Anda..">
                                        </div>
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
                                            <label for="nama perusahaan">Mata Kuliah Pilihan Pendukung</label>
                                            <input type="text" class="form-control" name="ipk" placeholder="Pendukung 1"><br>
                                            <input type="text" class="form-control" name="ipk" placeholder="Pendukung 2"><br>
                                            <input type="text" class="form-control" name="ipk" placeholder="Pendukung 3">
                                        </div>
                                        <div class="form-group">
                                            <label for="sks">Pembimbing 1 Tugas Akhir</label>
                                            <select class="form-control" name="keahlian" id="">
                                                <option value="SEL">Dosen A</option>
                                                <option value="MEKA">Dosen B</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sks">Pembimbing 2 Tugas Akhir</label>
                                            <select class="form-control" name="keahlian" id="">
                                                <option value="SEL">Dosen A</option>
                                                <option value="MEKA">Dosen B</option>
                                            </select>
                                        </div>
                                    <h2 class="content-heading border-bottom mb-4 pb-2">Tanggal Pengajuan</h2>
                                        <div class="form-group">
                                        	<label for="Tanggal Mulai">Tanggal Pengajuan TA</label>
                                            <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="tgl_mulai" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
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
