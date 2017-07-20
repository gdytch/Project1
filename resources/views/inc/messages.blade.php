<div class="container">
@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger">
        {{$error}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
      {{session('success')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </dv>
@endif
@if(session('error'))
  <div class="aler alert-danger">
    {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

</div>
