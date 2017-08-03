@section('dashboard-content')
    <div class="page-header">
      <h1>Students </h1>
    </div>
      <div class="x_panel">
          <div class="x_title">
              <a href="{{route('student.create')}}" class="btn btn-sm btn-primary">Add</a>
              <a href="#" class="btn btn-sm btn-primary">Add Batch</a>
         </div>

        <div class="x_content">
        @if(count($users)  > 0)
          <table class="table table-striped table-hover" id="DataTable">
            <thead>
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th class="default-order">Year Level</th>
              <th>Department</th>
              <th class="nosort"></th>
              <th class="nosort"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
              <tr class="clickable-row" data-href="{{route('view.student.profile', $user->id)}}">
                <td>{{$user->ID_no}}</td>
                <td>{{$user->first_name}}</td>
                <td>{{$user->middle_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->year_level}}</td>
                <td>{{$user->department_id}}</td>
                <td width="50"><a href="{{route('student.edit',$user->id)}}" class="btn btn-sm btn-warning">Edit</a></td>
                <td width="50">
                    <form class="form-horizontal" method="POST" action="{{route('student.destroy', $user->id)}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-sm btn-danger"
                           data-toggle="confirmation"
                           data-placement="top"
                           data-title="Delete Confirmation"
                           data-btn-ok-type="submit"
                           data-popout="true"
                           data-btn-ok-label="Yes"
                           data-btn-ok-icon="glyphicon glyphicon-share-alt"
                           data-btn-ok-class="btn-success btn-sm"
                           data-btn-cancel-label="No"
                           data-btn-cancel-icon="glyphicon glyphicon-ban-circle"
                           data-btn-cancel-class="btn-danger btn-sm"
                           data-content="Delete student = {{$user->first_name}} {{$user->last_name}}?">Delete</submit>

                       </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        @else
            <h1>No Student</h1>
        @endif
      </div>
  </div>
@endsection
