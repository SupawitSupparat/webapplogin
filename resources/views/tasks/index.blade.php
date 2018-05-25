@extends('layouts.app')
@section('content')

  <h1>Tasks</h1>
  <a href="/tasks/create" class="btn btn-default">Create task</a>
  @if(count($tasks) > 1)
    @foreach($tasks as $task)
      <div class = "well">
        <h3><a href="/tasks/{{$task->id}}">{{$task->title}}</h3>
        <p>Assigned at {{$task->created_at}}</p>
      </div>
    @endforeach
  @else
    <p>No tasks found</p>
  @endif
@endsection
