<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') SistemasUNI  </title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/main.css') }}">
    <script src="https://kit.fontawesome.com/22a95f274b.js" crossorigin="anonymous"></script>

</head>
<body>

	@yield('content')
	@yield('modales')
	<script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});
	</script>
	<script type="text/javascript">window.Beacon('init', 'e5dabda2-9534-434e-94ca-56120a3c5b1f')</script>
	<script type="text/javascript" src="{{ asset('resources/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('resources/js/bootstrap.min.js') }}"></script>
</body>
</html>
