@extends('layouts.app')

@section('content')
<h1>Contact</h1>
<!-- opening tag for Collective form -->
{!! Form::open(['url' => 'contact/submit']) !!}
  <!-- using bootstrap here -->
  <div class="form-group">
    <!-- php can be used here as follows
    echo Form::label('name', 'E-Mail Address'); -->
    {{Form::label('name', 'Name')}}
    <!-- second parameter '' is a value -->
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
  </div>
  <div class="form-group">
    {{Form::label('email', 'E-Mail Address')}}
    {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email'])}}
  </div>
  <div class="form-group">
    {{Form::label('message', 'Message')}}
    {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message here'])}}
  </div>
  <div>
    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
  </div>
<!-- closing tag for Collective form -->
{!! Form::close() !!}

@endsection
