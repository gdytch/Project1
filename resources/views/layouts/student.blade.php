@extends('layouts.app')

@section('content')
  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" type="text/css">
  <div class="container-fluid">
       <div class="row">
         <div class="col-sm-3 col-md-2 sidebar">
           <ul class="nav nav-sidebar">
             <li><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
             <li><a href="#">Grades</a></li>
             <li><a href="#">Subjects</a></li>
             <li><a href="#"></a></li>
            </ul>
         </div>
         @yield('dashboard-content')
       </div>
     </div>
@endsection
