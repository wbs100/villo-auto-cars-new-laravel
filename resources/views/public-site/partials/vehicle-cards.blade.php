@php $limit = $limit ?? 4; @endphp

@for($i = 1; $i <= $limit; $i++)
	<article class="card clearfix">
		<div class="card__img">
			<img class="img-responsive" src="{{ asset('NewAssts/media/cards/' . $i . '.jpg') }}" height="196" width="235" alt="foto" />
			@if($i == 2)
			<span class="card__wrap-label"><span class="card__label">FEATURED</span></span>
			@endif
		</div>
		<div class="card__inner">
			<h2 class="card__title ui-title-inner">{{ ['MERCEDES-BENZ SLR MCLAREN', 'BENTLEY CONTINENTAL Supersports', '2015 Ferrari FXX'][$i-1] ?? 'Vehicle ' . $i }}</h2>
			<div class="decor-1"></div>
			<div class="card__description"><p>In a pickup market gone fancy, the vehicle keeps its standard crown. Reliable and well-built.</p></div>
			<ul class="card__list list-unstyled">
				<li class="card-list__row"><span class="card-list__title">Body Style:</span><span class="card-list__info">Sedan</span></li>
				<li class="card-list__row"><span class="card-list__title">Engine:</span><span class="card-list__info">DOHC 24-valve V-6</span></li>
				<li class="card-list__row"><span class="card-list__title">Mileage:</span><span class="card-list__info">35,000 KM</span></li>
				<li class="card-list__row"><span class="card-list__title">Color:</span><span class="card-list__info">White</span></li>
				<li class="card-list__row"><span class="card-list__title">Transmission:</span><span class="card-list__info">6-Speed Auto</span></li>
				<li class="card-list__row"><span class="card-list__title">Specs</span><span class="card-list__info">2-Passenger, 2-Door</span></li>
			</ul>
			<div class="card__price">PRICE:<span class="card__price-number">Rs. {{ number_format(3000000 + ($i * 100000), 0, '.', '') }}</span></div>
		</div>
	</article>
@endfor

<ul class="pagination">
	<li><a href="javascript:void(0);">PREV</a></li>
	<li class="active"><a href="javascript:void(0);">1</a></li>
	<li><a href="javascript:void(0);">2</a></li>
	<li><a href="javascript:void(0);">3</a></li>
	<li><a href="javascript:void(0);">4</a></li>
	<li><a href="javascript:void(0);">5</a></li>
	<li><a href="javascript:void(0);">NEXT</a></li>
</ul>

