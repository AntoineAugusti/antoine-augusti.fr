<div class="col-md-3">
    <div class="thumbnail">
    <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}" clas="img-responsive">
        <div class="caption">
            <h3 class="book__title">{{ $book->title }}</h3>
            <span class="book__when-read">{{ $book->when->diffForHumans() }}</span>
        </div>
    </div>
</div>
