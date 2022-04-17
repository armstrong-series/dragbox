<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Dragbox Horizontal Saas solution">
    <meta name="author" content="Armstrong">
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}">
    <title>Dragbox </title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    
</head>

@yield('title')
@yield('styles')
<style>
    [v-cloak]{
        display: none;
    }
</style>

<body>
   
    <div class="page-wrapper">
    
           @include('Includes.sidebar')
        
        @yield('content')
    </div>
    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" 
  crossorigin="anonymous"></script>

    <script src="{{ asset('library/axios.js') }}"></script>
    <script src="{{ asset('library/vue.js') }}"></script>
    <script src="https://unpkg.com/vue-toastr/dist/vue-toastr.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <script src="{{ asset('assets/js/moment.js') }}"></script>
    <script src="{{ asset('assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home3/notificationsGraph.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home3/signupsGraph.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home3/qtrTargetGraph.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home3/ordersGraph.js') }}"></script>
    <script src="{{ asset('assets/vendor/apex/custom/home3/revenueGraph.js') }}"></script>
    <script src="{{ asset('assets/vendor/circliful/circliful.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/circliful/circliful.custom.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('script')
</body>

</html>