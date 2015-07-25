<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $pageTitle or 'Antoine Augusti' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Antoine Augusti, software engineering, machine learning, distributed systems." />

	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
	<link media="all" type="text/css" rel="stylesheet" href="/assets/css/styles.min.css">
	<link rel="shortcut icon" href="/assets/images/favicon.jpg"/>

	<link href="https://plus.google.com/+AntoineAugusti" rel="author" />

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-12045924-3', 'auto');
		ga('send', 'pageview');
	</script>

	<header>
		<nav class="animated animate-delay-big bounceInDown">
			<a href="#anchor-presentation">About me</a>
			<a href="#anchor-projects">Projects</a>
			<a href="#anchor-contact">Contact me</a>
		</nav>
		{{ HTML::image("assets/images/me.jpg", "Antoine Augusti", ['height' => 160, 'width' => 160])}}
		<h1 class="fadeInUp animated animate-delay">Hello World, I'm Antoine Augusti</h1>
	</header>
