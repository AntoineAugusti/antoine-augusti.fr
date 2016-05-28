<?php

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;
use AntoineAugusti\Books\Fetcher;

class BookFetcherServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind(BookFetcher::class, function()
        {
            $client = new Client(['base_uri' => 'https://www.googleapis.com/books/v1/']);
            $fetcher = new Fetcher($client);

            return new BookFetcher($fetcher, App::make(Illuminate\Cache\Repository::class));
        });
    }
}
