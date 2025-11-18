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
<script>if (!window.jQuery) { document.write('<script src="{{ asset("NewAssts/plugins/jquery/jquery-1.11.1.min.js") }}"><\/script>'); }</script>
@endpush

@section('custom-header')
    <div id="this-top" class="layout-theme animated-css" data-header="sticky" data-header-top="200">
        <div id="wrapper">
            <!-- HEADER -->
            <div class="header">
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="header-contacts">
                                    <span class="header-contacts__item"><i class="icon fa fa-phone"></i> 076 905 7272</span>
                                    <a class="header-contacts__item" href="mailto:villoauto@gmail.com"><i class="icon fa fa-envelope"></i> villoauto@gmail.com</a>
                                </div>
                                <ul class="social-links list-inline">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li><a href="#"><i class="bi bi-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header__inner">
                    <div class="header-container-padding">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <a href="{{ route('home') }}" class="logo d-none d-lg-block">
                                    <img class="logo__img img-responsive" src="{{ asset('NewAssts/img/logo.png') }}" style="height: 100px; object-fit: contain;" alt="Logo" />
                                </a>
                                <div class="navbar yamm">
                                    <div class="navbar-header hidden-md hidden-lg hidden-sm">
                                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                                            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                                        </button>
                                        <a href="javascript:void(0);" class="navbar-brand"></a>
                                    </div>
                                    <div id="navbar-collapse-1" class="navbar-collapse collapse ">
                                        <ul class="nav navbar-nav ">
                                            <li><a href="{{ route('home') }}">HOME</a></li>
                                            <li><a href="{{ route('vehicle-listings') }}">VEHICLE LISTINGS</a></li>
                                            <li><a href="{{ route('services') }}">SERVICES</a></li>
                                            <li><a href="{{ route('about') }}">ABOUT US</a></li>
                                            <li><a href="{{ route('gallery') }}">GALLERY</a></li>
                                            <li><a href="{{ route('contact') }}">CONTACT US</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="block-title">
                <div class="block-title__inner section-bg section-bg_second">
                    <div class="bg-inner">
                        <h1 class="ui-title-page">VEHICLE LISTINGS</h1>
                        <div class="decor-1 center-block"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">HOME</a></li>
                            <li class="active">Vehicle Listings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> <!-- /#wrapper -->
    </div> <!-- /#this-top -->
    @endsection

