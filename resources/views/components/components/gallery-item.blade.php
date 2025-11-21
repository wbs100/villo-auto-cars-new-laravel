<div class="gallery-item" data-category="{{ $category ?? 'all' }}" {{ $attributes }}>
    <img src="{{ $image }}" alt="{{ $alt ?? $title }}" />
    <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
    <div class="gallery-caption"><h4>{{ $title }}</h4><p>{{ $subtitle ?? '' }}</p></div>
</div>
