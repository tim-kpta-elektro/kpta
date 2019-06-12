<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Portal Teknik Elektro UNS</title>

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/kpta/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/kpta/assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/kpta/assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="/kpta/assets/js/plugins/datatables/dataTables.bootstrap4.css">
        <link rel="stylesheet" href="/kpta/assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="/kpta/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">

        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="/kpta/assets/css/oneui.min.css">
    </head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
            <!-- Sidebar -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="dashboard">
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">P</span>
                        </span>
                        <i class="fa fa-circle-notch text-primary"></i>
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">rtal</span> <span class="font-w400">Elektro</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Color Variations -->
                        <div class="dropdown d-inline-block ml-3">
                            <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="si si-drop"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                <!-- Color Themes -->
                                <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="default" href="#">
                                    <span>Default</span>
                                    <i class="fa fa-circle text-default"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="/kpta/assets/css/themes/amethyst.min.css" href="#">
                                    <span>Amethyst</span>
                                    <i class="fa fa-circle text-amethyst"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="/kpta/assets/css/themes/city.min.css" href="#">
                                    <span>City</span>
                                    <i class="fa fa-circle text-city"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="/kpta/assets/css/themes/flat.min.css" href="#">
                                    <span>Flat</span>
                                    <i class="fa fa-circle text-flat"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="/kpta/assets/css/themes/modern.min.css" href="#">
                                    <span>Modern</span>
                                    <i class="fa fa-circle text-modern"></i>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme" data-theme="/kpta/assets/css/themes/smooth.min.css" href="#">
                                    <span>Smooth</span>
                                    <i class="fa fa-circle text-smooth"></i>
                                </a>
                                <!-- END Color Themes -->

                                <div class="dropdown-divider"></div>

                                <!-- Sidebar Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                    <span>Sidebar Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                    <span>Sidebar Dark</span>
                                </a>
                                <!-- Sidebar Styles -->

                                <div class="dropdown-divider"></div>

                                <!-- Header Styles -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                                    <span>Header Light</span>
                                </a>
                                <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                                    <span>Header Dark</span>
                                </a>
                                <!-- Header Styles -->
                            </div>
                        </div>
                        <!-- END Themes -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="{{url('/')}}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">Panduan</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-doc"></i>
                                <span class="nav-main-link-name">Panduan KP</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link"aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-docs"></i>
                                <span class="nav-main-link-name">Panduan TA</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{url('login')}}">
                                <i class="nav-main-link-icon si si-arrow-right"></i>
                                <span class="nav-main-link-name">Login</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        <!-- END Toggle Mini Sidebar -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <a href="{{url('login')}}" class="btn btn-sm btn-dual">Login</a>
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-white">
                    <div class="content-header">
                        <form class="w-100" action="be_pages_generic_search.html" method="POST">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-image overflow-hidden" style="background-image: url('/kpta/assets/media/photos/uns2.png');">
                     <div class="">
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
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Pengunjung</div>
                                    <div class="font-size-h2 font-w400 text-dark">120</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Total Mahasiswa</div>
                                    <div class="font-size-h2 font-w400 text-dark">350</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Mahasiswa Aktif</div>
                                    <div class="font-size-h2 font-w400 text-dark">200</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 col-lg-6 col-xl-3">
                            <a class="block block-rounded block-link-pop border-left border-primary border-4x" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Alumni</div>
                                    <div class="font-size-h2 font-w400 text-dark">50</div>
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
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="#" target="_blank">SKI Elektro</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="https://1.envato.market/xWy" target="_blank">OneUI 4.2</a> &copy; <span data-toggle="year-copy"></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

            <!-- Apps Modal -->
            <!-- Opens from the modal toggle button in the header -->
            <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
                <div class="modal-dialog modal-dialog-top modal-sm" role="document">
                    <div class="modal-content">
                        <div class="block block-themed block-transparent mb-0">
                            <div class="block-header bg-primary-dark">
                                <h3 class="block-title">Apps</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                        <i class="si si-close"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="row gutters-tiny">
                                    <div class="col-6">
                                        <!-- CRM -->
                                        <a class="block block-rounded block-themed bg-default" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-speedometer fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    CRM
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END CRM -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Products -->
                                        <a class="block block-rounded block-themed bg-danger" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-rocket fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    Products
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Products -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Sales -->
                                        <a class="block block-rounded block-themed bg-success mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-plane fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    Sales
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Sales -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Payments -->
                                        <a class="block block-rounded block-themed bg-warning mb-0" href="javascript:void(0)">
                                            <div class="block-content text-center">
                                                <i class="si si-wallet fa-2x text-white-75"></i>
                                                <p class="font-w600 font-size-sm text-white mt-2 mb-3">
                                                    Payments
                                                </p>
                                            </div>
                                        </a>
                                        <!-- END Payments -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Apps Modal -->
        </div>
        <!-- END Page Container -->

        <script src="/kpta/assets/js/oneui.core.min.js"></script>
        <script src="/kpta/assets/js/oneui.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="/kpta/assets/js/plugins/chart.js/Chart.bundle.min.js"></script>
        <script src="/kpta/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="/kpta/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/kpta/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="/kpta/assets/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="/kpta/assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
        <script src="/kpta/assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
        <script src="/kpta/assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
        <script src="/kpta/assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>

        <!-- Page JS Code -->
        <script src="/kpta/assets/js/pages/be_pages_dashboard.min.js"></script>
        <script src="/kpta/assets/js/pages/be_tables_datatables.min.js"></script>

        <!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
        <script>jQuery(function(){ One.helpers(['datepicker']); });</script>
    </body>
</html>