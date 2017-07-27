
@section('dashboard-content')
    <!-- page content -->
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
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
                        <div class="col-md-2 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-circle img-thumbnail profile_avatar" src="{{asset('storage/avatars/'.$student->avatar)}}" alt="Avatar" title="avatar">

                                </div>
                            </div>
                            <br>
                            <ul class="list-unstyled user_data">
                                <li><strong>Student ID </strong><h4 class="green">{{$student->ID_no}} </h4></li>
                                <li><strong>Course </strong> <h4 class="green">{{$student->department}}<h4 class="green"> </li>
                                @if($student->major != null)<li><i class="fa fa-briefcase user-profile-icon"></i> <strong>Major </strong><h4 class="green">{{$student->major}} </h4></li>@endif
                                <li><strong>Year Level </strong><h4 class="green">{{$student->year_level}}</h4> </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3>Student Details</h3>
                            <hr>
                            <ul class="list-unstyled user_data">
                                <li><strong>First name </strong><h4 class="green">{{$student->first_name}} </h4></li>
                                <li><strong>Middle name </strong><h4 class="green">{{$student->middle_name}} </h4></li>
                                <li><strong>Last name </strong><h4 class="green">{{$student->last_name}} </h4></li>
                                <li><strong>Birthdate </strong><h4 class="green">{{$student->birthdate}} </h4></li>
                                <li><strong>Age </strong><h4 class="green"> </h4></li>
                                <li><strong>Gender </strong><h4 class="green">@if($student->gender == 'm') Male @else Female @endif </h4></li>
                                <li><strong>Home Address </strong><h4 class="green">{{$student->address}} </h4></li>
                                <li><strong>Email Address </strong><h4 class="green">{{$student->email}} </h4></li>
                                <li><strong>Contact </strong><h4 class="green">{{$student->contact_no}} </h4></li>



                            </ul>
                        </div>
                        <div class="col-md-3">
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

@endsection
