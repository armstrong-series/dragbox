

<!doctype html>
<html lang="en" dir="ltr">
  
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- <title>Dragbox | Adminstrative Dashboard</title> -->
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('dragbox.png')}}" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ asset('main/css/libs.min.css') }}" />
      
      <!-- Gigz Design System Css -->
      <link rel="stylesheet" href="{{ asset('main/css/giz.min.css') }}" />
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{ asset('main/css/custom.min.css') }}" />
      
      <!-- fontawsome Css Build -->
      <link rel="stylesheet" href="{{ asset('main/css/fontawesome-free/all.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>  </head>
      @yield('title')
      @yield('styles')
        <style>
            [v-cloak]{
                display: none;
            }
        </style>
  <body class="">
    
  @include('Includes.aside') 
    @yield('content')
    

    <script defer src="https://pro.fontawesome.com/releases/v5.10.0/js/all.js" integrity="sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD" 
       crossorigin="anonymous"></script>

    <script src="{{ asset('library/axios.js') }}"></script>
    <script src="{{ asset('library/vue.js') }}"></script>
    <script src="https://unpkg.com/vue-toastr/dist/vue-toastr.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 
    <!-- Library Bundle Script -->
    <script src="{{ asset('main/js/core/lib.min.js') }}"></script>
    
    <!-- External Library Bundle Script -->
    <script src="{{ asset('main/js/core/external.min.js') }}"></script>
    
    <!-- Widgetchart Script -->
    <script src="{{ asset('main/js/charts/widgetcharts.js') }}"></script>
    
    <!-- mapchart Script -->
    <script src="{{ asset('main/js/charts/vectore-chart.js') }}"></script>
    <script src="{{ asset('main/js/charts/dashboard.js') }}" defer></script>
    
    <!-- fslightbox Script -->
    <script src="{{ asset('main/js/charts/fslightbox.js') }}"></script>
    
    <!-- GSAP Animation -->
    <script src="{{ asset('main/js/gsap/gsap.min.js') }}"></script>
    <script src="{{ asset('main/js/gsap/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('main/js/gsap/gsap-init.js') }}"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{ asset('main/js/plugins/form-wizard.js') }}"></script>
    
    <!-- App Script -->
    <script src="{{ asset('main/js/gigz.js') }}" defer></script>
    
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>  
    @yield('script')
</body>

</html>