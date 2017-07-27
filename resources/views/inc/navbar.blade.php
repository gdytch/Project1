@if(Auth::user())
    <div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                 <img src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" alt=""> {{Auth::user()->last_name}}
                 <span class=" fa fa-angle-down"></span>
               </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li>
                            @if(Auth::guard('admin')->check())
                                <a href="#">Profile</a>
                            @elseif (Auth::guard('web')->check())
                                <a href="{{route('student.profile')}}">Profile</a>
                            @elseif (Auth::guard('teacher')->check())
                                <a href="#">Profile</a>
                            @endif
                        </li>
                        <li>
                            <a href="javascript:;">
                     <span class="badge bg-red pull-right">50%</span>
                     <span>Settings</span>
                   </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li>
                        <li><a href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i>
                                 Logout
                             </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </li>


            </ul>

        </nav>
    </div>
</div>
    @endif

{{--
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
                          {{ config('app.name', 'Laravel') }}
                      </a>
        </div>
        <ul class="nav navbar-nav navbar-left">
            <li><a href="/about">About</a></li>

        </ul>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::user())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                              Logout
                                          </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav> --}}
