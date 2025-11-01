@extends('layouts.app')

@section('content')

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<style>
    .main_image {
        width: 100%;
        height: 100%;
        aspect-ratio: 16/9;
        object-fit: cover;
        user-select: none;
    }

    .additional-image {
        aspect-ratio: 1/1;
        object-fit: cover;
        user-select: none;
    }

    .swiper-button-next,
    .swiper-button-prev {
        width: 25px !important;
        height: 25px !important;
        font-size: 10px;
        background-color: rgba(0, 0, 0, 0.5);
        /* Optional: dark semi-transparent background */
        color: #fff;
        /* White arrow */
        border-radius: 50%;
        padding: 25px;
    }

    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 10px;
        /* shrink the arrow icon itself */
    }
</style>

<!--=================================
 inner-intro -->

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="text-center row intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">{{ $vehicle->make }} {{ $vehicle->model }} </h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
                <ul class="page-breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><a href="/listings"><i class="fa fa-car"></i> Vehicles</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>{{ $vehicle->make }} {{ $vehicle->model }}</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--=================================
 inner-intro -->

<!--vehicle section-->

<section class="my-section-padding">
    <div class="container">
        <div class="row g-4">
            <!-- Left Column: Images -->
            <div class="col-lg-6">
                <!-- Main Image -->
                <div class="mb-3">
                    <img src="/uploads/vehicles/{{ $vehicle->main_image }}" alt="Main Image" class="rounded shadow main_image img-fluid">
                </div>

                <!-- Swiper Slider for Additional Images -->
                @php
                $additionalImages = collect([
                $vehicle->main_image,
                $vehicle->image_2,
                $vehicle->image_3,
                $vehicle->image_4,
                $vehicle->image_5
                ])->filter(); // Removes null/empty images
                @endphp

                @if($additionalImages->isNotEmpty())
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach($additionalImages as $img)
                        <div class="swiper-slide">
                            <img src="/uploads/vehicles/{{ $img }}" class="rounded img-fluid additional-image" alt="Additional Image">
                        </div>
                        @endforeach
                    </div>
                    <!-- Swiper Nav -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                @endif
            </div>

            <!-- Right Column: Info -->
            <div class="col-lg-6">
                <h2 class="mb-3 fw-bold">{{ $vehicle->model }}</h2>
                <p class="text-muted">{{ $vehicle->description }}</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Price:</strong> {{ number_format($vehicle->price) }}</li>
                    <li class="list-group-item"><strong>Make:</strong> {{ $vehicle->make }}</li>
                    <li class="list-group-item"><strong>Year:</strong> {{ $vehicle->year }}</li>
                    <li class="list-group-item"><strong>Body:</strong> {{ $vehicle->body }}</li>
                    <li class="list-group-item"><strong>Exterior Color:</strong> {{ $vehicle->exterior_color }}</li>
                    <li class="list-group-item"><strong>Interior Color:</strong> {{ $vehicle->interior_color }}</li>
                    <li class="list-group-item"><strong>Mileage:</strong> {{ $vehicle->mileage }}</li>
                    <li class="list-group-item"><strong>Transmission:</strong> {{ $vehicle->transmission }}</li>
                    <li class="list-group-item"><strong>Condition:</strong> {{ $vehicle->condition }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Swiper('.mySwiper', {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                },
            }
        });
    });
</script>

@endsection