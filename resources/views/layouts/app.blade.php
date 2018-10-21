<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>CISNET</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/css/demo.css" rel="stylesheet" />
    <link href="/css/creative.min.css" rel="stylesheet">


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="/js/jquery.3.2.1.min.js" type="text/javascript"></script>
</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="dev.jpg">
    
        <!--
    
            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag
    
        -->
    
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        <span style="font-size:40px;font-family:fantasy" class="btn btn-neutral btn-lg btn-round btn-fill"><span style="color:blue;">C I S </span><span style="color:red">N E T</span></span>
                    </a>
                </div>
    
                <ul class="nav">
                        @if(Route::currentRouteName() == 'Dashboard')
                        <li class="active">
                            @else
                        <li>
                        @endif
                        <a href="/dashboard">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    
                    @if(Route::currentRouteName() == 'Courses')
                    <li class="active">
                        @else
                    <li>
                    @endif
                        <a href="/courses">
                            <i class="pe-7s-note2"></i>
                            <p>Courses</p>
                        </a>
                    </li>
                    @if(Route::currentRouteName() == 'Network & Security Expo Team')
                    <li class="active">
                        @else
                    <li>
                    @endif
                        <a href="/team">
                            <i class="pe-7s-network"></i>
                            <p>N & S Expo Team(2018)</p>
                        </a>
                    </li>
                   
                        @if(Route::currentRouteName() == 'instructor')
                        <li class="active">
                            @else
                        <li>
                        @endif
                                <a href="/instructor">
                                    <i class="pe-7s-user"></i>
                                    <p>Instructor</p>
                                </a>
                            </li>
                            @if(Route::currentRouteName() == 'about')
                            <li class="active">
                                @else
                            <li>
                            @endif
                                    <a href="/instructor">
                                        <i class="pe-7s-user"></i>
                                        <p>About</p>
                                    </a>
                                </li>
                    @if(Route::currentRouteName() == 'Download')
                <li class="active">
                    @else
                <li>
                @endif
                        <a href="/download">
                            <i class="pe-7s-download"></i>
                            <p>Free DOWNLOADs</p>
                        </a>
                    </li>
                  
                </ul>
            </div>
        </div>
    
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <a class="navbar-brand" href="#">{{Route::currentRouteName()}}</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        
    
                        <ul class="nav navbar-nav navbar-right">
                           @if(Route::has('login'))
                           @auth
                            <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <p>
                                            {{Auth::user()->name}}
                                            <b class="caret"></b>
                                        </p>
    
                                  </a>
                                  <ul class="dropdown-menu">
                                  
                                    <li class="divider"></li>
                                    <li><a href="/logout">Logout</a></li>
                                  </ul>
                            </li>
                            @else
                            <li>
                            <a href="{{route('login')}}">
                                    <p>Login</p>
                                </a>
                            </li>
                            <li>
                            <a href="{{route('register')}}">
                                        <p>Register</p>
                                    </a>
                                </li>
                            @endauth
                            @endif
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>
    
    
            
    @yield('content')
    
          
    
    </body>
    
        <!--   Core JS Files   -->
      
        <script src="/js/bootstrap.min.js" type="text/javascript"></script>
      
        <!--  Charts Plugin -->
         
        
        <!--  Notifications Plugin    -->
        <script src="/js/bootstrap-notify.js"></script>
    
        <!--  Google Maps Plugin    -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    
        <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
        <script src="/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    
        <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
        <script src="/js/demo.js"></script>
     
       
    
    </html>
    