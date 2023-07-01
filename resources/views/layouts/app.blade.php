<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-topbar-color="dark">

<head>
    <meta charset="utf-8" />
    <title>SILAPAK || @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/images/PUTIH-SILAPAK.png">

    <!-- Theme Config Js -->
    <script src="{{ asset('/') }}assets/js/head.js"></script>

    <!-- Bootstrap css -->
    <link href="{{ asset('/') }}assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- App css -->
    <link href="{{ asset('/') }}assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="{{ asset('/') }}assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    @stack('styles')
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">


        <!-- ========== Menu ========== -->
        @include('layouts.partials._sidebar')
        <!-- ========== Left menu End ========== -->





        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- ========== Topbar Start ========== -->
            @include('layouts.partials._topbar')
            <!-- ========== Topbar End ========== -->

            <div class="content">

                <!-- Start Content-->
                @yield('content')
                <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © PAK
                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end footer-links">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ asset('/') }}assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="{{ asset('/') }}assets/js/app.min.js"></script>

    @stack('scripts')
</body>

</html>