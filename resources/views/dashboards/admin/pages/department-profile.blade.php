@section('dashboard-content')
@if(count($department) > 0)
<!-- page content -->
    <h1 class="page-header">{{$department->department_name}}</h1>
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
            <div class="count">{{count($department->students)}}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
            <div class="count">123.50</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
            <div class="count green">2,500</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
            <div class="count">4,567</div>
            <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
            <div class="count">2,315</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
            <div class="count">7,325</div>
            <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
        </div>
    </div>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Students <small>students enrolled</small></h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content" style="display: block;">
                        @if($department->students != null)

                            <table class="table table-hover">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>ID</th>
                                  <th>First Name</th>
                                  <th>Last Name</th>
                                  <th>Year Level</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach ($department->students as $key => $student)
                                <tr>
                                  <th scope="row">{{$key}}</th>
                                  <td>{{$student->ID_no}}</td>
                                  <td>{{$student->first_name}}</td>
                                  <td>{{$student->last_name}}</td>
                                  <td>{{$student->year_level}}</td>
                                  <td width="50"><a href="{{route('student.show', $student->id)}}" class="btn btn-sm btn-info">View</a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                        @else
                            No data
                        @endif
                      </div>
                    </div>
                  </div>

    </div>
    <br />

<!-- /page content -->
@endif
@endsection
