<li class="{{ (!empty($inverted) && $inverted) ? 'timeline-inverted' : '' }}">
    <div class="timeline-badge">
        <h4>{{ $number }}</h4>
    </div>
    <div class="timeline-panel">
        <div class="timeline-heading">
            <h5>{{ $title }}</h5>
        </div>
        <div class="timeline-body">
            <p>{{ $description }}</p>
        </div>
    </div>
</li>
