@php
	$limit = $limit ?? 4;
	$vehiclesList = $vehicles ?? null;
@endphp

@if(isset($vehiclesList) && (is_iterable($vehiclesList) && count($vehiclesList)))
	@foreach($vehiclesList as $vehicle)
		@php
			$cardTitle = trim(($vehicle->make ? $vehicle->make . ' ' : '') . ($vehicle->model ?? ''));
			$cardPrice = $vehicle->price ?? 0;
			$cardMileage = $vehicle->mileage ?? 0;
			$cardYear = $vehicle->manufactured_year ?? ($vehicle->year ?? null);
		@endphp
		<article class="card clearfix card-clickable" data-href="{{ route('vehicle.details', $vehicle->id) }}" data-title="{{ $cardTitle }}" data-price="{{ $cardPrice }}" data-mileage="{{ $cardMileage }}" data-year="{{ $cardYear }}">
			<div class="card__img">
				@php $img = $vehicle->main_image ?? null; @endphp
				<a href="{{ route('vehicle.details', $vehicle->id) }}">
					<img class="img-responsive" src="{{ $img ? asset('uploads/vehicles/' . $img) : asset('NewAssts/media/cards/1.jpg') }}" height="196" width="235" alt="{{ $vehicle->model }}" />
				</a>
				@if($vehicle->is_featured ?? false)
					<span class="card__wrap-label"><span class="card__label">FEATURED</span></span>
				@endif
			</div>
			<div class="card__inner">
				<h2 class="card__title ui-title-inner"><a href="{{ route('vehicle.details', $vehicle->id) }}">{{ trim(($vehicle->make ? $vehicle->make . ' ' : '') . ($vehicle->model ?? '')) }}</a></h2>
				<div class="decor-1"></div>
				<div class="card__description"><p>{{ \Illuminate\Support\Str::limit(strip_tags($vehicle->description ?? ''), 120) }}</p></div>
				<ul class="card__list list-unstyled">
					<li class="card-list__row"><span class="card-list__title">Body Style:</span><span class="card-list__info">{{ $vehicle->body ?? 'N/A' }}</span></li>
					<li class="card-list__row"><span class="card-list__title">Engine:</span><span class="card-list__info">{{ $vehicle->engine_capacity ? $vehicle->engine_capacity . ' cc' : 'N/A' }}</span></li>
					<li class="card-list__row"><span class="card-list__title">Mileage:</span><span class="card-list__info">{{ $vehicle->mileage ? number_format($vehicle->mileage, 0) . ' KM' : 'N/A' }}</span></li>
					<li class="card-list__row"><span class="card-list__title">Color:</span><span class="card-list__info">{{ $vehicle->exterior_color ?? 'N/A' }}</span></li>
					<li class="card-list__row"><span class="card-list__title">Transmission:</span><span class="card-list__info">{{ $vehicle->transmission ?? 'N/A' }}</span></li>
					<li class="card-list__row"><span class="card-list__title">Specs</span><span class="card-list__info">{{ $vehicle->body ?? 'N/A' }}</span></li>
				</ul>
				<div class="card__price">PRICE:<span class="card__price-number">Rs. {{ number_format($vehicle->price ?? 0, 0, '.', '') }}</span></div>
			</div>
		</article>
	@endforeach
	@else
	@for($i = 1; $i <= $limit; $i++)
		<article class="card clearfix" data-title="Vehicle {{ $i }}" data-price="{{ 3000000 + ($i * 100000) }}" data-mileage="35000" data-year="{{ 2020 - $i }}">
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
@endif

{{-- Pagination should be rendered at the page level using $vehicles->links('components.custom-pagination') when $vehicles is provided. --}}

