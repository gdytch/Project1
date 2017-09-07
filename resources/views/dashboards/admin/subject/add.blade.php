@section('dashboard-content')
    {!!Breadcrumbs::render('admin.subject.create')!!}
    <h1 class="page-header">Add Subject</h1>
    <div class="x_panel">
        <div class="x_title">
            <a href="{{route('subject.bulkcreate')}}" class="btn btn-sm btn-primary">Upload File</a>
        </div>
        <div class="x_content">
            <form class="form-horizontal" action="{{route('subject.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="course_id" class="col-md-2 control-label">Course ID</label>

                    <div class="col-md-2">
                        <input type="text" class="form-control" id="course_id" name="course_id" placeholder="" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="course_description" class="col-md-2 control-label">Course Description</label>

                    <div class="col-md-2">
                        <input type="text" class="form-control" id="course_description" name="course_description" placeholder="" required>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="{{route('subject.index')}}" class="btn btn-warning">Cancel</a>

                </div>
            </form>

        </div>
    </div>
@endsection
