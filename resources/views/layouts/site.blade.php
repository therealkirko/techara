<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Saas Startup App HTML Template">
        <meta name="author" content="DynamicLayers">

        <title>Techara | Saas Startup App HTML Template</title>

        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

        <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/elegant-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/truno-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/pricing-table.css') }}">
        <link rel="stylesheet" href="{{ asset('css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/venobox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    </head>

    <body data-spy="scroll" data-target="#mainmenu" data-offset="70">
        <div class="site-preloader-wrap">
            <div class="spinner"></div>
        </div>
        @include('components.header')
        @yield('content')
        @include('components.footer')
        <!-- jQuery Lib -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/vendor/tether.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/vendor/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/vendor/pricing-switcher.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.waypoints.v2.0.3.min.js') }}"></script>
        <script src="{{ asset('js/vendor/odometer.min.js') }}"></script>
        <script src="{{ asset('js/vendor/wow.min.js') }}"></script>
        <script src="{{ asset('js/vendor/venobox.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
