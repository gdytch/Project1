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

    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap-material-design.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/ripples.min.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
  <body>
    @include('inc.navbar')
    <div style="margin-top: 80px;">
        @include('inc.messages')
        @yield('content')
    </div>
  </body>

  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
 <script type="text/javascript" src="{{asset('js/custom-pre.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/material.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/ripples.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/bootstrap_confirmation.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

</body>
</html>
