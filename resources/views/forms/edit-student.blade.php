@extends('layouts.admin') @section('dashboard-content')


    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <center>
                    <h1>Edit Student</h1></center>
                <form class="form-horizontal" method="POST" action="{{route('student.update', $student->id)}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $student->name }}" required autofocus> @if ($errors->has('name'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span> @endif
                            </div>
                        </div>

                        <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
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


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
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
