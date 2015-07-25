@extends('partials.page')

@section('content')
	<section class="container">
		<h1 id="anchor-presentation">Cool facts about me</h1>

		<div class="row">
			<section class="card col-md-6">
				<article>
					<i class="fa fa-code"></i>
					<span class="title">I'm a passionate web developer.</span> My favorite tools are Laravel, MySQL, Memcached and Nginx. I build REST APIs, <a href="//blog.antoine-augusti.fr">blog about what I have learned</a> and know how to use Git. I have build my first website 6 years ago so I'm very familiar with the web stack. I'm excited about scalable and distributed systems. I love to automate things. In a perfect world, code write itself and calls me when the tests are green.
				</article>
			</section>

			<section class="card col-md-6">
				<article>
					<i class="fa fa-book"></i>
					<span class="title">I love to learn.</span> I'm an engineering student, currently specializing in software engineering, machine learning and data mining. In my free time I take classes on Coursera to discover new things like functional programming, R programming or machine learning. Moreover I watch <a href="https://laracasts.com">Laracasts</a> episodes to improve my knowledge of Laravel. I also tried to wakeboard but you really don't want to know that.
				</article>
			</section>
		</div>

		<h1 id="anchor-projects">Projects</h1>

		<div class="row">
			<section class="card col-md-6">
				<article>
					{{ HTML::image("assets/images/teen-quotes.png", "Teen Quotes", ['id' => 'teen-quotes']) }}
					<p>
						<span class="title">Teen Quotes lets teenagers share their daily thoughts and feelings.</span> With more than 3M followers on Twitter and 2.5M visitors on the website, Teen Quotes is quite popular.
					</p>
					<p>
						I'm the lead developer and I have coded the responsive website and the API. The entire source code is available <a href="https://github.com/TeenQuotes">on GitHub</a>. I also moderate quotes so if you want to know what a 15 years old teenager thinks, ask me!
					</p>
					<div class="wow bounceInUp" data-wow-delay="1s">
						<a class="button" href="http://teen-quotes.com">&raquo; teen-quotes.com</a>
					</div>
				</article>
			</section>

			<section class="card col-md-6">
				<article>
					{{ HTML::image("assets/images/quantic-telecom.png", "Quantic Télécom", ['id' => 'quantic-telecom']) }}
					<p>
						<span class="title">Quantic Télécom is an Internet Service Provider for students.</span> Since the beginning in 2011 I took part of the implementation of our network in datacenters and residences by installing some servers and antennas.
					</p>
					<p>
						As part of a three-member team we developed a complete public website and some advanced administration tools: billing, support, statistics, security.
					</p>
					<div class="wow bounceInUp" data-wow-delay="1s">
						<a class="button" href="https://www.quantic-telecom.net">&raquo; www.quantic-telecom.net</a>
					</div>
				</article>
			</section>
		</div>

		<!-- Open source -->
		<h1>Open source projects</h1>
		<section class="card">
			<article>
				<p>
					In my free time I write and contribute to open source software. That's my way to say thank you to contributors around the world that are building the amazing tools I use everyday.
				</p>
			</article>

			@foreach ($projects as $project)
				@include('projects.singleProject')
			@endforeach

		</section>

		<h1 id="anchor-blog">Latest articles</h1>
		<section class="card">
			@foreach ($lastArticles as $article)
				@include('blog.singleArticle')
			@endforeach
		</section>

	</section>

	<section id="contact" class="container">
		<h1 id="anchor-contact">Get in touch</h1>
		<p class="text">
			So you want to do a little spying before contacting me? Here you are!
		</p>
		<div class="row">
			<div class="col-xs-6 col-sm-3" data-wow-delay="0.5s">
				<a href="https://twitter.com/AntoineAugusti"><i class="fa fa-twitter"></i></a>
				<a href="https://twitter.com/AntoineAugusti" class="username">@AntoineAugusti</a>
			</div>
			<div class="col-xs-6 col-sm-3" data-wow-delay="0.5s">
				<a href="https://github.com/AntoineAugusti"><i class="fa fa-github"></i></a>
				<a href="https://github.com/AntoineAugusti" class="username">AntoineAugusti</a>
			</div>
			<div class="col-xs-6 col-sm-3" data-wow-delay="0.5s">
				<a href="http://linkedin.com/in/antoineaugusti"><i class="fa fa-linkedin"></i></a>
				<a href="http://linkedin.com/in/antoineaugusti" class="username">antoineaugusti</a>
			</div>
			<div class="col-xs-6 col-sm-3" data-wow-delay="0.5s">
				<i class="fa fa-envelope"></i>
				<span class="username">antoine@augusti.fr</span>
			</div>
		</div>
	</section>

@stop
