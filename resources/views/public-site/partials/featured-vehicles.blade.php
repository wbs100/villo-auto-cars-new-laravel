<!-- grid container (featured vehicles) -->
<div class="container" style="padding-top: 30px;">
    <div class="row pt-10 mb-5 position-relative">
        <div class="col-lg-6"><div class="top-vehicles-label">Top Vehicles</div><h2 class="section-title">Featured Vehicles Suggested<br />by Dealer</h2><div class="title-underline"></div></div>
        <div class="col-lg-6 d-flex align-items-center justify-content-end h-100 d-none"><div class="d-flex h-100 justify-content-end gap-3"><button class="filter-tab active">New</button><button class="filter-tab">Certified Used</button><button class="filter-tab">Used</button></div></div>
    </div>
    <div class="row">
        @if(isset($featuredVehicles) && $featuredVehicles->count())
        @foreach($featuredVehicles as $vehicle)
            <div class="col-lg-4 col-md-6">
                @include('components.components.car-card', [
                    'primaryImage' => $vehicle->main_image ? asset('uploads/vehicles/' . $vehicle->main_image) : asset('NewAssts/media/gridImg/1_1.webp'),
                    'secondaryImage' => $vehicle->image_2 ? asset('uploads/vehicles/' . $vehicle->image_2) : ($vehicle->main_image ? asset('uploads/vehicles/' . $vehicle->main_image) : asset('NewAssts/media/gridImg/1_2.webp')),
                    'priceMain' => isset($vehicle->price) ? 'Rs. ' . number_format($vehicle->price, 0) : 'N/A',
                    'priceMsrp' => isset($vehicle->price) ? 'MSRP: Rs. ' . number_format($vehicle->price, 0) : null,
                    'title' => trim(($vehicle->make ? $vehicle->make . ' ' : '') . ($vehicle->model ?? '') . ' ' . ($vehicle->manufactured_year ?? '')),
                    'location' => $vehicle->location ?? 'Miami, USA',
                    'registerStatus' => $vehicle->register_status ?? null,
                    'exteriorColor' => $vehicle->exterior_color ?? null,
                    'specs' => [($vehicle->fuel_type ?? 'Petrol'), ($vehicle->mileage ? number_format($vehicle->mileage, 0) : '0'), ($vehicle->engine_capacity ?? ''), ($vehicle->body ?? '')],
                    'date' => $vehicle->created_at ? $vehicle->created_at->format('F j, Y') : '',
                    'route' => route('vehicle.details', $vehicle->id)
                ])
            </div>
        @endforeach
        @else
            <div class="col-12">
                <p>No featured vehicles found for the current year.</p>
            </div>
        @endif
    </div>
</div>
