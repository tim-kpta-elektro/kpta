@extends('_partials/master')
@section('konten')
                <!-- Hero -->
                <div class="bg-image overflow-hidden" style="background-image: url('/kpta/assets/media/photos/photo3@2x.jpg');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-narrow content-full">
                            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center mt-5 mb-2 text-center text-sm-left">
                                <div class="flex-sm-fill">
                                    <h1 class="font-w600 text-white mb-0 invisible" data-toggle="appear">Portal Elektro</h1>
                                    <h2 class="h3 font-w400 text-white-75 mb-0 invisible" data-toggle="appear" data-timeout="250">Prodi Teknik Elektro <b>TEKNIK</b> <b>UNS</b></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content content-narrow">
                    <!-- Stats -->
                    <div class="row">
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Visitors</div>
                                    <div class="font-size-h2 font-w400 text-dark">120,580</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                    <div class="font-size-h2 font-w400 text-dark">150</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                    <div class="font-size-h2 font-w400 text-dark">$3,200</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Avg Sale</div>
                                    <div class="font-size-h2 font-w400 text-dark">$21</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Stats -->

                    <!-- Dynamic Table with Export Buttons -->
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">List <small>Kerja Praktek</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center" style="width: 20px">No</th>
                                        <th class="text-center" style="width: 80px;">NIM</th>
                                        <th class="d-none d-sm-table-cell text-center">Name</th>
                                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Tempat</th>
                                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $no=1; ?>
				                    <?php foreach ($listkp as $row): ?>
				                      <tr>
				                      	<td class="text-center font-size-sm text-center">{{$no++}}</td>
                                        <td class="text-center font-size-sm text-center">{{$row->nim}}</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">{{$row->mhs_nama}}</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            {{$row->perusahaan_nama}}
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            {{$row->perusahaan_almt}}
                                        </td>
				                      </tr>
				                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table with Export Buttons -->

                    <!-- Dynamic Table with Export Buttons -->
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Seminar <small>Kerja Praktek</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center" style="width: 80px;">NIM</th>
                                        <th class="d-none d-sm-table-cell text-center">Name</th>
                                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Judul Seminar</th>
                                        <th class="d-none d-sm-table-cell text-center" style="width: 20%;">Pembimbing</th>
                                        <th class="d-none d-sm-table-cell text-center">Tanggal Seminar</th>
                                        <th class="d-none d-sm-table-cell text-center">Jam Mulai</th>
                                        <th class="d-none d-sm-table-cell text-center">Jam Selesai</th>
                                        <th class="d-none d-sm-table-cell text-center">Tempat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php $no=1; ?>
				                    <?php foreach ($semkp as $row): ?>
				                      <tr>
                                        <td class="text-center font-size-sm text-center">{{$no++}}</td>
                                        <td class="text-center font-size-sm text-center">{{$row->nim}}</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">{{$row->mhs_nama}}</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            {{$row->judul_sem}}
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            {{$row->pembimbing}}
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            {{$row->tgl_sem}}
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            {{$row->jam_mulai}}
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            {{$row->jam_selesai}}
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            {{$row->tempat}}
                                        </td>
				                      </tr>
				                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table with Export Buttons -->

                    <!-- Dynamic Table with Export Buttons -->
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Seminar Proposal<small>Tugas Akhir</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center" style="width: 80px;">NIM</th>
                                        <th class="d-none d-sm-table-cell text-center">Name</th>
                                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Judul Tugas Akhir</th>
                                        <th class="d-none d-sm-table-cell text-center" style="width: 20%;">Pembimbing</th>
                                        <th class="d-none d-sm-table-cell text-center">Jam Mulai</th>
                                        <th class="d-none d-sm-table-cell text-center">Jam Selesai</th>
                                        <th class="d-none d-sm-table-cell text-center">Tempat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center font-size-sm text-center">1</td>
                                        <td class="text-center font-size-sm text-center">I0715035</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">Wahyu Kurniawan</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Website Untuk Pengembangan
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            1. Sutrisno
                                            <br>
                                            2. Meiyanto
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            11.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            12.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Ruang Kelas 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-size-sm text-center">1</td>
                                        <td class="text-center font-size-sm text-center">I0715035</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">Wahyu Kurniawan</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Website Untuk Pengembangan
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            1. Sutrisno
                                            <br>
                                            2. Meiyanto
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            11.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            12.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Ruang Kelas 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-size-sm text-center">1</td>
                                        <td class="text-center font-size-sm text-center">I0715035</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">Wahyu Kurniawan</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Website Untuk Pengembangan
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            1. Sutrisno
                                            <br>
                                            2. Meiyanto
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            12.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            13.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Ruang Kelas 3
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table with Export Buttons -->

                    <!-- Dynamic Table with Export Buttons -->
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Seminar Hasil <small>Tugas Akhir</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center" style="width: 80px;">NIM</th>
                                        <th class="d-none d-sm-table-cell text-center">Name</th>
                                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Judul Tugas Akhir</th>
                                        <th class="d-none d-sm-table-cell text-center" style="width: 20%;">Pembimbing</th>
                                        <th class="d-none d-sm-table-cell text-center">Jam Mulai</th>
                                        <th class="d-none d-sm-table-cell text-center">Jam Selesai</th>
                                        <th class="d-none d-sm-table-cell text-center">Tempat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center font-size-sm text-center">1</td>
                                        <td class="text-center font-size-sm text-center">I0715035</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">Wahyu Kurniawan</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Website Untuk Pengembangan
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            1. Sutrisno
                                            <br>
                                            2. Meiyanto
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            11.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            12.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Ruang Kelas 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-size-sm text-center">1</td>
                                        <td class="text-center font-size-sm text-center">I0715035</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">Wahyu Kurniawan</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Website Untuk Pengembangan
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            1. Sutrisno
                                            <br>
                                            2. Meiyanto
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            11.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            12.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Ruang Kelas 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-size-sm text-center">1</td>
                                        <td class="text-center font-size-sm text-center">I0715035</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">Wahyu Kurniawan</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Website Untuk Pengembangan
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            1. Sutrisno
                                            <br>
                                            2. Meiyanto
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            12.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            13.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Ruang Kelas 3
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table with Export Buttons -->

                    <!-- Dynamic Table with Export Buttons -->
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Sidang <small>Tugas Akhir</small></h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                            <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center" style="width: 80px;">NIM</th>
                                        <th class="d-none d-sm-table-cell text-center">Name</th>
                                        <th class="d-none d-sm-table-cell text-center" style="width: 30%;">Judul Tugas Akhir</th>
                                        <th class="d-none d-sm-table-cell text-center" style="width: 20%;">Pembimbing</th>
                                        <th class="d-none d-sm-table-cell text-center">Jam Mulai</th>
                                        <th class="d-none d-sm-table-cell text-center">Jam Selesai</th>
                                        <th class="d-none d-sm-table-cell text-center">Tempat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center font-size-sm text-center">1</td>
                                        <td class="text-center font-size-sm text-center">I0715035</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">Wahyu Kurniawan</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Website Untuk Pengembangan
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            1. Sutrisno
                                            <br>
                                            2. Meiyanto
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            11.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            12.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Ruang Kelas 1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-size-sm text-center">1</td>
                                        <td class="text-center font-size-sm text-center">I0715035</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">Wahyu Kurniawan</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Website Untuk Pengembangan
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            1. Sutrisno
                                            <br>
                                            2. Meiyanto
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            11.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            12.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Ruang Kelas 2
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center font-size-sm text-center">1</td>
                                        <td class="text-center font-size-sm text-center">I0715035</td>
                                        <td class="font-w600 font-size-sm text-center">
                                            <a href="#">Wahyu Kurniawan</a>
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Website Untuk Pengembangan
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            1. Sutrisno
                                            <br>
                                            2. Meiyanto
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            12.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            13.00
                                        </td>
                                        <td class="d-none d-sm-table-cell font-size-sm text-center">
                                            Ruang Kelas 3
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table with Export Buttons -->



                </div>
                <!-- END Page Content -->

@endsection
