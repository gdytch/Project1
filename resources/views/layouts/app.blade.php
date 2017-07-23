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

    @include('inc.scripts')

</body>

</html>
