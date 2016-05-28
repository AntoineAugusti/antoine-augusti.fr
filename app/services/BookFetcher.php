<?php

use AntoineAugusti\Books\Fetcher;
use Illuminate\Cache\Repository as Cache;

class BookFetcher {

    private $fetcher;
    private $cache;

    public function __construct(Fetcher $fetcher, Cache $cache)
    {
        $this->fetcher = $fetcher;
        $this->cache = $cache;
    }

    public function forISBN($isbn)
    {
        return $this->cache->remember('books:'.$isbn, 10, function() use ($isbn) {
            return $this->fetcher->forISBN($isbn);
        });
    }
}
