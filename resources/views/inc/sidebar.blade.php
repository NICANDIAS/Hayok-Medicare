{{-- <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs"> <strong class="font-bold">User</strong></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    Hayok-Medicare
                </div>
            </li>
            <li class="active">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bed"></i> <span class="nav-label">clinic</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#"></i> <span class="nav-label">Record Room</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level collapse">
                            <li><a href="{{url('/existingPatient')}}">Existing Patient</a></li>
                            <li><a href="{{url('/newPatient')}}">New patient</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav> --}}



<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                                </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                                </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="{{ url('/home')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                </li>
                @if (Auth::user()->cadre == 'Patient')
                    <li class="active">
                        <a href="{{ url('/patient') }}"><i class="fa fa-user"></i> <span class="nav-label">Details</span></a>
                    </li>
                @endif
                @if (Auth::user()->cadre == 'Doctor')
                    <li class="active">
                        <a href="{{ url('/newPatient') }}"><i class="fa fa-user"></i> <span class="nav-label">New Patient</span></a>
                    </li>
                    <li class="active">
                        <a href="{{ url('/existingPatient') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Existing Patient</span></a>
                    </li>
                    <li class="active">
                        <a href="{{ url('/doctorOffice') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Doctor office</span></a>
                    </li>
                    <li class="active">
                        <a href="{{ url('/managePatient') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Manage Patient</span></a>
                    </li>
                    <li class="active">
                        <a href="{{ url('/Message') }}"><i class="fa fa-inbox"></i> <span class="nav-label">Chat with a Doctor</span></a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>