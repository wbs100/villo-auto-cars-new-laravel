@php
    $isAttrBag = isset($attributes) && ($attributes instanceof \Illuminate\View\ComponentAttributeBag);
    $divClass = $class ?? ($isAttrBag ? $attributes->get('class') : 'pagination');
    $extraAttrs = $isAttrBag ? $attributes->except('class') : '';
@endphp
<ul class="{{ $divClass }}" {!! $extraAttrs !!}>
    <li><a href="javascript:void(0);">PREV</a></li>
    @for($i = 1; $i <= ($pages ?? 5); $i++)
        <li class="{{ ($current ?? 1) === $i ? 'active' : '' }}"><a href="javascript:void(0);">{{ $i }}</a></li>
    @endfor
    <li><a href="javascript:void(0);">NEXT</a></li>
</ul>
