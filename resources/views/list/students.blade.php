@extends('layouts.admin')

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
          <th></th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td width="50"><a href="{{route('student.edit',$user->id)}}" class="btn btn-sm btn-warning">Edit</a></td>
            <td width="50">
                <form class="form-horizontal" method="POST" action="{{route('student.destroy', $user->id)}}">
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
                       data-content="Delete student = {{$user->name}}?">Delete</submit>

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
