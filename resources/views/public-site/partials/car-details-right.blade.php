<aside class="sidebar">
    @php
        $specs = [
            'Model' => isset($vehicle) ? ($vehicle->model ?? 'N/A') : 'N/A',
            'Manufactured Year' => isset($vehicle) ? ($vehicle->manufactured_year ?? 'N/A') : 'N/A',
            'Make' => isset($vehicle) ? ($vehicle->make ?? 'N/A') : 'N/A',
            'Body' => isset($vehicle) ? ($vehicle->body ?? 'N/A') : 'N/A',
            'Exterior Color' => isset($vehicle) ? ($vehicle->exterior_color ?? 'N/A') : 'N/A',
            'Interior Color' => isset($vehicle) ? ($vehicle->interior_color ?? 'N/A') : 'N/A',
            'Mileage' => isset($vehicle) ? ($vehicle->mileage ? number_format($vehicle->mileage, 0) . ' km' : 'N/A') : 'N/A',
            'Transmission' => isset($vehicle) ? ($vehicle->transmission ?? 'N/A') : 'N/A',
            'Condition' => isset($vehicle) ? ($vehicle->condition ?? 'N/A') : 'N/A',
            'Registered Year' => isset($vehicle) ? ($vehicle->registered_year ?? 'N/A') : 'N/A',
            'Register Status' => isset($vehicle) ? ($vehicle->register_status ?? 'N/A') : 'N/A',
            'Trim / Edition' => isset($vehicle) ? ($vehicle->trim_or_edition ?? 'N/A') : 'N/A',
            'Engine Capacity' => isset($vehicle) ? ($vehicle->engine_capacity ? $vehicle->engine_capacity . ' cc' : 'N/A') : 'N/A',
            'Fuel Type' => isset($vehicle) ? ($vehicle->fuel_type ?? 'N/A') : 'N/A'
        ];
    @endphp
    <x-components.specifications-widget :specs="$specs" />

    {{-- Video widget removed as per request --}}

    <x-components.related-cars-widget :items="$relatedItems ?? []" />

    {{-- Share widget removed to prevent rendering issue and display of component name --}}
</aside>
