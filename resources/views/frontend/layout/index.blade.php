<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/favicon.ico">

        <!-- App title -->
        <title>Bahana Intranet</title>

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/plugins/morris/morris.css">

        <!-- Switchery css -->
        <link href="{{ asset('frontend') }}/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{ asset('frontend') }}/assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{ asset('frontend') }}/assets/js/modernizr.min.js"></script>

    </head>


    <body>

        @include('frontend.include.header')
        <!-- Start right Content here -->
        <div class="wrapper">

            @yield('contents')

            <!-- Footer -->
            <footer class="footer">
                2016 - 2018 © Uplon.
            </footer>
            <!-- End Footer -->

        </div> <!-- End wrapper -->

        <!-- jQuery  -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script><!-- Tether for Bootstrap -->
        <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/waves.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/jquery.nicescroll.js"></script>
        <script src="{{ asset('frontend') }}/assets/plugins/switchery/switchery.min.js"></script>

        <!--Morris Chart-->
        <script src="{{ asset('frontend') }}/assets/plugins/morris/morris.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/plugins/raphael/raphael-min.js"></script>

        <!-- Counter Up  -->
        <script src="{{ asset('frontend') }}/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.core.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/jquery.app.js"></script>

        <!-- Page specific js -->
        <script src="{{ asset('frontend') }}/assets/pages/jquery.dashboard.js"></script>


    </body>
</html>
