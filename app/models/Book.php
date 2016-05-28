<?php

use AntoineAugusti\Books\Book as OriginalBook;

class Book {
    public $status;
    public $isbn;
    public $when;
    private $book;

    public function __construct(OriginalBook $book, $status, $isbn, Carbon $when)
    {
        $this->book = $book;
        $this->status = $status;
        $this->isbn = $isbn;
        $this->when = $when;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        if (property_exists($this->book, $name)) {
            return $this->book->$name;
        }

        return null;
    }
}
