<?php

class PageController extends BaseController {

	public function home()
	{
		
		// Retrieve last blog posts
		$feed = FeedReader::read('http://blog.antoine-augusti.fr/feed/');
		$lastArticles = $feed->get_items(0, 5);

		// Get open source projects
		$projects = LaraSetting::get('openSource.projects');

		$data = [
			'lastArticles' => $lastArticles,
			'projects'     => $projects,
		];

		return View::make('pages.home', $data);
	}
}
