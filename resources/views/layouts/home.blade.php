<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #009688;
            padding: 25px;
            margin-top: 15px;
            color: #ffffff;
        }
        body {
            background-color: #f1f1f1;
        }
        #body {
            margin-top: 15px;
        }
        #left-column {
            padding-right: 0;
        }
        .portfolio-info {
            background-color: #ffffff;
            padding-top: 10px;
            font-size: 15px;
        }
        .portfolio-info .glyphicon {
            font-size: 15px;
            color: #009688;
            padding-right: 15px;
        }
        .portfolio-info .progress-bar {
            background-color: #009688;
        }
        .portfolio-content {
            background-color: #ffffff;
            padding-top: 10px;
        }
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
            background-color: #009688;
            border-color: #009688;
        }
        nav.navbar .container-fluid a:link, nav.navbar .container-fluid a:visited {
            color: #ffffff;
        }
        nav.navbar .container-fluid a:hover, nav.navbar .container-fluid a:active {
            color: #cccccc;
        }
    </style>
</head>
<body>


<div class="container-fluid" id="body">
    <div class="row">
        <div class="col-sm-3" id="left-column">
            <img src="/images/eu.png" class="img-responsive" style="width:100%" alt="Image">
            <div class="portfolio-info container col-sm-12">
                <p><span class="glyphicon glyphicon-user"></span> Gavrila Madalin</p>
                <p><span class="glyphicon glyphicon-briefcase"></span> Web Developer</p>
                <p><span class="glyphicon glyphicon-home"></span> Bucharest</p>
                <p><span class="glyphicon glyphicon-envelope"></span> madalin.gavrila13@yahoo.com</p>
                <p><span class="glyphicon glyphicon-earphone"></span> 0747854311</p>
                <hr />
                <p><span class="glyphicon glyphicon-asterisk"></span> <strong>Skills</strong></p>
                <p>HTML</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">90%</div>
                </div>
                <p>CSS</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">90%</div>
                </div>
                <p>PHP</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">90%</div>
                </div>
                <p>MySQL</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">90%</div>
                </div>
                <p>Laravel</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%">50%</div>
                </div>
                <p>GIT</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%">50%</div>
                </div>
                <p>JavaScript</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">30%</div>
                </div>
                <p>jQuery</p>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">30%</div>
                </div>
            </div>
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
                        <a class="navbar-brand" href="">Home</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href=""><span class="glyphicon glyphicon-user"></span> Register</a></li>
                            <li><a href=""><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

    <a href=""><span class="glyphicon glyphicon-print"></span></a>
    <a href=""><span class="glyphicon glyphicon-print"></span></a>
    <a href=""><span class="glyphicon glyphicon-print"></span></a>
    <a href=""><span class="glyphicon glyphicon-print"></span></a>

    <p>Madalin Gavrila</p>
</footer>

</body>
</html>