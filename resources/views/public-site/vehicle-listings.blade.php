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

                    {{-- Static Vehicle Cards (examples) --}}
                    <article class="card clearfix">
                        <div class="card__img">
                            <img class="img-responsive" src="{{ asset('NewAssts/media/cards/1.jpg') }}" height="196" width="235" alt="foto" />
                        </div>
                        <div class="card__inner">
                            <h2 class="card__title ui-title-inner">MERCEDES-BENZ SLR MCLAREN</h2>
                            <div class="decor-1"></div>
                            <div class="card__description">
                                <p>
                                    In a pickup market gone fancy, the Silverado sticks to
                                    its basic-truck recipe. The steering is accurate and the
                                    Silverado ...
                                </p>
                            </div>
                            <ul class="card__list list-unstyled">
                                <li class="card-list__row"><span class="card-list__title">Body Style:</span><span class="card-list__info">Sedan</span></li>
                                <li class="card-list__row"><span class="card-list__title">Engine:</span><span class="card-list__info">DOHC 24-valve V-6</span></li>
                                <li class="card-list__row"><span class="card-list__title">Mileage:</span><span class="card-list__info">35,000 KM</span></li>
                                <li class="card-list__row"><span class="card-list__title">Color:</span><span class="card-list__info">White</span></li>
                                <li class="card-list__row"><span class="card-list__title">Transmission:</span><span class="card-list__info">6-Speed Auto</span></li>
                                <li class="card-list__row"><span class="card-list__title">Specs</span><span class="card-list__info">2-Passenger, 2-Door</span></li>
                            </ul>
                            <div class="card__price">PRICE:<span class="card__price-number">Rs. 33,90500</span></div>
                        </div>
                    </article>

                    <article class="card clearfix">
                        <div class="card__img">
                            <img class="img-responsive" src="{{ asset('NewAssts/media/cards/2.jpg') }}" height="196" width="235" alt="foto" />
                            <span class="card__wrap-label"><span class="card__label">FEATURED</span></span>
                        </div>
                        <div class="card__inner">
                            <h2 class="card__title ui-title-inner">BENTLEY CONTINENTAL Supersports</h2>
                            <div class="decor-1"></div>
                            <div class="card__description">
                                <p>
                                    In a pickup market gone fancy, the Silverado sticks to
                                    its basic-truck recipe. The steering is accurate and the
                                    Silverado ...
                                </p>
                            </div>
                            <ul class="card__list list-unstyled">
                                <li class="card-list__row"><span class="card-list__title">Body Style:</span><span class="card-list__info">Sedan</span></li>
                                <li class="card-list__row"><span class="card-list__title">Engine:</span><span class="card-list__info">DOHC 24-valve V-6</span></li>
                                <li class="card-list__row"><span class="card-list__title">Mileage:</span><span class="card-list__info">35,000 KM</span></li>
                                <li class="card-list__row"><span class="card-list__title">Color:</span><span class="card-list__info">White</span></li>
                                <li class="card-list__row"><span class="card-list__title">Transmission:</span><span class="card-list__info">6-Speed Auto</span></li>
                                <li class="card-list__row"><span class="card-list__title">Specs</span><span class="card-list__info">2-Passenger, 2-Door</span></li>
                            </ul>
                            <div class="card__price">PRICE:<span class="card__price-number">Rs. 29,41500</span></div>
                        </div>
                    </article>

                    <article class="card clearfix">
                        <div class="card__img">
                            <img class="img-responsive" src="{{ asset('NewAssts/media/cards/3.jpg') }}" height="196" width="235" alt="foto" />
                        </div>
                        <div class="card__inner">
                            <h2 class="card__title ui-title-inner">2015 Ferrari FXX</h2>
                            <div class="decor-1"></div>
                            <div class="card__description">
                                <p>
                                    In a pickup market gone fancy, the Silverado sticks to
                                    its basic-truck recipe. The steering is accurate and the
                                    Silverado ...
                                </p>
                            </div>
                            <ul class="card__list list-unstyled">
                                <li class="card-list__row"><span class="card-list__title">Body Style:</span><span class="card-list__info">Sedan</span></li>
                                <li class="card-list__row"><span class="card-list__title">Engine:</span><span class="card-list__info">DOHC 24-valve V-6</span></li>
                                <li class="card-list__row"><span class="card-list__title">Mileage:</span><span class="card-list__info">35,000 KM</span></li>
                                <li class="card-list__row"><span class="card-list__title">Color:</span><span class="card-list__info">White</span></li>
                                <li class="card-list__row"><span class="card-list__title">Transmission:</span><span class="card-list__info">6-Speed Auto</span></li>
                                <li class="card-list__row"><span class="card-list__title">Specs</span><span class="card-list__info">2-Passenger, 2-Door</span></li>
                            </ul>
                            <div class="card__price">PRICE:<span class="card__price-number">Rs. 14,49500</span></div>
                        </div>
                    </article>


                    <!-- Static Pagination (template) -->
                    <ul class="pagination">
                        <li><a href="javascript:void(0);">PREV</a></li>
                        <li class="active"><a href="javascript:void(0);">1</a></li>
                        <li><a href="javascript:void(0);">2</a></li>
                        <li><a href="javascript:void(0);">3</a></li>
                        <li><a href="javascript:void(0);">4</a></li>
                        <li><a href="javascript:void(0);">5</a></li>
                        <li><a href="javascript:void(0);">NEXT</a></li>
                    </ul>

                </main>
            </div>

            <!-- ENHANCED SIDEBAR WITH FILTERS -->
            <div class="col-md-3" id="sidebarFilters">
                <aside class="sidebar sidebar-enhanced">
                    <h3 class="filter-section-title">Filter Vehicles</h3>

                    <!-- Year Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)"><h4>Year</h4><span class="filter-arrow">▼</span></div>
                        <div class="filter-content">
                            <div class="filter-options">
                                <div class="filter-option"><input type="checkbox" id="year-2024" name="year[]" value="2024"><label for="year-2024">2024</label><span class="filter-count">(12)</span></div>
                                <div class="filter-option"><input type="checkbox" id="year-2023" name="year[]" value="2023"><label for="year-2023">2023</label><span class="filter-count">(25)</span></div>
                                <div class="filter-option"><input type="checkbox" id="year-2022" name="year[]" value="2022"><label for="year-2022">2022</label><span class="filter-count">(18)</span></div>
                                <div class="filter-option"><input type="checkbox" id="year-2021" name="year[]" value="2021"><label for="year-2021">2021</label><span class="filter-count">(15)</span></div>
                                <div class="filter-option"><input type="checkbox" id="year-2020" name="year[]" value="2020"><label for="year-2020">2020</label><span class="filter-count">(22)</span></div>
                                <div class="filter-option"><input type="checkbox" id="year-2019" name="year[]" value="2019"><label for="year-2019">2019</label><span class="filter-count">(19)</span></div>
                                <div class="filter-option"><input type="checkbox" id="year-older" name="year[]" value="older"><label for="year-older">2018 & Older</label><span class="filter-count">(45)</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Condition Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)"><h4>Condition</h4><span class="filter-arrow">▼</span></div>
                        <div class="filter-content">
                            <div class="filter-options">
                                <div class="filter-option"><input type="radio" id="condition-new" name="condition" value="new"><label for="condition-new">Brand New</label><span class="filter-count">(35)</span></div>
                                <div class="filter-option"><input type="radio" id="condition-used" name="condition" value="used"><label for="condition-used">Used</label><span class="filter-count">(89)</span></div>
                                <div class="filter-option"><input type="radio" id="condition-certified" name="condition" value="certified"><label for="condition-certified">Certified Pre-Owned</label><span class="filter-count">(24)</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Body Type Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)"><h4>Body</h4><span class="filter-arrow">▼</span></div>
                        <div class="filter-content"><div class="filter-options">
                            <div class="filter-option"><input type="checkbox" id="body-sedan" name="body[]" value="sedan"><label for="body-sedan">Sedan</label><span class="filter-count">(42)</span></div>
                            <div class="filter-option"><input type="checkbox" id="body-suv" name="body[]" value="suv"><label for="body-suv">SUV</label><span class="filter-count">(38)</span></div>
                            <div class="filter-option"><input type="checkbox" id="body-coupe" name="body[]" value="coupe"><label for="body-coupe">Coupe</label><span class="filter-count">(15)</span></div>
                            <div class="filter-option"><input type="checkbox" id="body-hatchback" name="body[]" value="hatchback"><label for="body-hatchback">Hatchback</label><span class="filter-count">(28)</span></div>
                            <div class="filter-option"><input type="checkbox" id="body-convertible" name="body[]" value="convertible"><label for="body-convertible">Convertible</label><span class="filter-count">(8)</span></div>
                            <div class="filter-option"><input type="checkbox" id="body-wagon" name="body[]" value="wagon"><label for="body-wagon">Wagon</label><span class="filter-count">(12)</span></div>
                            <div class="filter-option"><input type="checkbox" id="body-van" name="body[]" value="van"><label for="body-van">Van</label><span class="filter-count">(18)</span></div>
                        </div></div>
                    </div>

                    <!-- Make Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)"><h4>Make</h4><span class="filter-arrow">▼</span></div>
                        <div class="filter-content"><div class="filter-options">
                            <div class="filter-option"><input type="checkbox" id="make-audi" name="make[]" value="audi"><label for="make-audi">Audi</label><span class="filter-count">(5)</span></div>
                            <div class="filter-option"><input type="checkbox" id="make-bentley" name="make[]" value="bentley"><label for="make-bentley">Bentley</label><span class="filter-count">(10)</span></div>
                            <div class="filter-option"><input type="checkbox" id="make-bmw" name="make[]" value="bmw"><label for="make-bmw">BMW</label><span class="filter-count">(70)</span></div>
                            <div class="filter-option"><input type="checkbox" id="make-chevrolet" name="make[]" value="chevrolet"><label for="make-chevrolet">Chevrolet</label><span class="filter-count">(6)</span></div>
                            <div class="filter-option"><input type="checkbox" id="make-mercedes" name="make[]" value="mercedes"><label for="make-mercedes">Mercedes-Benz</label><span class="filter-count">(80)</span></div>
                            <div class="filter-option"><input type="checkbox" id="make-landrover" name="make[]" value="landrover"><label for="make-landrover">Land Rover</label><span class="filter-count">(36)</span></div>
                            <div class="filter-option"><input type="checkbox" id="make-toyota" name="make[]" value="toyota"><label for="make-toyota">Toyota</label><span class="filter-count">(95)</span></div>
                            <div class="filter-option"><input type="checkbox" id="make-honda" name="make[]" value="honda"><label for="make-honda">Honda</label><span class="filter-count">(72)</span></div>
                            <div class="filter-option"><input type="checkbox" id="make-nissan" name="make[]" value="nissan"><label for="make-nissan">Nissan</label><span class="filter-count">(48)</span></div>
                        </div></div>
                    </div>

                    <!-- Transmission Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)"><h4>Transmission</h4><span class="filter-arrow">▼</span></div>
                        <div class="filter-content"><div class="filter-options">
                            <div class="filter-option"><input type="checkbox" id="trans-auto" name="transmission[]" value="automatic"><label for="trans-auto">Automatic</label><span class="filter-count">(112)</span></div>
                            <div class="filter-option"><input type="checkbox" id="trans-manual" name="transmission[]" value="manual"><label for="trans-manual">Manual</label><span class="filter-count">(36)</span></div>
                            <div class="filter-option"><input type="checkbox" id="trans-cvt" name="transmission[]" value="cvt"><label for="trans-cvt">CVT</label><span class="filter-count">(8)</span></div>
                        </div></div>
                    </div>

                    <!-- Exterior Color Filter -->
                    <div class="filter-dropdown">
                        <div class="filter-header" onclick="toggleFilter(this)"><h4>Exterior Color</h4><span class="filter-arrow">▼</span></div>
                        <div class="filter-content"><div class="filter-options">
                            <div class="filter-option"><input type="checkbox" id="color-white" name="exterior_color[]" value="white"><label for="color-white">White</label><span class="filter-count">(45)</span></div>
                            <div class="filter-option"><input type="checkbox" id="color-black" name="exterior_color[]" value="black"><label for="color-black">Black</label><span class="filter-count">(38)</span></div>
                            <div class="filter-option"><input type="checkbox" id="color-silver" name="exterior_color[]" value="silver"><label for="color-silver">Silver</label><span class="filter-count">(32)</span></div>
                            <div class="filter-option"><input type="checkbox" id="color-gray" name="exterior_color[]" value="gray"><label for="color-gray">Gray</label><span class="filter-count">(28)</span></div>
                            <div class="filter-option"><input type="checkbox" id="color-red" name="exterior_color[]" value="red"><label for="color-red">Red</label><span class="filter-count">(15)</span></div>
                            <div class="filter-option"><input type="checkbox" id="color-blue" name="exterior_color[]" value="blue"><label for="color-blue">Blue</label><span class="filter-count">(22)</span></div>
                            <div class="filter-option"><input type="checkbox" id="color-other" name="exterior_color[]" value="other"><label for="color-other">Other Colors</label><span class="filter-count">(16)</span></div>
                        </div></div>
                    </div>

                    <!-- Interior Color Filter -->
                    <div class="filter-dropdown active">
                        <div class="filter-header" onclick="toggleFilter(this)"><h4>Interior Color</h4><span class="filter-arrow">▼</span></div>
                        <div class="filter-content"><div class="filter-options">
                            <div class="filter-option"><input type="checkbox" id="int-black" name="interior_color[]" value="black"><label for="int-black">Black</label><span class="filter-count">(65)</span></div>
                            <div class="filter-option"><input type="checkbox" id="int-beige" name="interior_color[]" value="beige"><label for="int-beige">Beige</label><span class="filter-count">(42)</span></div>
                            <div class="filter-option"><input type="checkbox" id="int-gray" name="interior_color[]" value="gray"><label for="int-gray">Gray</label><span class="filter-count">(35)</span></div>
                            <div class="filter-option"><input type="checkbox" id="int-brown" name="interior_color[]" value="brown"><label for="int-brown">Brown</label><span class="filter-count">(18)</span></div>
                            <div class="filter-option"><input type="checkbox" id="int-tan" name="interior_color[]" value="tan"><label for="int-tan">Tan</label><span class="filter-count">(12)</span></div>
                            <div class="filter-option"><input type="checkbox" id="int-other" name="interior_color[]" value="other"><label for="int-other">Other Colors</label><span class="filter-count">(8)</span></div>
                        </div></div>
                    </div>

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
        // Condition (single radio will be appended as array)
        const cond = document.querySelector('#sidebarFilters input[name="condition"]:checked'); if (cond) params.append('condition[]', cond.value);
        // Body
        document.querySelectorAll('#sidebarFilters input[name="body[]"]:checked').forEach(e => params.append('body[]', e.value));
        // Make
        document.querySelectorAll('#sidebarFilters input[name="make[]"]:checked').forEach(e => params.append('make[]', e.value));
        // Transmission
        document.querySelectorAll('#sidebarFilters input[name="transmission[]"]:checked').forEach(e => params.append('transmission[]', e.value));
        // Exterior Color
        document.querySelectorAll('#sidebarFilters input[name="exterior_color[]"]:checked').forEach(e => params.append('exterior_color[]', e.value));
        // Interior Color
        document.querySelectorAll('#sidebarFilters input[name="interior_color[]"]:checked').forEach(e => params.append('interior_color[]', e.value));
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
