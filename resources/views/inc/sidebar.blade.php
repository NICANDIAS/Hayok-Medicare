<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span>
                        <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                    </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong></span>
                            @if(Auth::user()->user_access_id == '1')
                                <span class="text-muted text-xs block">{{"Normal Staff"}}<b class="caret"></b></span>
                            @elseif (Auth::user()->user_access_id == '2')
                                <span class="text-muted text-xs block">{{"HOD"}}<b class="caret"></b></span>
                            @elseif (Auth::user()->user_access_id == '3')
                                <span class="text-muted text-xs block">{{"PROVOST"}}<b class="caret"></b></span>
                            @elseif (Auth::user()->user_access_id == '4')
                                <span class="text-muted text-xs block">{{"REGISTRY"}}<b class="caret"></b></span>
                            @elseif (Auth::user()->user_access_id == '5')
                                <span class="text-muted text-xs block">{{"SUPER ADMIN"}}<b class="caret"></b></span>
                            @endif
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    KWASU
                </div>
            </li>
            <li class="active">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Leave</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    @if (in_array(Auth::user()->user_access_id, array('1','2','3','5')))
                        <li><a href="{{url('/application')}}">Application</a></li>
                    @endif

                    @if (in_array(Auth::user()->user_access_id, array('2','3','5')))
                        <li><a href="{{url('/applied')}}">Applied</a></li>
                    @endif

                    @if (in_array(Auth::user()->user_access_id, array('4','5')))
                        <li><a href="{{url('/search')}}">Search</a></li>
                        <li><a href="{{url('/allLeave')}}">All Leave</a></li>
                        <li><a href="{{url('/approved')}}">Approved</a></li>
                    @endif

                    @if (Auth::user()->user_access_id == 5)
                        <li><a href="{{url('/leaveDepartment')}}">Leave Department</a></li>
                        <li><a href="{{url('/leaveType')}}">Leave Type</a></li>
                    @endif
                </ul>
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
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">kbikes</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{url('/student')}}">student</a></li>
                    <li><a href="{{url('/admin')}}">Admin</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>