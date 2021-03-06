<nav class="navbar navbar-inverse navbar-expand-lg">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#">Beth's Website</a>
    </div>

    <div id="navbar" class="navbar-inverse navbar-toggleable">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
        <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
        <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
      </ul>
    </div>

    <div class="auth">
      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @guest
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endguest
      </ul>
    </div>
  </div>
</nav>
