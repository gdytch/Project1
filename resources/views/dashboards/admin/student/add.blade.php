@section('dashboard-content')
{!! Breadcrumbs::render('admin.student.create')!!}
<style>
    .form-group{
        margin: 0px;
    }
    .user_data li{
        margin-top: 30px;
    }
</style>
        <div class="x_panel">
            <div class="x_title">
                <h2>Register Student</h2>
                <div class="clearfix"></div>
            </div>
            <style>
                .form-group{
                    margin: 0px;
                }
                .user_data li{
                    margin-top: 30px;
                }
            </style>
            <form class="x_content" enctype="multipart/form-data" method="POST" action="{{route('student.store')}}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-2 profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <img class="img-circle img-thumbnail profile_avatar" src="{{asset('storage/avatars/default.jpg')}}" alt="Avatar" title="Change the avatar">
                            </div>
                        </div>
                        <br>

                        <ul class="list-unstyled user_data">
                            <li><div class="form-group is-empty is-fileinput">
                                    <input type="file" id="inputFile4" multiple="" name="avatar">
                                    <div class="input-group">
                                      <input type="text" readonly="" class="form-control" placeholder="Change avatar">
                                            <span class="input-group-btn input-group-sm">
                                              <button type="button" class="btn btn-sm btn-primary">
                                                Upload
                                              </button>
                                            </span>
                                    </div>
                                  </div>
                              </li>
                            <li><strong>Student ID </strong>
                                <div class="{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <input id="ID_no" type="text" class="form-control" name="ID_no" value="{{ old('ID_no') }}" required autofocus> @if ($errors->has('ID_no'))
                                    <span class="help-block"><strong>{{ $errors->first('ID_no') }}</strong></span> @endif
                                </div>
                            </li>
                            <li><strong>Course </strong>
                                <select name="department_id" id="department_id" class="form-control">
                                    <option value="null" selected>--Select--</option>
                                    @foreach ($departments as $department)
                                        <option value="{{$department->department_id}}" >{{$department->department_id}}</option>
                                    @endforeach
                                </select>
                            </li>
                            {{-- @if(old('major != null)
                            <li><strong>Major: </strong>{{old('major}} </li>@endif --}}
                            <li><strong>Year Level </strong>
                                <select name="year_level" id="department_id" class="form-control">
                                    <option value="0" selected>--Select--</option>
                                    @foreach ($year_levels as $item)
                                        <option value="{{$item->year_levels}}" >{{$item->year_levels}}</option>
                                    @endforeach
                                </select>
                            </li>
                            <li><strong>Password</strong>
                                <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>@endif
                            </li>
                            <li><strong>Confirm Password</strong>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-2 col-xs-offset-1">
                        <h4>Student Details</h4>
                        <hr>
                        <ul class="list-unstyled user_data">
                            <li><strong>First name </strong>
                                <div class="{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus> @if ($errors->has('first_name'))
                                    <span class="help-block"><strong>{{ $errors->first('first_name') }}</strong></span> @endif
                                </div>
                            </li>
                            <li><strong>Middle name </strong>
                                <div class="{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                                    <input id="middle_name" type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}" required> @if ($errors->has('middle_name'))
                                    <span class="help-block"><strong>{{ $errors->first('middle_name') }}</strong></span> @endif
                                </div>
                            </li>
                            <li><strong>Last name </strong>
                                <div class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required> @if ($errors->has('last_name'))
                                    <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span> @endif
                                </div>
                            </li>
                            <li><strong>Birthdate </strong>
                                <div class="input-group date" id="myDatepickerBirthday">
                                    <input type="text" class="form-control input-group-addon" placeholder="YYYY-MM-DD" name="birthdate" value="{{ old('birthdate') }}" required>
                                    <span class="input-group-addon">
                                                        <span style="color: #BDBDBD" class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-xs-offset-1">
                        <br>
                        <ul class="list-unstyled user_data">
                            <li><strong>Gender </strong>
                                <div class="radio radio-primary">
                                    <label>
                                        <input type="radio" name="gender" id="optionsRadios1" value="m" @if(old('gender') == 'm') checked="" @endif><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span>
                                            Male
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <label>
                                        <input type="radio" name="gender" id="optionsRadios2" value="f" @if(old('gender') == 'f') checked="" @endif><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span>
                                            Female
                                        </label>
                                </div>
                            </li>
                            <li><strong>Home Address </strong>
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>
                                @if ($errors->has('address'))
                                    <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
                                @endif
                            </li>
                            <li><strong>Email Address </strong>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </li>
                            <li><strong>Contact Number </strong>
                                <input id="contact_no" type="text" class="form-control" name="contact_no" value="{{ old('contact_no') }}" required>
                                @if ($errors->has('contact_no'))
                                    <span class="help-block"><strong>{{ $errors->first('contact_no') }}</strong></span>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-xs-offset-1">
                        <h4>Parent Details</h4>
                        <hr>
                        <ul class="list-unstyled user_data">
                            <strong>Father: </strong>
                            <li>First name
                                <input id="father_first_name" type="text" class="form-control" name="father_first_name" value="{{ old('father_first_name') }}" required>
                                @if ($errors->has('father_first_name'))
                                    <span class="help-block"><strong>{{ $errors->first('father_first_name') }}</strong></span>
                                @endif
                            </li>
                            <li>Last name
                                <input id="father_last_name" type="text" class="form-control" name="father_last_name" value="{{ old('father_last_name') }}" required>
                                @if ($errors->has('father_last_name'))
                                    <span class="help-block"><strong>{{ $errors->first('father_last_name') }}</strong></span>
                                @endif
                            </li>
                            <li><strong> Contact: </strong>
                                <input id="father_contact_no" type="text" class="form-control" name="father_contact_no" value="{{ old('father_contact_no') }}" required>
                                @if ($errors->has('father_contact_no'))
                                    <span class="help-block"><strong>{{ $errors->first('father_contact_no') }}</strong></span>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-xs-offset-1">
                        <ul class="list-unstyled user_data">
                            <strong>Mother: </strong>
                            <li>First name
                                <input id="mother_first_name" type="text" class="form-control" name="mother_first_name" value="{{ old('mother_first_name') }}" required>
                                @if ($errors->has('mother_first_name'))
                                    <span class="help-block"><strong>{{ $errors->first('mother_first_name') }}</strong></span>
                                @endif
                            </li>
                            <li>Last name
                                <input id="mother_last_name" type="text" class="form-control" name="mother_last_name" value="{{ old('mother_last_name') }}" required>
                                @if ($errors->has('mother_last_name'))
                                    <span class="help-block"><strong>{{ $errors->first('mother_last_name') }}</strong></span>
                                @endif
                            </li>
                            <li><strong>Contact: </strong>
                                <input id="mother_contact_no" type="text" class="form-control" name="mother_contact_no" value="{{ old('mother_contact_no') }}" required>
                                @if ($errors->has('mother_contact_no'))
                                    <span class="help-block"><strong>{{ $errors->first('mother_contact_no') }}</strong></span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                            <a class="btn btn-warning" type="button"href="/admin/student" aria-expanded="false" aria-controls="add-student-form">Cancel</a>
                        </div>

                    </div>
                </div>
            </form>
        </div>


@endsection
