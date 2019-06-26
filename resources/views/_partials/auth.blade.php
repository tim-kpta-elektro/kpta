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
        <div id="page-container" class="page-header-fixed">

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <!-- Logo -->
                        <a class="font-w600 text-dual" href="{{url('/')}}">
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">P</span>
                        </span>
                        <i class="fa fa-circle-notch text-primary"></i>
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">rtal</span> <span class="font-w400">Elektro</span>
                        </span>
                        </a>
                        <!-- END Logo -->

                    </div>
                    <!-- END Left Section -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                @yield('konten')
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

            
        </div>
        <!-- END Page Container -->

        <script src="/kpta/assets/js/oneui.core.min.js"></script>
        <script src="/kpta/assets/js/oneui.app.min.js"></script>
    </body>
</html>
