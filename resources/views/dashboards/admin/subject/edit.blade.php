@section('dashboard-content')
    {!!Breadcrumbs::render('admin.subject.edit', $subject)!!}
    <h1 class="page-header">Edit Subject</h1>
    <div class="x_panel">
        <div class="x_title">
            {{$subject->course_description}}
        </div>
        <div class="x_content">
            <form class="" enctype="multipart/form-data" method="POST" action="{{route('subject.update', $subject->id)}}">
                {{ csrf_field() }}
                <table class="profile">
                    <tr>
                        <td>Course ID</td>
                        <td>
                            <div class="{{ $errors->has('course_id') ? ' has-error' : '' }}">
                                <input id="course_id" type="text" class="form-control" name="course_id" value="{{ $subject->course_id }}" required autofocus>
                                @if ($errors->has('course_id'))
                                    <span class="help-block"><strong>{{ $errors->first('course_id') }}</strong></span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Course Description</td>
                        <td>
                            <div class="{{ $errors->has('course_description') ? ' has-error' : '' }}">
                                <input id="course_description" type="text" class="form-control" name="course_description" value="{{ $subject->course_description }}" required autofocus>
                                @if ($errors->has('course_description'))
                                    <span class="help-block"><strong>{{ $errors->first('course_description') }}</strong></span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Instructor</td>
                        <td>
                            <div class="{{ $errors->has('instructor') ? ' has-error' : '' }}">
                                <input id="instructor" type="text" class="form-control" name="instructor" value="{{ $subject->instructor }}" required autofocus>
                                @if ($errors->has('instructor'))
                                    <span class="help-block"><strong>{{ $errors->first('instructor') }}</strong></span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Classroom</td>
                        <td>
                            <div class="{{ $errors->has('classroom') ? ' has-error' : '' }}">
                                <input id="classroom" type="text" class="form-control" name="classroom" value="{{ $subject->classroom }}" required autofocus>
                                @if ($errors->has('classroom'))
                                    <span class="help-block"><strong>{{ $errors->first('classroom') }}</strong></span>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Schedule</td>
                        <td>
                            <div class="{{ $errors->has('timeslot') ? ' has-error' : '' }}">
                                <input id="timeslot" type="text" class="form-control" name="timeslot" value="{{ $subject->timeslot }}" required autofocus>
                                @if ($errors->has('timeslot'))
                                    <span class="help-block"><strong>{{ $errors->first('timeslot') }}</strong></span>
                                @endif
                            </div>
                        </td>
                    </tr>
                </table>
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
@endsection
