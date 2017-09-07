@section('dashboard-content')
	{!!Breadcrumbs::render('admin.subject.index')!!}
	<h1 class="page-header">Subjects</h1>



	 <div class="x_panel">
		 <div class="x_title">
			<a href="{{route('subject.create')}}" class="btn btn-sm btn-primary">Add Subject</a>
		 </div>
        <div class="x_content">
        @if(count($subjects))

            <table class="table table-striped table-hover" id="DataTable">
                <thead>
	                    <tr><th>Course Id</th>  <th>Course Description</th> <th width="50" class="nosort"></th><th width="50" class="nosort"></th></tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr class="clickable-row" data-href="{{route('subject.show', $subject->id)}}">
	                        <td>{{$subject->course_id}}</td>
							<td>{{$subject->course_description}}</td>
							<td><a href="{{route('subject.edit', $subject->id)}}" class="btn btn-sm btn-warning">Edit</a></td>
							<td>
								<form class="form-horizontal" method="POST" action="{{route('subject.destroy', $subject->id)}}">
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
					                       data-content="Delete subject = {{$subject->course_id}}?">Delete</submit>

			                   </form>
							</td>

						</tr>
                    @endforeach
                </tbody>
            </table>
            @else
            	No data

            @endif
        </div>
      </div>

@endsection
