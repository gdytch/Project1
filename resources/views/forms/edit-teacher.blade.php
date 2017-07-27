@section('dashboard-content')


<div class="panel panel-default">
    <div class="panel-body">
        <center>
            <h1>Edit Teacher</h1></center>
        <form class="form-horizontal" method="POST" action="{{route('teacher.update', $teacher->id)}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="form-group col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ $teacher->name }}" required autofocus> @if ($errors->has('name'))
                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span> @endif
                    </div>
                </div>

                <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ $teacher->email }}" required> @if ($errors->has('email'))
                        <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span> @endif
                    </div>
                </div>

            </div>

            <input type="hidden" name="_method" value="PUT">


            <div class="form-group col-md-6">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                    <a href="/admin/teacher" class="btn btn-warning">Cancel</a>
                </div>

            </div>
        </form>
    </div>
</div>


@endsection
