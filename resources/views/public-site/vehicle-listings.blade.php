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
                                <div class="filter-option">
                                    <input type="checkbox" id="year-2024" name="year[]" value="2024">
                                    <label for="year-2024">2024</label>
                                    <span class="filter-count">(12)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="year-2023" name="year[]" value="2023">
                                    <label for="year-2023">2023</label>
                                    <span class="filter-count">(25)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="year-2022" name="year[]" value="2022">
                                    <label for="year-2022">2022</label>
                                    <span class="filter-count">(18)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="year-2021" name="year[]" value="2021">
                                    <label for="year-2021">2021</label>
                                    <span class="filter-count">(15)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="year-2020" name="year[]" value="2020">
                                    <label for="year-2020">2020</label>
                                    <span class="filter-count">(22)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="year-2019" name="year[]" value="2019">
                                    <label for="year-2019">2019</label>
                                    <span class="filter-count">(19)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="year-older" name="year[]" value="older">
                                    <label for="year-older">2018 & Older</label>
                                    <span class="filter-count">(45)</span>
                                </div>
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
                                <div class="filter-option">
                                    <input type="radio" id="condition-new" name="condition" value="new">
                                    <label for="condition-new">Brand New</label>
                                    <span class="filter-count">(35)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="radio" id="condition-used" name="condition" value="used">
                                    <label for="condition-used">Used</label>
                                    <span class="filter-count">(89)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="radio" id="condition-certified" name="condition" value="certified">
                                    <label for="condition-certified">Certified Pre-Owned</label>
                                    <span class="filter-count">(24)</span>
                                </div>
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
                                <div class="filter-option">
                                    <input type="checkbox" id="body-sedan" name="body[]" value="sedan">
                                    <label for="body-sedan">Sedan</label>
                                    <span class="filter-count">(42)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="body-suv" name="body[]" value="suv">
                                    <label for="body-suv">SUV</label>
                                    <span class="filter-count">(38)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="body-coupe" name="body[]" value="coupe">
                                    <label for="body-coupe">Coupe</label>
                                    <span class="filter-count">(15)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="body-hatchback" name="body[]" value="hatchback">
                                    <label for="body-hatchback">Hatchback</label>
                                    <span class="filter-count">(28)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="body-convertible" name="body[]" value="convertible">
                                    <label for="body-convertible">Convertible</label>
                                    <span class="filter-count">(8)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="body-wagon" name="body[]" value="wagon">
                                    <label for="body-wagon">Wagon</label>
                                    <span class="filter-count">(12)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="body-van" name="body[]" value="van">
                                    <label for="body-van">Van</label>
                                    <span class="filter-count">(18)</span>
                                </div>
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
                                <div class="filter-option">
                                    <input type="checkbox" id="make-audi" name="make[]" value="audi">
                                    <label for="make-audi">Audi</label>
                                    <span class="filter-count">(5)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="make-bentley" name="make[]" value="bentley">
                                    <label for="make-bentley">Bentley</label>
                                    <span class="filter-count">(10)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="make-bmw" name="make[]" value="bmw">
                                    <label for="make-bmw">BMW</label>
                                    <span class="filter-count">(70)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="make-chevrolet" name="make[]" value="chevrolet">
                                    <label for="make-chevrolet">Chevrolet</label>
                                    <span class="filter-count">(6)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="make-mercedes" name="make[]" value="mercedes">
                                    <label for="make-mercedes">Mercedes-Benz</label>
                                    <span class="filter-count">(80)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="make-landrover" name="make[]" value="landrover">
                                    <label for="make-landrover">Land Rover</label>
                                    <span class="filter-count">(36)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="make-toyota" name="make[]" value="toyota">
                                    <label for="make-toyota">Toyota</label>
                                    <span class="filter-count">(95)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="make-honda" name="make[]" value="honda">
                                    <label for="make-honda">Honda</label>
                                    <span class="filter-count">(72)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="make-nissan" name="make[]" value="nissan">
                                    <label for="make-nissan">Nissan</label>
                                    <span class="filter-count">(48)</span>
                                </div>
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
                                <div class="filter-option">
                                    <input type="checkbox" id="trans-auto" name="transmission[]" value="automatic">
                                    <label for="trans-auto">Automatic</label>
                                    <span class="filter-count">(112)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="trans-manual" name="transmission[]" value="manual">
                                    <label for="trans-manual">Manual</label>
                                    <span class="filter-count">(36)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="trans-cvt" name="transmission[]" value="cvt">
                                    <label for="trans-cvt">CVT</label>
                                    <span class="filter-count">(8)</span>
                                </div>
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
                                <div class="filter-option">
                                    <input type="checkbox" id="color-white" name="exterior_color[]" value="white">
                                    <label for="color-white">White</label>
                                    <span class="filter-count">(45)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="color-black" name="exterior_color[]" value="black">
                                    <label for="color-black">Black</label>
                                    <span class="filter-count">(38)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="color-silver" name="exterior_color[]" value="silver">
                                    <label for="color-silver">Silver</label>
                                    <span class="filter-count">(32)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="color-gray" name="exterior_color[]" value="gray">
                                    <label for="color-gray">Gray</label>
                                    <span class="filter-count">(28)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="color-red" name="exterior_color[]" value="red">
                                    <label for="color-red">Red</label>
                                    <span class="filter-count">(15)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="color-blue" name="exterior_color[]" value="blue">
                                    <label for="color-blue">Blue</label>
                                    <span class="filter-count">(22)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="color-other" name="exterior_color[]" value="other">
                                    <label for="color-other">Other Colors</label>
                                    <span class="filter-count">(16)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Interior Color Filter -->
                    <div class="filter-dropdown active">
                        <div class="filter-header" onclick="toggleFilter(this)">
                            <h4>Interior Color</h4>
                            <span class="filter-arrow">▼</span>
                        </div>
                        <div class="filter-content">
                            <div class="filter-options">
                                <div class="filter-option">
                                    <input type="checkbox" id="int-black" name="interior_color[]" value="black">
                                    <label for="int-black">Black</label>
                                    <span class="filter-count">(65)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="int-beige" name="interior_color[]" value="beige">
                                    <label for="int-beige">Beige</label>
                                    <span class="filter-count">(42)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="int-gray" name="interior_color[]" value="gray">
                                    <label for="int-gray">Gray</label>
                                    <span class="filter-count">(35)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="int-brown" name="interior_color[]" value="brown">
                                    <label for="int-brown">Brown</label>
                                    <span class="filter-count">(18)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="int-tan" name="interior_color[]" value="tan">
                                    <label for="int-tan">Tan</label>
                                    <span class="filter-count">(12)</span>
                                </div>
                                <div class="filter-option">
                                    <input type="checkbox" id="int-other" name="interior_color[]" value="other">
                                    <label for="int-other">Other Colors</label>
                                    <span class="filter-count">(8)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Price Range Filter -->
                    <div class="price-filter-wrapper">
                        <h4>Price Range</h4>
                        <div class="slider-price" id="slider-price"></div>
                        <span class="slider-price__wrap-input">
                            <input class="slider-price__input" id="slider-price_min" placeholder="Min"
                                value="{{ floor($minPrice ?? 0) }}" />
                            <span>-</span>
                            <input class="slider-price__input" id="slider-price_max" placeholder="Max"
                                value="{{ ceil($maxPrice ?? 0) }}" />
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