<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio Madalin Gavrila">
    <meta name="author" content="Madalin Gavrila">

    <title>@yield('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/libs.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    @yield('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div class="container-fluid" id="body">
        <div class="row">
            <div class="col-sm-3" id="left-column">
                @if($user)
                    <img src="{{$user->photo ? $user->photo->file : $user->photoPlaceholder()}}" class="img-responsive portfolio-photo" alt="Image">
                    <div class="portfolio-info container col-sm-12">
                        <p><span class="glyphicon glyphicon-user"></span> {{$user->name}}</p>
                        <p><span class="glyphicon glyphicon-briefcase"></span> {{$user->job ? $user->job : 'No Job'}}</p>
                        <p><span class="glyphicon glyphicon-home"></span> {{$user->address ? $user->address : 'No Address'}}</p>
                        <p><span class="glyphicon glyphicon-envelope"></span> {{$user->email}}</p>
                        <p><span class="glyphicon glyphicon-earphone"></span> {{$user->phone ? $user->phone : 'No Phone'}}</p>
                        <hr />
                        <p><span class="glyphicon glyphicon-asterisk"></span> <strong>Skills</strong></p>
                        @foreach($user->skills as $skill)
                            <p>{{$skill->name}}</p>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{$skill->progress}}%">{{$skill->progress}}%</div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <h3 class="text-center">No Info</h3>
                @endif
            </div>
            <div class="col-sm-9">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{route('home')}}">Home</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav">
                                <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="{{route('home.contact')}}">Contact</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                @guest
                                    <li class="{{Request::is('register') ? 'active' : ''}}"><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                                    <li class="{{Request::is('login') ? 'active' : ''}}"><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                @else

                                    @if(Auth::user()->role->name == 'admin')
                                        <li><a href="{{route('admin')}}"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->username}}</a></li>
                                    @endif

                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="portfolio-content container col-sm-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid text-center">
        <p>Contact me on social media</p>

        <a href="https://www.facebook.com/madalin.gavrila13" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.linkedin.com/in/madalin-gavrila" target="_blank"><i class="fab fa-linkedin"></i></a>

        <p>Madalin Gavrila</p>
    </footer>

    <!-- JS -->
    <script src="{{asset('js/libs.js')}}"></script>

    @yield('scripts')
</body>
</html>