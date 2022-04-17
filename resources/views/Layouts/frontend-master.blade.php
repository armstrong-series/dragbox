<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dragbox | Consortium</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/media/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/green-audio-player.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/odometer-theme-default.css') }}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.css') }}">

</head>
@yield('title')

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <!-- <div id="preloader"></div> -->
    <!-- Preloader End Here -->

    <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div>

    <div id="main-wrapper" class="main-wrapper">
        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
       @include('Frontend.includes.header')
        <!--=====================================-->
        <!--=        Banner Area Start         =-->
        <!--=====================================-->
        @yield('content')
       
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
      @include('Frontend.includes.footer')
    </div>

    <!-- Jquery Js -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/sal.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.style.switcher.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/tilt.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/green-audio-player.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.nav.js') }}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>