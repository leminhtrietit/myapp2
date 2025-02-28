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

    </head>
    <body>

    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        
        <x`!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('modules.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                


                <div class="content">
                <section class="hero-wrap hero-wrap-2"  data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                </section>
                <section class="ftco-section ftco-no-pt">
                    <div class="container">
                        <div class="card mt-3">
                            <table class="table table-striped table-hover" id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th>App Name test</th>
                                        <th>Version</th>
                                        <th>Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($resources as $resource)
                                        <tr>
                                                <td>{{ $resource->appname }}</td>
                                                <td>{{ $resource->version }}</td>
                                                <td>
                                                    <a href="{{ $resource->link_truycap }}" target="_blank">
                                                        {{ $resource->ten_hanhdong }}
                                                    </a>
                                                </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">Không có resource nào.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                </div>


                
                
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('modules.footer')

        </div>

    </div>

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
