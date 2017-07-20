@extends('layouts.admin')

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
          <th></th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($teachers as $teacher)
          <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->email}}</td>
            <td width="50"><a href="{{route('teacher.edit', $teacher->id)}}" class="btn btn-sm btn-warning">Edit</a></td>
            <td width="50">    <form class="form-horizontal" method="POST" action="{{route('teacher.destroy', $teacher->id)}}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-sm btn-danger"
                       data-toggle="confirmation"
                       data-placement="top"
                       data-title="Delete Confirmation"
                       data-btn-ok-type="submit"
                       data-popout="true"
                       data-btn-ok-label="Yes"
                       data-btn-ok-icon="glyphicon glyphicon-share-alt"
                       data-btn-ok-class="btn-success btn-sm"
                       data-btn-cancel-label="No"
                       data-btn-cancel-icon="glyphicon glyphicon-ban-circle"
                       data-btn-cancel-class="btn-danger btn-sm"
                       data-content="Delete student = {{$teacher->name}}?">Delete</submit>

                   </form>
              </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @else
    <h1>No Student</h1>
  @endif
@endsection
