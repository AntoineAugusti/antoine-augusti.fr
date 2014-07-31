@extends('partials.page')

@section('content')
	<section id="intro">
		{{ HTML::image("assets/images/me.jpg", "Antoine Augusti", ['class' => 'animated fadeInDown', 'height' => 160, 'width' => 160])}}
		<h1 class="fadeInUp animated animate-delay">Hello World, I'm Antoine Augusti</h1>
	</section>

	<section class="container">
		<h1>Cool facts about me</h1>

		<div class="row">
			<section class="card wow col-md-6 animated slideInLeft">
				<article>
					<i class="fa fa-code"></i>
					<span class="title">I'm a passionate web developer.</span> My favorite tools are Laravel, MySQL, Redis and Nginx. I build REST APIs, <a href="//blog.antoine-augusti.fr">blog about what I have learned</a> and know how to use Git. I have build my first website 6 years ago so I'm very familiar with the web stack. In a perfect world, code write itself and calls me when the tests are green.
				</article>
			</section>

			<section class="card wow col-md-6 animated slideInRight">
				<article>
					<i class="fa fa-book"></i>
					<span class="title">I love to learn.</span> I'm an engineering student, currently specializing in software engineering and data mining. In my free time I take classes on Coursera to discover new things like functional programming or machine learning. I also tried to wakeboard but you really don't want to know that.
				</article>
			</section>
		</div>

		<h1>Projects</h1>

		<div class="row">
			<section class="card wow col-md-6 animated slideInLeft">
				<article>
					{{ HTML::image("assets/images/teen-quotes.png", "Teen Quotes", ['id' => 'teen-quotes']) }}
					<p>
						<span class="title">Teen Quotes lets teenagers share their daily thoughts and feelings.</span> With more than 3M followers on Twitter and 2.5M visitors on the website, Teen Quotes is quite popular.
					</p>
					<p>
						I'm the lead developer and I have coded the responsive website and the API. The entire source code is available <a href="https://github.com/TeenQuotes">on GitHub</a>. I also moderate quotes so if you want to know what a 15 years old teenager thinks, ask me!
					</p>
					<div class="wow animated bounceInUp" data-wow-delay="1s">
						<a class="button" href="http://teen-quotes.com">&raquo; teen-quotes.com</a>
					</div>
				</article>
			</section>

			<section class="card wow col-md-6 animated slideInRight">
				<article>
					{{ HTML::image("assets/images/quantic-telecom.png", "Quantic Télécom", ['id' => 'quantic-telecom']) }}
					<p>
						<span class="title">Quantic Télécom is an Internet Service Provider for students.</span> Since the beginning in 2011 I took part of the implementation of our network in datacenters and residences by installing some servers and antennas.
					</p>
					<p>
						As part of a three-member team we developed a complete public website and some advanced administration tools: billing, support, statistics, security.
					</p>
					<div class="wow animated bounceInUp" data-wow-delay="1s">
						<a class="button" href="https://www.quantic-telecom.net">&raquo; www.quantic-telecom.net</a>
					</div>
				</article>
			</section>
		</div>
	</section>
	
@stop