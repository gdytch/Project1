@extends('layouts.app')
@include('auth.login-forms')
@section('content')

  <div class="container">
  <div class="col-md-6">
    <h1> Welcome</h1>
  </div>
  <div class="col-md-6" idea="myTabs">
    <ul class="nav nav-tabs" role="tablist">
     <li role="presentation"id="student_a" class="active"><a href="#student" aria-controls="student" role="tab" data-toggle="tab" >Student</a></li>
     <li role="presentation" id="teacher_a" class=""><a href="#teacher" aria-controls="teacher" role="tab" data-toggle="tab" >Teacher</a></li>
     <li role="presentation" id="parent_a" class=""><a href="#parent" aria-controls="parent" role="tab" data-toggle="tab" >Parent</a></li>
    </ul>
    <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="student"> @yield('student-login-form')  </div>
    <div role="tabpanel" class="tab-pane fade" id="teacher"> @yield('teacher-login-form') </div>
    <div role="tabpanel" class="tab-pane fade" id="parent"> @yield('parent-login-form') </div>
  </div>
  </div>
</div>

@endsection
