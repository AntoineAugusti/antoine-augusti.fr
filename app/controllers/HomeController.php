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
        $personal_feed = FeedReader::read('https://blog.antoine-augusti.fr/feed/');
        $drivy_feed = FeedReader::read('https://drivy.engineering/feed.xml');

        $merged = new Collection(SimplePie::merge_items([$personal_feed, $drivy_feed]));

        return $merged->filter(function($e) {
            $author = $e->get_author();
            return !is_null($author) && $author->get_name() == 'Antoine Augusti';
        })->take(10);
    }

    /**
     * Get open source projects.
     *
     * @return Collection
     */
    private function getProjects()
    {
        $projects = new Collection(LaraSetting::get('openSource.projects'));
        return $projects->shuffle();
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
