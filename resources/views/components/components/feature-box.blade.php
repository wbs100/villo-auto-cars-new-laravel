<div class="feature-box feature-item" {{ $attributes->merge(['data-index' => $index ?? '']) }}>
    <div class="feature-icon-wrapper"><i class="{{ $icon }} feature-icon"></i></div>
    <h6 class="feature-title">{{ $title }}</h6>
    <p class="feature-description">{{ $description }}</p>
</div>
