<div class="col-md-3">
    <div class="thumbnail book__thumbnail">
        <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" clas="img-responsive">
        <div class="caption">
            <h3 class="book__title">{{ $book->title }}</h3>
            <div class="book_status-container">
                @if ($book->isCurrentlyReading())
                    <div class="reading-status reading">Reading</div>
                @else
                    <div class="reading-status read">Read</div>
                @endif
            </div>
            @if (!$book->isCurrentlyReading())
                <span class="book__when-read">{{ $book->when->diffForHumans() }}</span>
            @endif
        </div>
    </div>
</div>
