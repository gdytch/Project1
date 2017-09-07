@extends('layouts.app')
@section('content')
    {{-- <link href="{{asset('css/framework/framework-custom.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <div style="margin-top: -100px;">
        @include('inc.admin-sidebar')
        <div class="right_col" role="main"  style="min-height: auto !important">
            @include('inc.messages')
            @include($dashboard_content)
            @yield('dashboard-content')
        </div>
    </div>


@endsection
