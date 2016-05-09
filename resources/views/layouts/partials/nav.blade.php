<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>

      <!-- Branding Image -->
      <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{asset('images/logo.gif')}}" alt="EMR" height="45" weight="45" class="hidden-xs">
          <img src="{{asset('images/logo.gif')}}" alt="EMR" height="45" weight="45" class="visible-xs">
      </a>
     </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
            
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">

            @if(Auth::guest())
                <!-- Authentication Links -->
                <li><a href="{{ url('/login') }}">Login</a></li>
            @else       
                @can('create-user')
                <li><a href="{{ url('users/register') }}">Register</a></li>
                @endcan

                <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                      <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                      </ul>
                </li>
               @endif
            </ul>
            
            </div>
  </div>
</nav>