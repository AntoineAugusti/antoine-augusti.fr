<?php

use Illuminate\Support\Collection;

class PageController extends BaseController {

	/**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function home()
	{
		// Retrieve last blog posts
		$feed = FeedReader::read('http://blog.antoine-augusti.fr/feed/');
		$lastArticles = $feed->get_items(0, 5);

		// Get open source projects
        $projects = new Collection(LaraSetting::get('openSource.projects'));
        $musicArtists = $this->getArtists();

		return View::make('pages.home', compact('lastArticles', 'projects', 'musicArtists'));
	}

    /**
     * Get music artists.
     *
     * @return Collection
     */
    private function getArtists()
    {
        $musicArtists = new Collection(LaraSetting::get('music.artists'));
        return $musicArtists->shuffle()->take(8);
    }
}
