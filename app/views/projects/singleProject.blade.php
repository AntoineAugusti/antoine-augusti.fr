<div class="col-md-6">
    <a href="{{ $project['url'] }}">
        <div class="open-source-item">
        	<span class="title">{{ $project['title'] }}</span>
            <div class="description">
                {{ $project['description'] }}
            </div>
            <div class="technologies">
                @foreach ($project['technologies'] as $tech)
                    <span class="technology badge">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
    </a>
</div>
