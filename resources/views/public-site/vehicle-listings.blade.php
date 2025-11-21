@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('NewAssts/css/master.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/theme.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/sections.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/blog.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/color.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/about.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/vehicle-listings.css') }}">
<!-- CDN & plugin CSS (also available in global header) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/switcher.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/color1.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/color2.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/color3.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/color4.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/color5.css') }}">

<!-- jQuery fallback: only load if not loaded globally -->
<script>
    if (!window.jQuery) { document.write('<script src="{{ asset("NewAssts/plugins/jquery/jquery-1.11.1.min.js") }}"><\/script>'); }
</script>
@endpush

@section('custom-header')
@include('public-site.header.header')
@include('public-site.header.page-header', ['title' => 'VEHICLE LISTINGS', 'breadcrumb' => 'Vehicle Listings'])
@endsection

@section('content')
<div class="container">

    <!-- TOP FILTER BAR -->
    <div class="top-filter-bar">
        <form method="GET" action="{{ route('vehicle-listings') }}" class="filter-controls-wrapper">
            <!-- Model Search -->
            <div class="filter-group">
                <label class="filter-group-label" for="modelSearch">Model Search</label>
                <div class="model-search-wrapper">
                    <input type="text" class="model-search-input" id="modelSearch" placeholder="Search by model name"
                        aria-label="Search by model name" name="search">
                    <i class="fa fa-search search-icon" aria-hidden="true"></i>
                </div>
            </div>

            <!-- Sort Vehicles -->
            <div class="filter-group">
                <label class="filter-group-label">Sort Vehicles</label>
                <div class="sort-dropdown-wrapper">
                    <select class="sort-dropdown" name="sort">
                        <option value="">Sort by</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="year-new">Year: Newest First</option>
                        <option value="year-old">Year: Oldest First</option>
                        <option value="mileage-low">Mileage: Low to High</option>
                        <option value="mileage-high">Mileage: High to Low</option>
                    </select>
                    <i class="fa fa-chevron-down dropdown-arrow"></i>
                </div>
            </div>

            <!-- View Toggle (removed) -->


            <!-- Filter Button -->
            <div class="filter-group" style="flex: 0; align-self: flex-end;">
                <button class="filter-action-btn" type="submit">
                    <i class="fa fa-filter"></i> Filter
                </button>
            </div>
        </form>
    </div>


    <div class="row">
        <div class="col-md-9" id="vehicleListingsContainer">
            <main class="main-content">
                <!--sorting-->
                <div class="sorting">
                    <div class="sorting__inner">
                        <div class="sorting__item">
                            <span class="sorting__title">Showing</span>
                            <span id="resultsCount">{{ $vehicles->total() ?? '0' }} Results</span>
                        </div>
                        <div class="sorting__item">
                            <span class="sorting__title">show on page</span>
                            <div class="select jelect">
                                <input id="page" name="page" value="0" data-text="imagemin" type="text"
                                    class="jelect-input" />
                                <div tabindex="0" role="button" class="jelect-current">8 Items</div>
                                <ul class="jelect-options">
                                    <li class="jelect-option jelect-option_state_active">8 Items</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                @include('public-site.partials.vehicle-cards', ['limit' => 4])

                @if(isset($vehicles))
                <div class="pagination-nav d-flex justify-content-center mt-4">{{
                    $vehicles->links('components.custom-pagination') }}</div>
                @endif
            </main>
        </div>

        <!-- ENHANCED SIDEBAR WITH FILTERS -->
        <div class="col-md-3" id="sidebarFilters">
            <form method="GET" action="{{ route('vehicle-listings') }}" id="vehicleFilterForm">
                <aside class="sidebar sidebar-enhanced">
                    <h3 class="filter-section-title">Filter Vehicles</h3>

                    <!-- Year Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)">
                            <h4>Year</h4>
                            <span class="filter-arrow">▼</span>
                        </div>
                        <div class="filter-content">
                            <div class="filter-options">
                                @foreach($years as $year)
                                <div class="filter-option">
                                    <input type="checkbox" id="year-{{ $year['name'] }}" name="year[]" value="{{ $year['name'] }}">
                                    <label for="year-{{ $year['name'] }}">{{ $year['name'] }}</label>
                                    <span class="filter-count">({{ $year['count'] }})</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Condition Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)">
                            <h4>Condition</h4>
                            <span class="filter-arrow">▼</span>
                        </div>
                        <div class="filter-content">
                            <div class="filter-options">
                                @foreach($conditions as $condition)
                                <div class="filter-option">
                                    <input type="radio" id="condition-{{ $condition['name'] }}" name="condition" value="{{ $condition['name'] }}">
                                    <label for="condition-{{ $condition['name'] }}">{{ $condition['name'] }}</label>
                                    <span class="filter-count">({{ $condition['count'] }})</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Body Type Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)">
                            <h4>Body</h4>
                            <span class="filter-arrow">▼</span>
                        </div>
                        <div class="filter-content">
                            <div class="filter-options">
                                @foreach($bodies as $body)
                                <div class="filter-option">
                                    <input type="checkbox" id="body-{{ $body['name'] }}" name="body[]" value="{{ $body['name'] }}">
                                    <label for="body-{{ $body['name'] }}">{{ $body['name'] }}</label>
                                    <span class="filter-count">({{ $body['count'] }})</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Make Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)">
                            <h4>Make</h4>
                            <span class="filter-arrow">▼</span>
                        </div>
                        <div class="filter-content">
                            <div class="filter-options">
                                @foreach($makes as $make)
                                <div class="filter-option">
                                    <input type="checkbox" id="make-{{ $make['name'] }}" name="make[]" value="{{ $make['name'] }}">
                                    <label for="make-{{ $make['name'] }}">{{ $make['name'] }}</label>
                                    <span class="filter-count">({{ $make['count'] }})</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Transmission Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)">
                            <h4>Transmission</h4>
                            <span class="filter-arrow">▼</span>
                        </div>
                        <div class="filter-content">
                            <div class="filter-options">
                                @foreach($transmissions as $transmission)
                                <div class="filter-option">
                                    <input type="checkbox" id="trans-{{ $transmission['name'] }}" name="transmission[]" value="{{ $transmission['name'] }}">
                                    <label for="trans-{{ $transmission['name'] }}">{{ $transmission['name'] }}</label>
                                    <span class="filter-count">({{ $transmission['count'] }})</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Exterior Color Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)">
                            <h4>Exterior Color</h4>
                            <span class="filter-arrow">▼</span>
                        </div>
                        <div class="filter-content">
                            <div class="filter-options">
                                @foreach($colors as $color)
                                <div class="filter-option">
                                    <input type="checkbox" id="color-{{ $color['name'] }}" name="exterior_color[]" value="{{ $color['name'] }}">
                                    <label for="color-{{ $color['name'] }}">{{ $color['name'] }}</label>
                                    <span class="filter-count">({{ $color['count'] }})</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <!-- Price Range Filter -->
                    <div class="price-filter-wrapper">
                        <h4>Price Range</h4>
                        <div class="slider-price" id="slider-price"
                            data-min="{{ floor($minPrice ?? 0) }}"
                            data-max="{{ ceil($maxPrice ?? 0) }}"
                            data-start-min="{{ request('price_min', floor($minPrice ?? 0)) }}"
                            data-start-max="{{ request('price_max', ceil($maxPrice ?? 0)) }}"></div>
                        <span class="slider-price__wrap-input">
                            <input class="slider-price__input" id="slider-price_min" name="price_min" placeholder="Min"
                                value="{{ request('price_min', floor($minPrice ?? 0)) }}" />
                            <span>-</span>
                            <input class="slider-price__input" id="slider-price_max" name="price_max" placeholder="Max"
                                value="{{ request('price_max', ceil($maxPrice ?? 0)) }}" />
                        </span>
                    </div>

                    <!-- Action Buttons - simple full-width buttons (pinned footer) -->
                    <div class="sidebar-footer" style="margin-top: 20px;">
                        <button class="btn-filter-primary" type="submit">APPLY FILTERS</button>
                        <button class="btn-filter-secondary" type="reset">RESET ALL</button>
                    </div>
                </aside>


                {{-- <button type="submit" class="btn btn-primary w-100 mt-3">Apply Filters</button> --}}
            </form>
        </div>
    </div>
