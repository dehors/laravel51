<html>
    <head>
        <title>@yield('title')</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cinema Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    </head>
    <body>
        @section('sidebar')
           	<div class="menu">
				<ul>
					<li><a class="" href="{!!URL::to('/')!!}"><i class="home"></i></a></li>
					<li><a class="" href="{!!URL::to('reviews')!!}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a class="" href="{!!URL::to('contacto')!!}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
					<li><a class="" href="{!!URL::to('admin')!!}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
        @show
         @yield('content')
       
    </body>
</html>