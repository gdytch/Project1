<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}}</title>

    <!-- Fonts -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"> {{-- --}}
    <link href="{{asset('css/ripples.min.css')}}" rel="stylesheet" type="text/css"> {{--
    <link href="css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="{{asset('css/fonts/css/font-awesome.min.css')}}" rel="stylesheet">

      <!-- NProgress -->
      <link href="{{asset('plugins/nprogress/nprogress.css')}}" rel="stylesheet">
      <!-- iCheck -->
      <link href="{{asset('plugins/iCheck/skins/flat/green.css')}}" rel="stylesheet">

      <!-- bootstrap-progressbar -->
      <link href="{{asset('plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
      <!-- JQVMap -->
      <!-- bootstrap-daterangepicker -->
      <link href="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <link href="{{asset('css/framework/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-material-design.css')}}" rel="stylesheet" type="text/css">






</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div style="margin-top:100px">
                @include('inc.navbar')
                @yield('content')
                @include('inc.footer')

            </div>
        </div>

    </div>

    <link href="{{asset('css/mycss.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>

    {{-- <script type="text/javascript" src="{{asset('js/app.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('js/custom-pre.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    {{-- <script type="text/javascript" src="{{asset('js/material.js')}}"></script> --}}
    <script type="text/javascript" src="{{asset('js/ripples.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap_confirmation.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

   <!-- FastClick -->
   <script type="text/javascript" src="{{asset('plugins/fastclick/lib/fastclick.js')}}"></script>
   <!-- NProgress -->
   <script type="text/javascript" src="{{asset('plugins/nprogress/nprogress.js')}}"></script>
   <!-- Chart.js -->
   <script type="text/javascript" src="{{asset('plugins/Chart.js/dist/Chart.min.js')}}"></script>
   <!-- gauge.js -->
   <script type="text/javascript" src="{{asset('plugins/gauge.js/dist/gauge.min.js')}}"></script>
   <!-- bootstrap-progressbar -->
   <script type="text/javascript" src="{{asset('plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
   <!-- iCheck -->
   <script type="text/javascript" src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
   <!-- Skycons -->
   <script type="text/javascript" src="{{asset('plugins/skycons/skycons.js')}}"></script>
   <!-- Flot -->
   <script type="text/javascript" src="{{asset('plugins/Flot/jquery.flot.js')}}"></script>
   <script type="text/javascript" src="{{asset('plugins/Flot/jquery.flot.pie.js')}}"></script>
   <script type="text/javascript" src="{{asset('plugins/Flot/jquery.flot.time.js')}}"></script>
   <script type="text/javascript" src="{{asset('plugins/Flot/jquery.flot.stack.js')}}"></script>
   <script type="text/javascript" src="{{asset('plugins/Flot/jquery.flot.resize.js')}}"></script>
   <!-- Flot plugins -->
   <script type="text/javascript" src="{{asset('plugins/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
   <script type="text/javascript" src="{{asset('plugins/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('plugins/flot.curvedlines/curvedLines.js')}}"></script>
   <!-- DateJS -->
   <script type="text/javascript" src="{{asset('plugins/DateJS/build/date.js')}}"></script>

   <!-- bootstrap-daterangepicker -->
   <script type="text/javascript" src="{{asset('plugins/moment/min/moment.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

   <!-- Custom Theme Scripts -->
   <script type="text/javascript" src="{{asset('js/framework-custom.min.js')}}"></script>
</body>

</html>
