@extends('layouts.app')
@section('content')

  <h1>Leave log</h1>
  <a href="/leavelogs/create" class="btn btn-default">Create leave permissions</a>
  @if(count($leavelogs) > 0)
    @foreach($leavelogs as $leavelog)
      <div class = "well">
        <h3><a href="/leavelogs/{{$leavelog->id}}">{{$leavelog->reason}}</h3>
        <p>Assigned at {{$leavelog->created_at}}</p>
      </div>
    @endforeach
  @else
    <p>No logs found</p>
  @endif
@endsection
