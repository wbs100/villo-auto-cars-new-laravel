<!-- Gallery Grid Partial -->
<div class="gallery-grid">
    @if(isset($galleryVehicles) && $galleryVehicles->count())
        @foreach($galleryVehicles as $v)
            @php
                // choose the first available image using null coalescing to avoid nested parentheses
                $img = $v->main_image ?? $v->image_2 ?? $v->image_3 ?? $v->image_4 ?? $v->image_5;
                $imageUrl = $img ? asset('uploads/vehicles/' . $img) : asset('NewAssts/media/posts/370x250/1.jpg');
                // category: try body or condition for simple grouping (use fully-qualified Str)
                $category = $v->body ? \Illuminate\Support\Str::slug($v->body) : ($v->condition ? \Illuminate\Support\Str::slug($v->condition) : 'all');
                $title = trim(($v->make ?? '') . ' ' . ($v->model ?? '')) ?: ($v->title ?? 'Vehicle');
                $subtitle = $v->manufactured_year ? ($v->manufactured_year . ' Model') : '';
            @endphp
            <x-components.gallery-item :category="$category" :image="$imageUrl" :title="$title" :subtitle="$subtitle" />
        @endforeach
    @else
        <!-- fallback static items -->
        <x-components.gallery-item category="luxury" image="{{ asset('NewAssts/media/posts/370x250/1.jpg') }}" title="Mercedes-Benz S-Class" subtitle="2023 Model" />
        <x-components.gallery-item category="suv" image="{{ asset('NewAssts/media/posts/370x250/2.jpg') }}" title="Toyota Land Cruiser" subtitle="2022 Model" />
        <x-components.gallery-item category="sedan" image="{{ asset('NewAssts/media/posts/370x250/3.jpg') }}" title="Honda Accord" subtitle="2023 Model" />
        <x-components.gallery-item category="hybrid" image="{{ asset('NewAssts/media/posts/370x250/4.jpg') }}" title="Toyota Prius" subtitle="Hybrid 2023" />
    @endif
</div>
