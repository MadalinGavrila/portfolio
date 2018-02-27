<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/libs-admin.css')}}">

    @yield('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">Portfolio</a>
        </div>

        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{Auth::user()->username}} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                    </li>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </li>
        </ul>

        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="{{route('admin')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('admin.users.index')}}"><i class="fas fa-users"></i> Users</a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#skills-link"><i class="fas fa-code"></i> Skills <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="skills-link" class="collapse">
                        <li>
                            <a href="{{route('admin.skills.index')}}">All Skills</a>
                        </li>
                        <li>
                            <a href="{{route('admin.skills.create')}}">Create Skill</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#projects-link"><i class="fas fa-briefcase"></i> Projects <i class="fa fa-fw fa-caret-down"></i></a>
                    <ul id="projects-link" class="collapse">
                        <li>
                            <a href="{{route('admin.projects.index')}}">All Projects</a>
                        </li>
                        <li>
                            <a href="{{route('admin.projects.create')}}">Create Project</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href=""><i class="fas fa-images"></i></i> Photos</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                    @yield('content')

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>

    <!-- JS -->
    <script src="{{asset('js/libs.js')}}"></script>

    @yield('scripts')

</body>
</html>