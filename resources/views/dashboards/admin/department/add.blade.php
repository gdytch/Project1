<div class="collapse" id="add-department-form">
    <div class="panel panel-default">
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{route('department.store')}}">
                {{csrf_field()}}
                <fieldset>
                    <h1>Register Course</h1>
                    <div class="form-group">
                        <label for="department_id" class="col-md-2 control-label">Department ID</label>

                        <div class="col-md-2">
                            <input type="text" class="form-control" id="department_id" name="department_id" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department_name" class="col-md-2 control-label">Department Name</label>

                        <div class="col-md-4">
                            <input type="text" class="form-control" id="department_name" name="department_name" placeholder="" required>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="year_levels" class="col-md-2 control-label">No. of Year levels</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" id="year_levels" name="year_levels" placeholder="" required>
                        </div>

                    </div>
                    <input type="hidden" name="department_head" value="null">

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="button" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