</div>
@endsection

@push('page-ajax')
<script>
    // Optional: Keep only UI/UX scripts, not filtering logic
    function toggleFilter(el) {
        const parent = el.parentElement;
        parent.classList.toggle('active');
    }
    function toggleSidebarFilters() {
        const sidebar = document.getElementById('sidebarFilters');
        if (!sidebar) return;
        if (window.getComputedStyle(sidebar).display === 'none') sidebar.style.display = 'block';
        else sidebar.style.display = 'none';
    }
    function adjustSidebarHeight() {
        const sidebarFilters = document.getElementById('sidebarFilters');
        if (!sidebarFilters) return;
        const aside = sidebarFilters.querySelector('.sidebar-enhanced');
        if (!aside) return;
        if (window.innerWidth < 992) {
            aside.style.top = '';
            aside.style.maxHeight = '';
            aside.style.overflowY = '';
            return;
        }
        const headerEl = document.querySelector('.header');
        const pageHeaderEl = document.querySelector('.block-title');
        let headerHeight = (headerEl && headerEl.offsetHeight) ? headerEl.offsetHeight : 0;
        let pageHeaderHeight = (pageHeaderEl && pageHeaderEl.offsetHeight) ? pageHeaderEl.offsetHeight : 0;
        const extraSpacing = 180;
        const topOffset = headerHeight + pageHeaderHeight + extraSpacing;
        aside.style.top = topOffset + 'px';
        const buffer = 16;
        const available = window.innerHeight - topOffset - buffer;
    }
    window.addEventListener('load', adjustSidebarHeight);
    window.addEventListener('resize', function () { setTimeout(adjustSidebarHeight, 120); });
</script>
@endpush
