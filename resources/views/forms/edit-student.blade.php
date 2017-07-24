@extends('layouts.admin') @section('dashboard-content')
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-body">
                <center>
                    <h1>Edit Student</h1></center>
                <form class="form-horizontal" method="POST" action="{{route('student.update', $student->id)}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group is-empty col-md-4 {{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $student->first_name }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-4 {{ $errors->has('middle_name') ? ' has-error' : '' }}">
                            <label for="middle_name" class="col-md-4 control-label">Middle Name</label>

                            <div class="col-md-6">
                                <input id="middle_name" type="text" class="form-control" name="middle_name" value="{{ $student->middle_name }}" required >

                                @if ($errors->has('middle_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middle_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-4 {{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $student->last_name }}" required >

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="col-md-4 control-label">Sex</label>

                            <div class="col-md-4">
                              <div class="radio radio-primary">
                                <label>
                                  <input type="radio" name="gender" id="optionsRadios1" value="m" @if($student->gender == 'm') checked="" @endif><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span>
                                  Male
                                </label>
                              </div>
                              <div class="radio radio-primary">
                                <label>
                                  <input type="radio" name="gender" id="optionsRadios2" value="f" @if($student->gender == 'f') checked="" @endif><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span>
                                  Female
                                </label>
                              </div>
                            </div>
                          </div>
                        <div class="form-group col-md-4">
                            <label class="col-md-4 control-label">Birthdate</label>
                            <div class="input-group col-md-6 date" id="myDatepickerBirthday">
                                <input type="text" class="form-control input-group-addon" placeholder="YYYY-MM-DD" name="birthdate" value="{{ $student->birthdate }}" required>
                                <span class="input-group-addon">
                                   <span style="color: #BDBDBD" class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group col-md-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $student->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-md-4 {{ $errors->has('contact_no') ? ' has-error' : '' }}">
                            <label for="contact_no" class="col-md-4 control-label">Contact #</label>

                            <div class="col-md-6">
                                <input id="contact_no" type="text" class="form-control" name="contact_no" value="{{ $student->contact_no }}" required>

                                @if ($errors->has('contact_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-4 {{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $student->address }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
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
