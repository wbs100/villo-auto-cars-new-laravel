<div id="{{ $id ?? 'lightboxModal' }}" class="lightbox-modal">
    <span class="lightbox-close">&times;</span>
    <span class="lightbox-prev">&#10094;</span>
    <span class="lightbox-next">&#10095;</span>
    <div class="lightbox-content">
        <img id="lightboxImg" src="{{ $image ?? '' }}" alt="{{ $alt ?? '' }}" />
    </div>
    <div class="lightbox-caption" id="{{ $captionId ?? 'lightboxCaption' }}">{{ $caption ?? '' }}</div>
</div>