@section('content')
    <div class="container">
        <!-- TOP FILTER BAR -->
        <div class="top-filter-bar">
            <div class="filter-controls-wrapper">
                <!-- Model Search -->
                <div class="filter-group">
                    <label class="filter-group-label">Model Search</label>
                    <div class="model-search-wrapper">
                        <input type="text" class="model-search-input" id="modelSearch" placeholder="Search by model name">
                        <i class="fa fa-search search-icon"></i>
                    </div>
                </div>

                <!-- Sort Vehicles -->
                <div class="filter-group">
                    <label class="filter-group-label">Sort Vehicles</label>
                    <div class="sort-dropdown-wrapper">
                        <select class="sort-dropdown" id="sortVehicles">
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

                <!-- View Toggle -->
                <div class="filter-group view-filter" style="flex: 0;">
                    <label class="filter-group-label">View</label>
                    <div class="view-toggle-group">
                        <button class="view-toggle-btn active" onclick="setView('grid')" data-view="grid" title="Grid view">
                            <i class="fa fa-th" aria-hidden="true"></i>
                        </button>
                        <button class="view-toggle-btn" onclick="setView('list')" data-view="list" title="List view">
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>

                <!-- Filter Button -->
                <div class="filter-group" style="flex: 0; align-self: flex-end;">
                    <button class="filter-action-btn" onclick="toggleSidebarFilters()">
                        <i class="fa fa-filter"></i> Filter
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9" id="vehicleListingsContainer">
                <main class="main-content">
                    <div class="sorting">
                        <div class="sorting__inner">
                            <div class="sorting__item">
                                <span class="sorting__title">Showing</span>
                                <span id="resultsCount">{{ $vehicles->total() ?? '0' }} Results</span>
                            </div>
                            <div class="sorting__item">
                                <span class="sorting__title">show on page</span>
                                <div class="select jelect">
                                    <input id="page" name="page" value="0" data-text="imagemin" type="text" class="jelect-input" />
                                    <div tabindex="0" role="button" class="jelect-current">10 Items</div>
                                    <ul class="jelect-options">
                                        <li class="jelect-option jelect-option_state_active">10 Items</li>
                                        <li class="jelect-option">20 Items</li>
                                        <li class="jelect-option">30 Items</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Vehicle List START --}}
                    @foreach($vehicles ?? collect() as $vehicle)
                    <article class="card clearfix">
                        <div class="card__img">
                            <img class="img-responsive" src="{{ asset('NewAssts/media/cards/1.jpg') }}" height="196" width="235" alt="foto" />
                        </div>
                        <div class="card__inner">
                            <h2 class="card__title ui-title-inner">{{ strtoupper($vehicle->model ?? '') }}</h2>
                            <div class="decor-1"></div>
                            <div class="card__description">
                                <p>{{ Str::limit($vehicle->short_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 150) }}</p>
                            </div>
                            <ul class="card__list list-unstyled">
                                <li class="card-list__row"><span class="card-list__title">Body Style:</span><span class="card-list__info">{{ $vehicle->body ?? 'Sedan' }}</span></li>
                                <li class="card-list__row"><span class="card-list__title">Engine:</span><span class="card-list__info">{{ $vehicle->engine ?? 'N/A' }}</span></li>
                                <li class="card-list__row"><span class="card-list__title">Mileage:</span><span class="card-list__info">{{ $vehicle->mileage ?? 'N/A' }}</span></li>
                                <li class="card-list__row"><span class="card-list__title">Color:</span><span class="card-list__info">{{ $vehicle->exterior_color ?? 'White' }}</span></li>
                                <li class="card-list__row"><span class="card-list__title">Transmission:</span><span class="card-list__info">{{ $vehicle->transmission ?? 'Auto' }}</span></li>
                            </ul>
                            <div class="card__price">PRICE:<span class="card__price-number">{{ number_format($vehicle->price ?? 0, 0, '.', ',') }}</span></div>
                        </div>
                    </article>
                    @endforeach
                    {{-- Vehicle List END --}}

                    <ul class="pagination">{!! $vehicles->links() ?? '' !!}</ul>
                </main>
            </div>

            <!-- ENHANCED SIDEBAR WITH FILTERS -->
            <div class="col-md-3" id="sidebarFilters">
                <aside class="sidebar sidebar-enhanced">
                    <h3 class="filter-section-title">Filter Vehicles</h3>

                    <!-- YEAR FILTER -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)"><h4>Year</h4><span class="filter-arrow">▼</span></div>
                        <div class="filter-content">
                            <div class="filter-options">
                                {{-- Years list (example static items) --}}
                                @foreach(
                                App\Models\Year::orderBy('id','desc')->limit(8)->get() as $y)
                                <div class="filter-option">
                                    <input type="checkbox" id="year-{{ $y->id }}" name="year[]" value="{{ $y->name }}">
                                    <label for="year-{{ $y->id }}">{{ $y->name }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Condition Filter--> 
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)"><h4>Condition</h4><span class="filter-arrow">▼</span></div>
                        <div class="filter-content"><div class="filter-options">
                            @foreach(App\Models\Condition::all() as $option)
                            <div class="filter-option"><input type="radio" name="condition" id="cond-{{ $option->id }}" value="{{ $option->id }}"><label for="cond-{{ $option->id }}">{{ $option->name }}</label></div>
                            @endforeach
                        </div></div>
                    </div>

                    <!-- Body, make, transmission, color filters can be added similarly -->

                    <!-- Price Range Filter -->
                    <div class="price-filter-wrapper">
                        <h4>Price Range</h4>
                        <div class="slider-price" id="slider-price"></div>
                        <span class="slider-price__wrap-input">
                            <input class="slider-price__input" id="slider-price_min" placeholder="Min" />
                            <span>-</span>
                            <input class="slider-price__input" id="slider-price_max" placeholder="Max" />
                        </span>
                    </div>

                    <!-- Action Buttons - simple full-width buttons -->
                    <div style="margin-top: 20px;">
                        <button class="btn-filter-primary" onclick="applyFilters()">APPLY FILTERS</button>
                        <button class="btn-filter-secondary" onclick="resetFilters()">RESET ALL</button>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection

@push('page-ajax')
<script>
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

    function setView(view) {
        fetch("{{ route('set.view.mode') }}", {
            method: 'POST', headers: {'Content-Type':'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            body: JSON.stringify({view_mode: view})
        }).then(response => {
            // reload page to apply new view mode
            window.location.reload();
        }).catch(err => { console.error(err); });
    }

    function applyFilters() {
        // Collect selected filters and submit GET to listings-filter
        const params = new URLSearchParams();
        // Years
        document.querySelectorAll('#sidebarFilters input[name="year[]"]:checked').forEach(e => params.append('year[]', e.value));
        // Condition
        const cond = document.querySelector('#sidebarFilters input[name="condition"]:checked'); if (cond) params.append('condition[]', cond.value);
        // Price
        const min = document.getElementById('slider-price_min')?.value; const max = document.getElementById('slider-price_max')?.value;
        if (min) params.append('price_min', min.replace(/[^0-9]/g,''));
        if (max) params.append('price_max', max.replace(/[^0-9]/g,''));
        const url = "{{ url('/listings-filter') }}" + '?' + params.toString();
        window.location.href = url;
    }

    function resetFilters() {
        document.querySelectorAll('#sidebarFilters input[type="checkbox"], #sidebarFilters input[type="radio"]').forEach(i => i.checked = false);
        document.getElementById('modelSearch').value = '';
        document.getElementById('sortVehicles').value = '';
        // Reset slider via noUiSlider if available
        const slider = document.getElementById('slider-price');
        if (slider && slider.noUiSlider) {
            slider.noUiSlider.set([0, 500000]);
        }
        // Optionally reapply filters
        applyFilters();
    }
</script>
@endpush
