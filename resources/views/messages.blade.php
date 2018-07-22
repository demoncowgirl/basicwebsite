@extends('layouts.app')

<!-- places this content in the point in app.blade.php where the @yield('content') was placed. -->
@section('content')
<h1>Messages</h1>
  @if(count($messages) > 0)
    @foreach($messages as $message)
      <ul class="list-group">
        <li class="list-group-item">Name: {{$message->name}}</li>
        <li class="list-group-item">Email: {{$message->email}}</li>
        <li class="list-group-item">Message: {{$message->message}}</li>
      </ul>

    @endforeach
  @endif
@endsection

@section('sidebar')
  <!-- this insures that the parent is visible, too -->
  @parent
  <!-- added to the sidebar template from current page -->
  <p>This is appended to the sidebar.</p>
@endsection
