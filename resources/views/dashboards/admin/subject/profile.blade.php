@section('dashboard-content')
    {!!Breadcrumbs::render('admin.subject.show', $subject)!!}
    <h1 class="page-header">Subject Profile</h1>
    <div class="x_panel">
        <div class="x_title">
            {{$subject->course_description}}
        </div>
        <div class="x_content">
            <table class="profile">
                <tr>
                    <td>Course ID</td><td>{{$subject->course_id}}</td>
                </tr>
                <tr>
                    <td>Course Description</td><td>{{$subject->course_description}}</td>
                </tr>
                <tr>
                    <td>Instructor</td><td>{{$subject->instructor}}</td>
                </tr>
                <tr>
                    <td>Classroom</td><td>{{$subject->classroom}}</td>
                </tr>
                <tr>
                    <td>Schedule</td><td>{{$subject->timeslot}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
