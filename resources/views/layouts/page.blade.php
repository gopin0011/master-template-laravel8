<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{asset('dist/css/tabler.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-flags.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-payments.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/tabler-vendors.min.css?1684106062')}}" rel="stylesheet"/>
    <link href="{{asset('dist/css/demo.min.css?1684106062')}}" rel="stylesheet"/>
    @yield('style')
  </head>
  <body>    
    <script src="{{asset('dist/js/demo-theme.min.js?1684106062')}}"></script>
    <div class="page-wrapper">
        @yield('header')
        
        @yield('content')
    </div>
    <!-- Libs JS -->
    <script src="{{asset('dist/libs/apexcharts/dist/apexcharts.min.js?1684106062')}}" defer></script>
    <script src="{{asset('dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062')}}" defer></script>
    <script src="{{asset('dist/libs/jsvectormap/dist/maps/world.js?1684106062')}}" defer></script>
    <script src="{{asset('dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062')}}" defer></script>
    <!-- Tabler Core -->
    <script src="{{asset('dist/js/tabler.min.js?1684106062')}}" defer></script>
    <script src="{{asset('dist/js/demo.min.js?1684106062')}}" defer></script>
    @yield('js')
   
</body>
</html>