@extends('layouts.app')
@section('content')
  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" type="text/css">
  <div class="container-fluid">
       <div class="row">
         <div class="col-sm-3 col-md-2 sidebar">
           <ul class="nav nav-sidebar">
             <li id="overview"><a href="/admin/">Overview <span class="sr-only">(current)</span></a></li>
             <li id="list_students"><a href="/admin/student">Students</a></li>
             <li id="list_teachers"><a href="/admin/teacher">Teachers </a></li>

           </ul>
         </div>

         <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           @yield('dashboard-content')
         </div>
       </div>
     </div>
@endsection
