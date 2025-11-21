@php
    $isAttrBag = isset($attributes) && ($attributes instanceof \Illuminate\View\ComponentAttributeBag);
    $divClass = $class ?? ($isAttrBag ? $attributes->get('class') : 'card clearfix');
    $extraAttrs = $isAttrBag ? $attributes->except('class') : '';
@endphp
<div class="{{ $divClass }}" {!! $extraAttrs !!}>
    <div class="card__img">
        <img class="img-responsive" src="{{ $image ?? asset('NewAssts/media/cards/1.jpg') }}" height="196" width="235" alt="{{ $title ?? 'Vehicle' }}" />
        @if(isset($featured) && $featured)
            <span class="card__wrap-label"><span class="card__label">FEATURED</span></span>
        @endif
    </div>
    <div class="card__inner">
        <h2 class="card__title ui-title-inner">{{ $title ?? 'Vehicle Title' }}</h2>
        <div class="decor-1"></div>
        <div class="card__description">
            <p>{!! $description ?? 'No description provided.' !!}</p>
        </div>
        <ul class="card__list list-unstyled">
            @foreach($specs ?? [] as $specLabel => $specValue)
                <li class="card-list__row"><span class="card-list__title">{{ $specLabel }}:</span><span class="card-list__info">{{ $specValue }}</span></li>
            @endforeach
        </ul>
        <div class="card__price">PRICE:<span class="card__price-number">{{ $price ?? 'N/A' }}</span></div>
    </div>
</div>
