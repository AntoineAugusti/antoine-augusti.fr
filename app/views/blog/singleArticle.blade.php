<article>
	- <a href="{{ $article->get_permalink() }}">{{ $article->get_title() }}</a><span class="date">{{ Carbon::createFromTimeStamp($article->get_date('U'))->diffForHumans() }}</span>
	<div class="clearfix"></div>
</article>