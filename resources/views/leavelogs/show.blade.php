@extends('layouts.app')
@section('content')
  <a href="/leavelog" class="btn btn-default">Go back</a>
  <h1>{{$task->title}}</h1>

  <div>
    {{$task-> task}}
  </div>
  <p>Assigned to {{$task->subordinate}}</p>
  <hr>
  <small>Assigned at {{$task->created_at}}</small>
@endsection
