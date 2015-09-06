<?php

$class = '';
// Extra height if we have several technologies
if (count($project['technologies']) > 3) {
    $class = 'extra-height';
}
?>
<div class="col-md-6">
    <a href="{{ $project['url'] }}">
        <div class="open-source-item {{ $class }}">
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
