@extends('partials.page')

@section('content')
  <section class="container">
    <h1 id="anchor-presentation">Cool facts about me</h1>

    <div class="row">
      <section class="card col-md-6">
        <article>
          <i class="fa fa-code"></i>
          <span class="title">I am a passionate software engineer.</span> I'm comfortable around and interested by distributed systems, API design, automated testing tools, machine learning algorithms, system administration and networking. I have been involved at different levels in a lot of sectors: Internet service provider, car rental, customer service, fraud detection, inspiring quotes for teenagers, gaming servers, equity crowdfunding, bioinformatics... Did I mention that I'm French?
        </article>
      </section>

      <section class="card col-md-6">
        <article>
          <i class="fa fa-book"></i>
          <span class="title">I love to learn.</span> I'm a data engineer at <a href="https://en.drivy.com/">Drivy</a>, the leading car rental platform in Europe. I studied at the <a href="http://asi.insa-rouen.fr">INSA Rouen</a> and the <a href="http://masterstim.formations.univ-rouen.fr">University of Rouen</a> with majors in software engineering, machine learning and data mining. I discover new things and keep me up-to-date by reading books and technical articles. I try to improve my skills in my free time with <a href="https://github.com/AntoineAugusti/katas">code katas</a> and by contributing to <a href="#anchor-open-source">open-source</a> projects. I also tried to wakeboard, but I'd rather not discuss that.
        </article>
      </section>
    </div>

    <h1>Teaching</h1>

    <div class="row">
      <section class="card col-md-6">
        <div class="media">
            <div class="media-left">
              <a href="http://asi.insa-rouen.fr">
                <img class="media-object teaching__logo" src="assets/images/insa-rouen.png" alt="INSA Rouen">
              </a>
            </div>
            <article class="media-body">
              I am giving some classes about NoSQL databases versus relational databases and practicals session in networking about packet switching, bridges, VLANs, DNS and DHCP to engineering students in their fourth year.
            </article>
          </div>
      </section>

      <section class="card col-md-6">
        <div class="media">
            <div class="media-left">
              <a href="https://openclassrooms.com">
                <img class="media-object teaching__logo" src="assets/images/openclassrooms.svg" alt="OpenClassrooms">
              </a>
            </div>
            <article class="media-body">
              I am mentoring online students in order to help them obtain certifications and diplomas. I help them learn the following technologies: HTML5, CSS3, PHP, relational databases, object oriented design, web server administration and basic networking.
            </article>
          </div>
      </section>

      <section class="card col-md-6">
        <div class="media">
            <div class="media-left">
              <a href="https://en.drivy.com">
                <img class="media-object teaching__logo drivy__logo" src="assets/images/drivy.png" alt="Drivy">
              </a>
            </div>
            <article class="media-body">
              I am helping non-technical employees discovering databases and learning some bits of SQL to help them get the data they need to answer questions. This is also an opportunity to show what are the various components behind a typical web application.
            </article>
          </div>
      </section>
    </div>

    <h1 id="anchor-projects">Personal projects</h1>

    <div class="row">
      <section class="card col-md-6">
        <article>
          {{ HTML::image("assets/images/teen-quotes.png", "Teen Quotes", ['id' => 'teen-quotes']) }}
          <p>
            <span class="title">Teen Quotes lets teenagers share their daily thoughts and feelings.</span> With more than 4M followers on Twitter and 2.5M visitors on the website since the beginning, Teen Quotes is quite popular.
          </p>
          <p>
            I'm the founder of the website. For this project, I implemented the responsive website and the API. The entire source code is available <a href="https://github.com/TeenQuotes">on GitHub</a>. I also moderate quotes so if you want to know what a 15 year-old teenager thinks, ask me!
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
            <span class="title">Quantic Télécom is an Internet Service Provider for students.</span> At the beginning in 2011, I took part of the implementation of our network in datacenters and residences by installing some servers and antennas. Today, Quantic Telecom is now an established company.
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
    <h1 id="anchor-open-source">Open source projects</h1>
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
          And many other projects I have used and where I have just sent 1 or 2 pull requests. Many thanks to all the amazing open source contributors and projects. I owe you.
        </p>
      </article>

    </section>

    <h1 id="anchor-blog">Latest articles</h1>
    <section class="card">
      <article>
        <p>
          I try to write an article every now and then. If I didn't write in the last month or so, I probably should have done so.
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
      Feel free to get in touch or find out more with these links.
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

  <!-- Music -->
  <section id="music" class="container hidden-xs hidden-sm">
    <h1>Music</h1>
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
