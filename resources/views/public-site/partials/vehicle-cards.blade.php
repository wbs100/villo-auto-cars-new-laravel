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
		<article class="card clearfix card-clickable" role="link" tabindex="0" data-href="{{ route('vehicle.details', $vehicle->id) }}" data-title="{{ $cardTitle }}" data-price="{{ $cardPrice }}" data-mileage="{{ $cardMileage }}" data-year="{{ $cardYear }}">
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
@endif
@push('page-ajax')
<script>
	// Ensure we only attach the handlers once per page.
	if (!window.__vehicleCardClickHandlerAttached) {
		window.__vehicleCardClickHandlerAttached = true;

		document.addEventListener('click', (e) => {
			const el = e.target.closest && e.target.closest('.card-clickable');
			if (!el) return;

			// If actually clicked inside a real anchor, leave default behavior
			if (e.target.closest('a')) return;

			const href = el.getAttribute('data-href');
			if (!href) return;

			// If ctrl/cmd/shift are pressed or middle button clicked, open in new tab
			if (e.ctrlKey || e.metaKey || e.shiftKey || e.button === 1) {
				window.open(href, '_blank');
				return;
			}

			// Otherwise, navigate to the details page
			window.location.href = href;
		}, false);

		// Keyboard accessibility: navigate on Enter or Space
		document.addEventListener('keydown', (e) => {
			if (e.key === 'Enter' || e.key === ' ') {
				const el = document.activeElement;
				if (!el || !el.classList.contains('card-clickable')) return;
				const href = el.getAttribute('data-href');
				if (!href) return;
				if (e.key === 'Enter') {
					window.location.href = href;
				} else {
					// spacebar default is to scroll; prevent and navigate
					e.preventDefault();
					window.location.href = href;
				}
			}
		}, false);
	}
</script>
@endpush

{{-- Pagination should be rendered at the page level using $vehicles->links('components.custom-pagination') when $vehicles is provided. --}}

