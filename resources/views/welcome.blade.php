<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>CISNET - All over IP</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="/css/demo.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/google/code-prettify/master/loader/prettify.css">
    <link href="css/documentation.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel|Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body>



<div class="header-wrapper">
      

        <div class="header" style="background-image: url('dev.jpg');
">
            <div class="filter"></div>
            <div class="title-container text-center">
                    <h1 style="font-size:200px;font-family:fantasy;background-color:rgba(202, 197, 197,0.5);border-style: none" class="btn btn-neutral btn-lg btn-round btn-fill"><span style="color:blue;">C I S </span><span style="color:red">N E T</span></h1>
                    <h4 class="description text-center" style="font-style:italic;text-transform:uppercase;"><b>Teach &nbsp;&nbsp;  Learn &nbsp;&nbsp; Practice &nbsp;&nbsp; Test &nbsp;&nbsp; Implement &nbsp;&nbsp; Consistent</b></h4>
                    @if(Route::has('login'))
                    @auth
                    <a href="/dashboard" class="btn btn-neutral btn-lg btn-round btn-fill" >Enter CISNET</a>
                    @else
            <a href="{{route('login')}}" class="btn btn-neutral btn-lg btn-round btn-fill" >Login</a>
                    <a href="{{route('register')}}" class="btn btn-neutral btn-lg btn-round btn-fill" >Register</a>
                    @endauth
                    @endif
            </div>
        </div>
</div>




<footer class="footer footer-demo">
	<div class="container">
		<nav class="pull-left">
			<ul>
				<li>
					<a href="http://www.creative-tim.com/product/light-bootstrap-dashboard">
						Light Bootstrap Dashboard
					</a>
				</li>
				<li>
					<a href="http://www.creative-tim.com">
						Creative Tim
					</a>
				</li>
				<li>
					<a href="http://blog.creative-tim.com">
					   Blog
					</a>
				</li>
			</ul>
		</nav>
		<div class="social-area pull-right">
			<a class="btn btn-social btn-twitter btn-simple" href="https://twitter.com/CreativeTim">
				<i class="fa fa-twitter"></i>
			</a>
			<a class="btn btn-social btn-facebook btn-simple" href="https://www.facebook.com/CreativeTim">
				<i class="fa fa-facebook-square"></i>
			</a>
			<a class="btn btn-social btn-google btn-simple" href="https://plus.google.com/+CreativetimPage">
				<i class="fa fa-google-plus"></i>
			</a>
		</div>
		<div class="copyright">
			&copy; <script>document.write(new Date().getFullYear())</script> Creative Tim, made with love
		</div>
	</div>
</footer>
</body>
	<!--   Core JS Files   -->
	<script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

	<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="/js/demo.js"></script>
</html>
