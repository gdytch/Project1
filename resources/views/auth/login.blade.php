@extends('layouts.app')
@include('auth.login-forms')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @yield('student-login-form')
        </div>
    </div>

  </div>
@endsection
