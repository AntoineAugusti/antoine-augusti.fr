<?php

use Illuminate\Support\Collection;

class HomeController extends BaseController {

    /**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $lastArticles = $this->getLastBlogArticles();
        $projects = $this->getProjects();
        $musicArtists = $this->getArtists();
        $email = LaraSetting::get('email');

        $data = compact('lastArticles', 'projects', 'musicArtists', 'email');

        return View::make('pages.home', $data);
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
