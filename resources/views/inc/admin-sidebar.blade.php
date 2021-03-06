<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title"><i class="fa fa-code"></i> <span>{{config('app.name')}}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="/admin"><i class="fa fa-home"></i> Home</span></a></li>
                  <li><a href="/admin/department"><i class="fa fa-graduation-cap"></i>Departments</span></a></li>

                  <li><a href="/admin/student"><i class="fa fa-user"></i>Students</span></a></li>
                  <li><a href="/admin/teacher"><i class="fa fa-user"></i>Teachers</span></a></li>
                  <li><a href="/admin/subject"><i class="fa fa-book"></i>Subjects</span></a></li>

                </ul>
                <h3>Admin</h3>
                <ul class="nav side-menu">
                    <li><a href="/admin/test"><i class="fa fa-code"></i>Test</span></a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            {{-- <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}" onclick="event.preventDefault();                              document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons --> --}}
          </div>
        </div>
