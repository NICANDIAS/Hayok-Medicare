<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                                </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong>
                                </span> <span class="text-muted text-xs block">{{Auth::user()->cadre}}<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="{{ url('/home')}}"><i class="fa fa-th-large"></i><span class="nav-label"> Dashboards </span></a>
                </li>
                @if (Auth::user()->cadre == 'Patient')
                    <li class="active">
                        <a href="{{ url('/patient') }}"><i class="fa fa-user"></i> <span class="nav-label">Details</span></a>
                    </li>
                    <li class="active">
                        <a href="{{ url('/Message') }}"><i class="fa fa-inbox"></i> <span class="nav-label">Chat with a Doctor</span></a>
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
                        <a href="{{ url('/Message') }}"><i class="fa fa-inbox"></i> <span class="nav-label">Chat with a Patient</span></a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
</div>