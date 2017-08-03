@section('dashboard-content')
{!! Breadcrumbs::render('admin.department.index')!!}
<h1 class="page-header">Departments</h1>
<div class="x_panel">
    <div class="x_title">
      <button class="btn btn-sm btn-primary" onclick="collapse_toggle1()" type="button" data-toggle="collapse" href="#add-department-form" aria-expanded="false" aria-controls="add-department-form">Add</button>
        <button class="btn btn-sm btn-primary" onclick="collapse_toggle1()" type="button" data-toggle="collapse" href="#add-department-batchform" aria-expanded="false" aria-controls="add-department-batchform">Add Batch</button>

    </div>
      @include('dashboards.admin.forms.add-department')
      <div class="x_content">
      @if(count($departments)  > 0)


          <table class="table table-striped table-hover" id="DataTable">
            <thead>
            <tr>
              <th>ID</th>
              <th>Department</th>
              <th class="nosort"></th>
              <th class="nosort"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($departments as $department)
              <tr class="clickable-row" data-href="{{route('department.show', $department->id)}}">
                <td>{{$department->department_id}}</td>
                <td>{{$department->department_name}}</td>
                <td width="50"><a href="{{route('department.edit',$department->id)}}" class="btn btn-sm btn-warning">Edit</a></td>
                <td width="50">
                    <form class="form-horizontal" method="POST" action="{{route('department.destroy', $department->id)}}">
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
                           data-content="Delete student = {{$department->department_name}}?">Delete</submit>

                       </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @else
        <h3>No Record</h3>
      @endif
    </div>
@endsection
