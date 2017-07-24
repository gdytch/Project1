<div class="collapse" id="add-student-form">
            <div class="panel panel-default">
                <div class="panel-body">
                    <center><h1>Register Student</h1></center>
                    <form class="form-horizontal" method="POST" action="{{ route('student.store') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group is-empty col-md-4 {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">First Name</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

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
                                    <input id="middle_name" type="text" class="form-control" name="middle_name" value="{{ old('middle_name') }}" required >

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
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required >

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
                                      <input type="radio" name="gender" id="optionsRadios1" value="m" checked=""><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span>
                                      Male
                                    </label>
                                  </div>
                                  <div class="radio radio-primary">
                                    <label>
                                      <input type="radio" name="gender" id="optionsRadios2" value="f"><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span>
                                      Female
                                    </label>
                                  </div>
                                </div>
                              </div>
                            <div class="form-group col-md-4">
                                <label class="col-md-4 control-label">Birthdate</label>
                                <div class="input-group col-md-6 date" id="myDatepickerBirthday">
                                    <input type="text" class="form-control input-group-addon" placeholder="YYYY-MM-DD" name="birthdate" required>
                                    <span class="input-group-addon">
                                       <span style="color: #BDBDBD" class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group col-md-4 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
                                    <input id="contact_no" type="text" class="form-control" name="contact_no" value="{{ old('contact_no') }}" required>

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
                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-4{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group col-md-4 {{ $errors->has('ID_no') ? ' has-error' : '' }}">
                                <label for="ID_no" class="col-md-4 control-label">School ID #</label>

                                <div class="col-md-6">
                                    <input id="ID_no" type="text" class="form-control" name="ID_no" value="{{ old('ID_no') }}" required>

                                    @if ($errors->has('ID_no'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ID_no') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                                <button class="btn btn-warning" onclick="collapse_toggle1()" type="button" >Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>


<div class="collapse" id="add-student-batchform">
            <div class="panel panel-default">
                <div class="panel-body">
                    <center><h1>Batch Register</h1></center>
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
