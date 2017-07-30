@section('dashboard-content')
    <h1 class="page-header">Edit Department</h1>
    <div class="x_panel">
        <div class="x_content">
            <form class="form-horizontal" method="POST" action="{{route('department.update', $department->id)}}">
                {{csrf_field()}}
                <fieldset>
                    <div class="form-group">
                        <label for="department_id" class="col-md-2 control-label">Department ID</label>

                        <div class="col-md-2">
                            <input type="text" class="form-control" id="department_id" name="department_id" placeholder="" value="{{$department->department_id}}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department_name" class="col-md-2 control-label">Department Name</label>

                        <div class="col-md-4">
                            <input type="text" class="form-control" id="department_name" name="department_name" value="{{$department->department_name}}" placeholder="" required>
                        </div>

                    </div>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="year_levels" class="col-md-2 control-label">No. of Year levels</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="year_levels" name="year_levels" placeholder="" value="{{$department->year_levels}}" required>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
