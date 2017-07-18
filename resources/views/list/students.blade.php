@extends('admin')

@section('dashboard-content')
  @if(count($users)  > 0)
    <div class="page-header">
      <h1 id="tables">Students <button class="btn btn-primary" onclick="collapse_toggle1()" type="button" data-toggle="collapse" href="#add-student-form" aria-expanded="false" aria-controls="add-student-form">Add</button>
        <button class="btn btn-primary" onclick="collapse_toggle1()" type="button" data-toggle="collapse" href="#add-student-batchform" aria-expanded="false" aria-controls="add-student-batchform">Add Batch</button></h1>
    </div>
      @include('forms.add-student')

    <div class="bs-component">
      <table class="table table-striped table-hover ">
        <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>

          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @else
    <h1>No Student</h1>
  @endif

@endsection
