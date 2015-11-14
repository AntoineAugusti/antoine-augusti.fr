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
        $lastArticles = $this->getLastBlogArticles();
        $projects = $this->getProjects();
        $musicArtists = $this->getArtists();

        return View::make('pages.home', compact('lastArticles', 'projects', 'musicArtists'));
    }

    /**
     * Get the last 5 blog posts.
     *
     * @return array
     */
    private function getLastBlogArticles()
    {
        $feed = FeedReader::read('https://blog.antoine-augusti.fr/feed/');
        return $feed->get_items(0, 5);
    }

    /**
     * Get open source projects.
     *
     * @return Collection
     */
    private function getProjects()
    {
        return new Collection(LaraSetting::get('openSource.projects'));
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
