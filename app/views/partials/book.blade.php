<div class="col-md-3">
    <div class="thumbnail book__thumbnail">
        <div class="book__cover_container">
            <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" class="img-responsive">
        </div>
        <div class="caption">
            <h3 class="book__title">{{ $book->title }}</h3>
            <div class="book_status-container">
                @if ($book->isCurrentlyReading())
                    <div class="reading-status reading">Reading</div>
                @else
                    <div class="reading-status read">Read</div>
                @endif
            </div>
            <span class="book__when-read">
            @if (!$book->isCurrentlyReading())
                {{ $book->when->diffForHumans() }}
            @else
                currently reading
            @endif
            </span>
        </div>
    </div>
</div>
