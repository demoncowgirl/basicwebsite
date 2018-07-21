@extends('layouts.app')

<!-- places this content in the point in app.blade.php where the @yield('content') was placed. -->
@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endsection

@section('sidebar')
  <!-- this insures that the parent is visible, too -->
  @parent
  <!-- added to the sidebar template from current page -->
  <p>This is appended to the sidebar.</p>
@endsection
