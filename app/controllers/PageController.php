<?php

class PageController extends BaseController {

	public function home()
	{
		
		// Retrieve last blog posts
		$feed = FeedReader::read('http://blog.antoine-augusti.fr/feed/');
		$lastArticles = $feed->get_items(0, 5);

		return View::make('pages.home', compact('lastArticles'));
	}
}
