@extends('layouts.app')
@section('content')
    {{-- <link href="{{asset('css/framework/framework-custom.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <div style="margin-top: -100px;">
        @include('inc.admin-sidebar')
        <div class="right_col" role="main" >
            @include('inc.messages')
            @include($dashboardContent)
            @yield('dashboard-content')
            <a href="{{url()->previous()}}" class="btn btn-primary">Back</a>
        </div>
    </div>


@endsection
