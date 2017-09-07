@section('dashboard-content')
    <h1 class="page-header">Add file</h1>
    <form class="" action="{{route('admin.run.test')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group is-empty is-fileinput">
                <input type="file" id="inputFile4" multiple="" name="file">
                <div class="input-group">
                  <input type="text" readonly="" class="form-control" placeholder="">
                        <span class="input-group-btn input-group-sm">
                          <button type="button" class="btn btn-sm btn-primary">
                            Upload
                          </button>
                        </span>
                </div>
              </div>
          <button type="submit" class="btn btn-primary">
              Register
          </button>
    </form>
 @if (isset($results))
    <div class="row">
      <div class="x_panel">
        <div class="x_content">
           <table class="table table-striped">
                <tbody>
                    <th>Course Id</th>  <th>Course Description</th> <th>Classroom</th>  <th>Instructor</th> <th>Students</th>
                    @foreach ($results as $result)
                        <tr>
                        <td>{{$result->course_id}}</td><td>{{$result->course_description}}</td><td>{{$result->classroom}}</td><td>{{$result->instructor}}</td></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
       
           
    </div>
        @endif
    
@endsection
