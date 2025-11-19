<div class="review-card">
    <div class="review-image">
        <img src="{{ $image }}" alt="Car Review">
    </div>
    <img src="{{ $avatar }}" alt="{{ $name }}" class="reviewer-avatar">
    <div class="review-content">
        <h5 class="reviewer-name">{{ $name }}</h5>
        <span class="reviewer-title">{{ $title }}</span>
        <p class="review-text">{{ $text }}</p>
        <div class="quote-icon">"</div>
    </div>
</div>
