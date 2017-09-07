
@section('dashboard-content')
    @if(Auth::guard('admin')->check())
        {!! Breadcrumbs::render('admin.student.show', $student) !!}
        <h1 class="page-header">Student Profile</h1>
    @endif
    <!-- page content -->
        <div class="clearfix"></div>
            <div class="col-md-4">
                <div class="row" style="padding: 50px;">
                    <div class="profile_img">
                        <div id="crop-avatar">
                            <!-- Current avatar -->
                            <img class="profile_avatar" src="{{asset('storage/avatars/'.$student->avatar)}}" alt="Avatar" title="avatar">

                        </div>
                    </div>
                </div>
                <div class="row" style="padding: 50px;">

                    <table class="profile">
                        <tbody>
                            <tr> <td>Student ID  </td> <td> <p class="green">{{$student->ID_no}} </p></td></tr>
                            <tr> <td>Course  </td> <td> <p class="green">{{$student->department->department_id}}</p><h6 class="green">{{$student->department->department_name}}</h6> </td></tr>
                            @if($student->major != null)
                                <tr> <td>Major </td> <td><p class="green">{{$student->major}} </p></td> </tr>
                            @endif
                            <tr><td>Year Level  </td> <td><p class="green">{{$student->year_level}}</p> </td> </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- student profile contents  --}}


            <div class="col-md-8" style="padding: 50px;">
                <h1 class="green">{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</h1>
                <br><br>
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div >
                            <br>
                            <h5>Student Details </h5>
                            <br>
                            <table class="profile">
                                <tbody>
                                    <tr>
                                        <td>Birthdate </td><td>{{$student->birthdate}} </td>
                                    </tr>
                                    <tr>
                                        <td>Age </td><td> @php echo $age = date_diff(date_create($student->birthdate), date_create('now'))->y; @endphp </td>
                                    </tr>
                                    <tr>
                                        <td>Gender </td><td>@if($student->gender == 'm') Male @else Female @endif </td>
                                    </tr>
                                    <tr>
                                        <td>Home Address </td><td>{{$student->address}} </td>
                                    </tr>
                                    <tr>
                                        <td>Email Address </td><td>{{$student->email}} </td>
                                    </tr>
                                    <tr>
                                        <td>Contact </td><td>{{$student->contact_no}} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div >
                            <h3>Parent Details</h3>
                            <hr>
                            <table class="profile">
                                <tbody>
                                    <tr>
                                        <td>Father </td><td>{{$student->father_first_name}} {{$student->father_last_name}} </td>
                                    </tr>
                                    <tr>
                                        <td> Contact </td><td>{{$student->father_contact_no}}</td>
                                    </tr>
                                    <tr>
                                        <td>Mother </td><td>{{$student->mother_first_name}} {{$student->mother_last_name}} </td>
                                    </tr>
                                    <tr>
                                        <td>Contact </td><td>{{$student->mother_contact_no}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            </ul>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="messages">a...</div>
                    <div role="tabpanel" class="tab-pane" id="settings">...</div>
                  </div>

            </div>





            </div>

        <!-- /page content -->

@endsection
{{--
@section('dashboard-content')
    <!-- page content -->
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-circle img-thumbnail profile_avatar" src="{{asset('storage/avatars/'.$student->avatar)}}" alt="Avatar" title="avatar">

                                </div>
                            </div>
                            <br>
                            <ul class="list-unstyled user_data">
                                <li><strong>Student ID </strong><h4 class="green">{{$student->ID_no}} </h4></li>
                                <li><strong>Course </strong> <h4 class="green">{{$student->department->department_id}}</h4>
                                    <h5 class="green">{{$student->department->department_name}}</h5> </li>
                                @if($student->major != null)<li><i class="fa fa-briefcase user-profile-icon"></i> <strong>Major </strong><h4 class="green">{{$student->major}} </h4></li>@endif
                                <li><strong>Year Level </strong><h4 class="green">{{$student->year_level}}</h4> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Student Profile</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="col-md-6" >
                            <h3>Student Details</h3>
                            <hr>
                            <ul class="list-unstyled user_data">
                                <li><strong>First name </strong><h4 class="green">{{$student->first_name}} {{$student->middle_name}} {{$student->last_name}}</h4></li>
                                <li><strong>Birthdate </strong><h4 class="green">{{$student->birthdate}} </h4></li>

                                <li><strong>Age </strong><h4 class="green"> @php echo $age = date_diff(date_create($student->birthdate), date_create('now'))->y; @endphp </h4></li>
                                <li><strong>Gender </strong><h4 class="green">@if($student->gender == 'm') Male @else Female @endif </h4></li>
                                <li><strong>Home Address </strong><h4 class="green">{{$student->address}} </h4></li>
                                <li><strong>Email Address </strong><h4 class="green">{{$student->email}} </h4></li>
                                <li><strong>Contact </strong><h4 class="green">{{$student->contact_no}} </h4></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3>Parent Details</h3>
                            <hr>
                            <ul class="list-unstyled user_data">
                                <li><strong>Father </strong><h4 class="green">{{$student->father_first_name}} {{$student->father_last_name}} </h4></li>
                                <li><strong> Contact </strong><h4 class="green">{{$student->father_contact_no}}</h4></li>
                                <li><strong>Mother </strong><h4 class="green">{{$student->mother_first_name}} {{$student->mother_last_name}} </h4></li>
                                <li> <strong>Contact </strong><h4 class="green">{{$student->mother_contact_no}}</h4></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        <!-- /page content -->

@endsection --}}
