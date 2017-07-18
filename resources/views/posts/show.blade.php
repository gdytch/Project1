@extends('layouts.app')

@section('content')
  <div class="container">
  <a href="/posts" class="btn btn-sm btn-default">Back</a>
  @if (count($posts) >0)
    <h1>{{$posts->title}}</h1>
    <p>{{$posts->body}}</p>
    <hr />
    <small>Created: {{$posts->created_at}}</small>
  @else
    <p>no posts found</p>
  @endif
</div>
@endsection
