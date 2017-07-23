@extends('layouts.admin') @section('dashboard-content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <center>
                    <h1>Edit Student</h1></center>
                <form class="form-horizontal" method="POST" action="{{route('student.update', $student->id)}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-md-4 {{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $student->first_name }}" required autofocus> @if ($errors->has('first_name'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span> @endif
                            </div>
                        </div>
                        <div class="form-group col-md-4 {{ $errors->has('middle_name') ? ' has-error' : '' }}">
                            <label for="middle_name" class="col-md-4 control-label">Middle Name</label>

                            <div class="col-md-6">
                                <input id="middle_name" type="text" class="form-control" name="middle_name" value="{{ $student->middle_name }}" required autofocus> @if ($errors->has('middle_name'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('middle_name') }}</strong>
                                        </span> @endif
                            </div>
                        </div>
                        <div class="form-group col-md-4 {{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $student->last_name }}" required autofocus> @if ($errors->has('last_name'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span> @endif
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="form-group col-md-4 {{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Sex</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="gender" value="{{ $student->gender}}" required> @if ($errors->has('gender'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span> @endif
                            </div>
                        </div>
                        <div class="form-group col-md-4 {{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Home Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $student->address }}" required> @if ($errors->has('address'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span> @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $student->email }}" required> @if ($errors->has('email'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span> @endif
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="_method" value="PUT">


                    <div class="form-group col-md-6">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                            <a href="/admin/student" class="btn btn-warning">Cancel</a>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
