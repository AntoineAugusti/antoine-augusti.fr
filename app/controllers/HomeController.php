<?php

use Illuminate\Support\Collection;

class HomeController extends BaseController {

    private $fetcher;

    public function __construct(BookFetcher $fetcher)
    {
        $this->fetcher = $fetcher;
    }

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
        $booksCol = $this->getBooks();
        $email = LaraSetting::get('email');

        $data = compact('lastArticles', 'projects', 'musicArtists', 'email', 'booksCol');

        return View::make('pages.home', $data);
    }

    private function getBooks()
    {
        return (new Collection(LaraSetting::get('books')))
        ->take(4)->map(function($book) {
            $bookTransformed = $this->fetcher->forISBN($book['isbn']);
            $bookTransformed->thumbnail = str_replace('http://', 'https://', $bookTransformed->thumbnail);
            $when = new Carbon($book['when']);

            return new Book($bookTransformed, $book['status'], $book['isbn'], $when);
        });
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
