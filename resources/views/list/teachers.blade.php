@extends('admin')

@section('dashboard-content')
  @if(count($teachers)  > 0)
    <div class="page-header">
       <h1 id="tables">Teachers <button class="btn btn-primary" onclick="collapse_toggle1()" type="button" data-toggle="collapse" href="#add-teacher-form" aria-expanded="false" aria-controls="add-teacher-form">Add</button>
        <button class="btn btn-primary" onclick="collapse_toggle1()" type="button" data-toggle="collapse" href="#add-teacher-batchform" aria-expanded="false" aria-controls="add-teacher-batchform">Add Batch</button></h1>
 
    </div>
      @include('forms.add-teacher')


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
        @foreach ($teachers as $teacher)
          <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->email}}</td>

          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @else
    <h1>No Student</h1>
  @endif
@endsection
