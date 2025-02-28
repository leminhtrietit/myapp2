<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MinhTrietEras</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="Assets/images/logo.png" type="image/x-icon" />

        <link rel="stylesheet" href="Assets/css/animate.css">

        <link rel="stylesheet" href="Assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="Assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="Assets/css/magnific-popup.css">

        <link rel="stylesheet" href="Assets/css/flaticon.css">
        <link rel="stylesheet" href="Assets/css/style_detail.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

        <!-- Styles / Scripts -->
        <!-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
            
            </style>
        @endif -->
    </head>
    <body>

<!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        
        <x`!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('modules.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="hero-wrap js-fullheight" style="background-image: url('Assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                            <div class="col-md-8 ftco-animate mt-5 pt-md-5" data-scrollax=" properties: { translateY: '70%' }">
                                <div class="row">
                                    <div class="col-md-7">
                                        <p class="mb-4 pl-md-5 line" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">tell what you do</p>
                                    </div>
                                </div>
                                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Trải nghiệm từ cuộc sống <br>Mọi thứ về công nghệ</h1>
                                <!-- <p><a href="#" class="btn btn-primary px-4 py-3">Read more</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('modules.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>







    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="Assets/js/jquery.min.js"></script>
    <script src="Assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="Assets/js/popper.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/js/jquery.easing.1.3.js"></script>
    <script src="Assets/js/jquery.waypoints.min.js"></script>
    <script src="Assets/js/jquery.stellar.min.js"></script>
    <script src="Assets/js/owl.carousel.min.js"></script>
    <script src="Assets/js/jquery.magnific-popup.min.js"></script>
    <script src="Assets/js/jquery.animateNumber.min.js"></script>
    <script src="Assets/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="Assets/js/google-map.js"></script>
    <script src="Assets/js/main.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.16.0/cdn/themes/light.css" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.16.0/cdn/shoelace-autoloader.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
        let table = new DataTable('#myTable');

    </script>

    </body>
</html>
