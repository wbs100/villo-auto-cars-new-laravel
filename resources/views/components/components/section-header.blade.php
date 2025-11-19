<div class="section-header">
    @if(!empty($subtitle))
        <span class="section-subtitle">{{ $subtitle }}</span>
    @endif
    @if(!empty($title))
        <h2 class="section-title">{{ $title }}</h2>
    @endif
    <div class="section-separator"></div>
    @if(!empty($description))
        <p class="section-description">{{ $description }}</p>
    @endif
</div>
