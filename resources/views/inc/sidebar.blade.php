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
                    <ul class="nav nav-second-level collapse">
                        <li><a href="index.html">Dashboard v.1</a></li>
                        <li><a href="dashboard_2.html">Dashboard v.2</a></li>
                        <li><a href="dashboard_3.html">Dashboard v.3</a></li>
                        <li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
                        <li><a href="dashboard_5.html">Dashboard v.5 </a></li>
                    </ul>
                </li>
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
                    <a href="{{ url('/doctorRemark') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Doctor Remark</span></a>
                </li>
                <li class="active">
                    <a href="{{ url('/managePatient') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Manage Patient</span></a>
                </li>
                <li class="active">
                    <a href="{{ url('/patientHistory') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Patient History</span></a>
                </li>
                <li class="active">
                    <a href="{{ url('/Message') }}"><i class="fa fa-inbox"></i> <span class="nav-label">Chat with a Doctor</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Graphs</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">Flot Charts</a></li>
                        <li><a href="graph_morris.html">Morris.js Charts</a></li>
                        <li><a href="graph_rickshaw.html">Rickshaw Charts</a></li>
                        <li><a href="graph_chartjs.html">Chart.js</a></li>
                        <li><a href="graph_chartist.html">Chartist</a></li>
                        <li><a href="c3.html">c3 charts</a></li>
                        <li><a href="graph_peity.html">Peity Charts</a></li>
                        <li><a href="graph_sparkline.html">Sparkline Charts</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>