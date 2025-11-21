@php
    $isAttrBag = isset($attributes) && ($attributes instanceof \Illuminate\View\ComponentAttributeBag);
    $divClass = $class ?? ($isAttrBag ? $attributes->get('class') : 'filter-dropdown');
    $extraAttrs = $isAttrBag ? $attributes->except('class') : '';
@endphp
<div class="{{ $divClass }}" {!! $extraAttrs !!}>
    <div class="filter-header" onclick="toggleFilter(this)"><h4>{{ $title ?? 'Filter' }}</h4><span class="filter-arrow">▼</span></div>
    <div class="filter-content">
        <div class="filter-options">
            {{-- slots/content: expects list items or custom markup to be passed when including --}}
            {!! $slot ?? ($content ?? '') !!}
        </div>
    </div>
</div>
