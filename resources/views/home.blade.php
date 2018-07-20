@extends('layouts.app')

<!-- places this content in the point in app.blade.php where the @yield('content') was placed. -->
@section('content')
<h1>Home</h1>
@endsection

@section('sidebar')
  <!-- this insures that the parent is visible, too -->
  @parent
  <!-- added to the sidebar template from current page -->
  <p>This is appended to the sidebar.</p>
@endsection
