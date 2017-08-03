@section('dashboard-content')
{!! Breadcrumbs::render('admin.student.edit', $student)!!}
<h1 class="page-header">Edit Student</h1>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2> {{$student->ID_no}}</h2>
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
            <form class="x_content" enctype="multipart/form-data" method="POST" action="{{route('student.update', $student->id)}}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-2 profile_left">
                        <div class="profile_img">
                            <div id="crop-avatar">
                                <!-- Current avatar -->
                                <img class="img-circle img-thumbnail profile_avatar" src="{{asset('storage/avatars/'.$student->avatar)}}" alt="Avatar" title="Change the avatar">
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
                            <li><strong>Student ID: </strong>{{$student->ID_no}} </li>
                            <li><strong>Course: </strong>
                                    <select name="department_id" id="department_id" class="form-control">
                                        <option value="null" @if($student->department_id == null) selected @endif>--Select--</option>
                                        @foreach ($departments as $department)
                                            <option value="{{$department->department_id}}" @if($student->department_id == $department->department_id) selected @endif >{{$department->department_id}}</option>
                                        @endforeach
                                    </select>
                            </li>
                            @if($student->major != null)
                            <li><strong>Major: </strong>{{$student->major}} </li>@endif
                            <li><strong>Year Level: </strong>
                                <select name="year_level" id="year_level" class="form-control">
                                    <option value="0" @if($student->year_level == null) selected @endif>--Select--</option>
                                    @php
                                        if($student->department_id != null){
                                            $years = $student->department->year_levels;
                                            for ($i=1; $i <= $years; $i++) {
                                                echo '<option value="'.$i.'"';
                                                if($student->year_level == $i)
                                                    echo 'selected';
                                                echo '>'.$i.'</option>';
                                            }
                                        }
                                    @endphp
                                </select>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-2">
                        <h4>Student Details</h4>
                        <hr>
                        <ul class="list-unstyled user_data">
                            <li><strong>First name </strong>
                                <div class="{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $student->first_name }}" required autofocus> @if ($errors->has('first_name'))
                                    <span class="help-block"><strong>{{ $errors->first('first_name') }}</strong></span> @endif
                                </div>
                            </li>
                            <li><strong>Middle name </strong>
                                <div class="{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                                    <input id="middle_name" type="text" class="form-control" name="middle_name" value="{{ $student->middle_name }}" required> @if ($errors->has('middle_name'))
                                    <span class="help-block"><strong>{{ $errors->first('middle_name') }}</strong></span> @endif
                                </div>
                            </li>
                            <li><strong>Last name </strong>
                                <div class="{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $student->last_name }}" required> @if ($errors->has('last_name'))
                                    <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span> @endif
                                </div>
                            </li>
                            <li><strong>Birthdate </strong>
                                <div class="input-group date" id="myDatepickerBirthday">
                                    <input type="text" class="form-control input-group-addon" placeholder="YYYY-MM-DD" name="birthdate" value="{{ $student->birthdate }}" required>
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
                            </li>
                            <li><strong>Home Address </strong>
                                <input id="address" type="text" class="form-control" name="address" value="{{ $student->address }}" required>
                                @if ($errors->has('address'))
                                    <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
                                @endif
                            </li>
                            <li><strong>Email Address </strong>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $student->email }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </li>
                            <li><strong>Contact Number </strong>
                                <input id="contact_no" type="text" class="form-control" name="contact_no" value="{{ $student->contact_no }}" required>
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
                                <input id="father_first_name" type="text" class="form-control" name="father_first_name" value="{{ $student->father_first_name }}" required>
                                @if ($errors->has('father_first_name'))
                                    <span class="help-block"><strong>{{ $errors->first('father_first_name') }}</strong></span>
                                @endif
                            </li>
                            <li>Last name
                                <input id="father_last_name" type="text" class="form-control" name="father_last_name" value="{{ $student->father_last_name }}" required>
                                @if ($errors->has('father_last_name'))
                                    <span class="help-block"><strong>{{ $errors->first('father_last_name') }}</strong></span>
                                @endif
                            </li>
                            <li><strong> Contact: </strong>
                                <input id="father_contact_no" type="text" class="form-control" name="father_contact_no" value="{{ $student->father_contact_no }}" required>
                                @if ($errors->has('father_contact_no'))
                                    <span class="help-block"><strong>{{ $errors->first('father_contact_no') }}</strong></span>
                                @endif
                            </li>
                            <strong>Mother: </strong>
                            <li>First name
                                <input id="mother_first_name" type="text" class="form-control" name="mother_first_name" value="{{ $student->mother_first_name }}" required>
                                @if ($errors->has('mother_first_name'))
                                    <span class="help-block"><strong>{{ $errors->first('mother_first_name') }}</strong></span>
                                @endif
                            </li>
                            <li>Last name
                                <input id="mother_last_name" type="text" class="form-control" name="mother_last_name" value="{{ $student->mother_last_name }}" required>
                                @if ($errors->has('mother_last_name'))
                                    <span class="help-block"><strong>{{ $errors->first('mother_last_name') }}</strong></span>
                                @endif
                            </li>
                            <li><strong>Contact: </strong>
                                <input id="mother_contact_no" type="text" class="form-control" name="mother_contact_no" value="{{ $student->mother_contact_no }}" required>
                                @if ($errors->has('mother_contact_no'))
                                    <span class="help-block"><strong>{{ $errors->first('mother_contact_no') }}</strong></span>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>

                <input type="hidden" name="_method" value="PUT">
                <div class="row">
                    <div class="form-group col-md-6">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                            <a href="/admin/student" class="btn btn-warning">Cancel</a>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
