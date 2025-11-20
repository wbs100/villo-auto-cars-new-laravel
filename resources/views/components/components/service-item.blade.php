@php
    // variables: iconClass, title, description
    $iconClass = $iconClass ?? 'icon flaticon-car33';
    $title = $title ?? 'Service Title';
    $description = $description ?? 'Description';
@endphp

<div class="list-services">
    <i class="{{ $iconClass }}"></i>
    <div class="decor-1"></div>
    <div class="list-services__inner">
        <h3 class="list-services__title">{!! $title !!}</h3>
        <div class="list-services__description">{!! $description !!}</div>
    </div>
</div>
