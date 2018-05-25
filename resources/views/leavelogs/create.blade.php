@extends('layouts.app')
@section('content')

  <h1>Create Task</h1>
  {!! Form::open(['action'=>'TasksController@store','method'=>'POST'])!!}
    <div class = "from-group">
      {{Form::label('title','Title')}}
      {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>

    <div class = "from-group">
      {{Form::label('task','Task')}}
      {{Form::textarea('task','',['class'=>'form-control','placeholder'=>'Task'])}}
    </div>

    <div class = "from-group">
      {{Form::label('subordinate','Assign to')}}
      {{Form::text('subordinate','',['class'=>'form-control','placeholder'=>'Assign to'])}}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
  <a href="/tasks" class="btn btn-default">Go back</a>
@endsection
