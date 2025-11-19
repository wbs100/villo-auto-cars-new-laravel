@php
    $isAttrBag = isset($attributes) && ($attributes instanceof \Illuminate\View\ComponentAttributeBag);
    $divClass = $class ?? ($isAttrBag ? $attributes->get('class') : 'view-toggle-group');
    $extraAttrs = $isAttrBag ? $attributes->except('class') : '';
@endphp
<div class="{{ $divClass }}" {!! $extraAttrs !!}>
    <button class="view-toggle-btn {{ ($active ?? 'grid') === 'grid' ? 'active' : '' }}" onclick="setView('grid')" data-view="grid" title="Grid view">
        <i class="fa fa-th" aria-hidden="true"></i>
    </button>
    <button class="view-toggle-btn {{ ($active ?? '') === 'list' ? 'active' : '' }}" onclick="setView('list')" data-view="list" title="List view">
        <i class="fa fa-list" aria-hidden="true"></i>
    </button>
</div>
