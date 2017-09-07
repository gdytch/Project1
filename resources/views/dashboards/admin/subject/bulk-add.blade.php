@section('dashboard-content')
    {!!Breadcrumbs::render('admin.subject.bulkcreate')!!}
    <h1 class="page-header">Add Subject</h1>
    <div class="x_panel">
        <div class="x_content">
            <form class="form-horizontal" action="{{route('subject.bulkstore')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="file" class="col-md-2 control-label">Upload File</label>

                    <div class="col-md-6">
                        <input type="file" class="form-control" id="file" multiple="" name="file">
                        <div class="input-group">
                            <input type="text" readonly="" class="form-control" placeholder="">
                            <span class="input-group-btn input-group-sm">
                                <button type="button" class="btn btn-sm btn-primary">
                                    File
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    <a href="{{URL::previous()}}" class="btn btn-warning">Cancel</a>

                </div>
            </form>

        </div>
    </div>
@endsection
