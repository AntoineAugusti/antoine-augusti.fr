@extends('partials.page')

@section('content')
	<section class="container">
		<h1 id="anchor-presentation">Cool facts about me</h1>

		<div class="row">
			<section class="card col-md-6">
				<article>
					<i class="fa fa-code"></i>
					<span class="title">I'm a passionate software engineer.</span> I'm comfortable around and interested by distributed systems, REST APIs, automated testing tools, machine learning algorithms, system administration and networking. I have been involved at different levels in a lot of sectors: Internet service provider, customer service, fraud detection, inspiring quotes for teenagers, gaming servers, car rental, equity crowdfunding, bioinformatics... Did I mention that I'm French?
				</article>
			</section>

			<section class="card col-md-6">
				<article>
					<i class="fa fa-book"></i>
					<span class="title">I love to learn.</span> I'm a data engineer at <a href="https://en.drivy.com/">Drivy</a>, the leading car rental platform in Europe. I studied at the <a href="http://asi.insa-rouen.fr">INSA Rouen</a> and the <a href="http://masterstim.formations.univ-rouen.fr/">University of Rouen</a> with majors in software engineering, machine learning and data mining. In my free time I take classes on Coursera to discover new things. I try to keep my brain busy in my free time with <a href="https://github.com/AntoineAugusti/katas">code katas</a> and read a lot of technical books or articles. I also tried to wakeboard but you really don't want to know that.
				</article>
			</section>
		</div>

		<h1 id="anchor-projects">Personal projects</h1>

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
						<span class="title">Quantic Télécom is an Internet Service Provider for students.</span> Since the beginning in 2011, I took part of the implementation of our network in datacenters and residences by installing some servers and antennas.
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

			@foreach ($projects->chunk(2) as $projectsRow)
				<div class="row project-row">
					@foreach ($projectsRow as $project)
					@include('projects.singleProject')
					@endforeach
				</div>
			@endforeach

			<article>
				<p>
					And countless other projects I have used and where I have just sent 1 or 2 pull requests. Many thanks to all the amazing open source contributors and projects. I owe you.
				</p>
			</article>

		</section>

		<h1 id="anchor-blog">Latest articles</h1>
		<section class="card">
			<article>
				<p>
					I try to write an article every month or so.
					If I don't respect this, it means that I'm usually busy with an interesting project, worth a blog post at the end of the day.
				</p>
			</article>
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
				<span class="username">{{ $email }}</span>
			</div>
		</div>
	</section>

	<!-- Books -->
	<section id="books" class="container hidden-xs hidden-sm">
		<h1>Books I've read</h1>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				@foreach ($booksCol->chunk(4) as $books)
					<div class="row">
						@foreach ($books as $book)
							@include('partials.book', compact('book'))
						@endforeach
					</div>
				@endforeach
			</div>
		</div>
	</section>

	<!-- Music -->
	<section id="music" class="container hidden-xs hidden-sm">
		<h1>Music I listen to</h1>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				@foreach ($musicArtists->chunk(4) as $artists)
					<div class="row">
						@foreach ($artists as $musicArtist)
							@include('partials.music-artist', compact('musicArtist'))
						@endforeach
					</div>
				@endforeach
			</div>
		</div>
	</section>

@stop
