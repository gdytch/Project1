<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name')}}</title>

    @include('inc.styles')



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
