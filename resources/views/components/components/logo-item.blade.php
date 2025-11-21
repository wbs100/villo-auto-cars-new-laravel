@php
    $src = $src ?? asset('NewAssts/img/brands/bmw.png');
    $alt = $alt ?? 'Brand';
@endphp
<div class="swiper-slide logo-slide"><img src="{{ $src }}" alt="{{ $alt }}" class="logo-img"></div>
