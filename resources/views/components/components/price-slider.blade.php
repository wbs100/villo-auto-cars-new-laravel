@php
    $isAttrBag = isset($attributes) && ($attributes instanceof \Illuminate\View\ComponentAttributeBag);
    $divClass = $class ?? ($isAttrBag ? $attributes->get('class') : 'price-filter-wrapper');
    $extraAttrs = $isAttrBag ? $attributes->except('class') : '';
@endphp
<div class="{{ $divClass }}" {!! $extraAttrs !!}>
    <h4>{{ $title ?? 'Price Range' }}</h4>
    <div class="slider-price" id="{{ $sliderId ?? 'slider-price' }}"></div>
    <span class="slider-price__wrap-input">
        <input class="slider-price__input" id="{{ $minId ?? 'slider-price_min' }}" placeholder="Min" />
        <span>-</span>
        <input class="slider-price__input" id="{{ $maxId ?? 'slider-price_max' }}" placeholder="Max" />
    </span>
</div>
