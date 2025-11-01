@extends('layouts.app')

@section('content')

<!-- Hero Swiper Section -->
<div class="swiper hero-swiper">
    <div class="swiper-wrapper">

        <!-- Slide 1 - Sports Car -->
        <div class="swiper-slide hero-slide hero-slide-1">
            <div class="hero-content">
                <h1 class="hero-title">Premium Sports Cars</h1>
                <p class="hero-subtitle">Experience the thrill of luxury performance vehicles</p>
                <a href="#" class="hero-btn">Explore Collection</a>
            </div>
        </div>

        <!-- Slide 2 - Luxury Car -->
        <div class="swiper-slide hero-slide hero-slide-2">
            <div class="hero-content">
                <h1 class="hero-title">Luxury Redefined</h1>
                <p class="hero-subtitle">Discover elegance and sophistication in every detail</p>
                <a href="#" class="hero-btn">View Luxury Cars</a>
            </div>
        </div>

        <!-- Slide 3 - Classic Car -->
        <div class="swiper-slide hero-slide hero-slide-3">
            <div class="hero-content">
                <h1 class="hero-title">Timeless Classics</h1>
                <p class="hero-subtitle">Vintage automobiles with modern engineering</p>
                <a href="#" class="hero-btn">Browse Classics</a>
            </div>
        </div>

        <!-- Slide 4 - Electric Car -->
        <div class="swiper-slide hero-slide hero-slide-4">
            <div class="hero-content">
                <h1 class="hero-title">Future of Mobility</h1>
                <p class="hero-subtitle">Sustainable electric vehicles for tomorrow's world</p>
                <a href="#" class="hero-btn">Go Electric</a>
            </div>
        </div>

    </div>

    <!-- Navigation Buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Pagination -->
    <div class="swiper-pagination"></div>
</div>

<!--search from modern-home-1.html-->
<section class="search">
    <div class="container">
        <form method="GET" action="/listings">
        <div class="search-block search-block-new">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <span>Select year</span>
                            <div class="selected-box">
                                <select name="year" class="selectpicker">
                                    <option  value="">--Select--</option>
                                    @foreach ($years as $year)
                                        <option value="{{ $year->name }}">{{ $year->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <span>Select make</span>
                            <div class="selected-box">
                                <select name="make" class="selectpicker">
                                    <option  value="">--Select--</option>
                                    @foreach ($makes as $make)
                                        <option value="{{ $make->name }}">{{ $make->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <span>Select model</span>
                            <div class="selected-box">
                                <select name="model" class="selectpicker">
                                    <option  value="">--Select--</option>
                                    @foreach ($vehicles as $vehicle)
                                        <option value="{{ $vehicle->model }}">{{ $vehicle->model }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <span>Select Mileage</span>
                            <div class="selected-box">
                                <select name="mileage" class="selectpicker">
                                    <option value="">--Select--</option>
                                    <option value="10000">≤ 10000</option>
                                    <option value="20000">≤ 20000</option>
                                    <option value="30000">≤ 30000</option>
                                    <option value="40000">≤ 40000</option>
                                    <option value="50000">≤ 50000</option>
                                    <option value="60000">≤ 60000</option>
                                    <option value="70000">≤ 70000</option>
                                    <option value="80000">≤ 80000</option>
                                    <option value="90000">≤ 90000</option>
                                    <option value="100000">≤ 100000</option>
                                    <option value="235000">≤ 235000</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <span>Select Transmission</span>
                            <div class="selected-box">
                                <select name="transmission" class="selectpicker">
                                    <option  value="">--Select--</option>
                                    @foreach ($transmissions as $transmission)
                                        <option value="{{ $transmission->name }}">{{ $transmission->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <span>Select Condition</span>
                            <div class="selected-box">
                                <select name="condition" class="selectpicker">
                                    <option  value="">--Select--</option>
                                    @foreach ($conditions as $condition)
                                        <option value="{{ $condition->name }}">{{ $condition->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="price-slide">
                        <div class="price">
                            <label class="form-label" for="amount">Price (Rs.): </label>
                            <input type="text" id="amount" name="price_range" class="amount form-control w-100"
                                value="0 - 40,000,000,000" />
                            <div id="slider-range"></div>
                            <button type="submit" class="button">Search Inventory</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</section>

<!-- welcome -->
<section class="welcome-block objects-car page-section-ptb white-bg">
    <div class="objects-left left"><img class="img-fluid objects-1" src="assets/images/objects/01.jpg" alt=""></div>
    <div class="objects-right right"><img class="img-fluid objects-2" src="assets/images/objects/02.jpg" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span>Welcome to Sri Lanka's Premier Car Dealership</span>
                    <h2>Villo Auto Cars</h2>
                    <div class="separator"></div>
                    <p>Villo Auto Cars is Kandy's most trusted automotive dealership, proudly serving the beautiful
                        hill
                        capital and surrounding Central Province for over a decade. Located in the heart of
                        <strong>Kandy, Sri Lanka</strong>, we specialize in connecting our valued customers with
                        quality
                        new and pre-owned vehicles from leading international brands including Toyota, Honda,
                        Nissan,
                        Suzuki, and Mitsubishi.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="text-center feature-box">
                    <div class="icon">
                        <i class="glyph-icon flaticon-beetle"></i>
                    </div>
                    <div class="content">
                        <h6>Premium Brands</h6>
                        <p>From Toyota's reliability to Honda's innovation, we offer the finest selection of
                            international automotive brands trusted by Sri Lankan families.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center feature-box">
                    <div class="icon">
                        <i class="glyph-icon flaticon-interface-1"></i>
                    </div>
                    <div class="content">
                        <h6>Expert Service</h6>
                        <p>Our certified technicians provide comprehensive after-sales support, genuine spare parts,
                            and
                            maintenance services for all vehicle brands.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center feature-box">
                    <div class="icon">
                        <i class="glyph-icon flaticon-key"></i>
                    </div>
                    <div class="content">
                        <h6>Trusted Dealership</h6>
                        <p>As Kandy's established automotive partner, we guarantee transparent pricing, authentic
                            documentation, and hassle-free vehicle registration.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="text-center feature-box">
                    <div class="icon">
                        <i class="glyph-icon flaticon-wallet"></i>
                    </div>
                    <div class="content">
                        <h6>Flexible Financing</h6>
                        <p>We offer competitive leasing options, bank financing assistance, and flexible payment
                            plans
                            to make your dream car affordable.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center halp-call">
                    <img class="img-fluid" src="assets/images/team/01.jpg" alt="">
                    <span>Need assistance? Call us today!</span>
                    <h2 class="text-red">077 311 6657</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- feature cars -->
<section class="feature-car bg-2 bg-overlay-black-70 page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span class="text-white">Discover our latest arrivals</span>
                    <h2 class="text-white">Featured Vehicles</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme" data-nav-arrow="true" data-items="4" data-md-items="4"
                    data-sm-items="2" data-xs-items="1" data-space="20">
                    @foreach ($vehicles as $vehicle)
                    <!--car item-->
                    <div class="item">
                        <div class="text-center car-item">
                            <div class="car-image">
                                <img class="img-fluid" src="uploads/vehicles/{{ $vehicle->main_image }}" alt="" style="aspect-ratio: 4/3; object-fit: cover;">
                                <div class="car-overlay-banner">
                                    <ul>
                                        <li><a href="/vehicle/{{ $vehicle->id }}"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="car-list">
                                <ul class="list-inline">
                                    <li><i class="fa fa-registered"></i>{{ $vehicle->year }}</li>
                                    <li><i class="fa fa-cog"></i>{{ $vehicle->transmission }}</li>
                                    <li><i class="fa fa-dashboard"></i>{{ $vehicle->mileage }}</li>
                                </ul>
                            </div>
                            <div class="car-content">
                                <div class="separator"></div>
                                <a href="/vehicle/{{ $vehicle->id }}">{{ $vehicle->model }}</a>
                                <div class="separator"></div>
                                <div class="price">
                                    <span class="new-price">LKR {{ $vehicle->price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- single car -->
<section class="bg-7">
    <div class="p-0 container-fluid">
        <div class="row g-0">
            <div class="col-lg-6 col-md-12"></div>
            <div class="text-center col-lg-6 col-md-12 gray-bg">
                <div class="custom-block-1">
                    <h2>Toyota Prius</h2>
                    <span>Drive the Future with Hybrid Technology</span>
                    <strong class="text-red">LKR 85,000</strong>
                    <span>per month</span>
                    <p>Special financing available!</p>
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- video -->
<section class="play-video popup-gallery">
    <div class="play-video-bg bg-3 bg-overlay-black-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center col-lg-8 col-md-12">
                    <h3 class="text-white">Discover why Kandy trusts Villo Auto Cars for their automotive needs!
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="text-center video-info">
                    <img class="img-fluid center-block" src="assets/images/car/24.jpg" alt="">
                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=Xd0Ok-MkqoE">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- counter -->
<section class="counter counter-style-1 light page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="text-center col-lg-3 col-sm-6">
                <div class="counter-block">
                    <i class="glyph-icon flaticon-beetle"></i>
                    <h6 class="text-black">Vehicles Sold</h6>
                    <b class="timer" data-to="2850" data-speed="10000"></b>
                </div>
            </div>
            <div class="text-center col-lg-3 col-sm-6">
                <div class="counter-block">
                    <i class="glyph-icon flaticon-interface"></i>
                    <h6 class="text-black">Happy Customers</h6>
                    <b class="timer" data-to="2650" data-speed="10000"></b>
                </div>
            </div>
            <div class="text-center col-lg-3 col-sm-6">
                <div class="mb-4 counter-block mb-sm-0">
                    <i class="glyph-icon flaticon-circle"></i>
                    <h6 class="text-black">Years of Service</h6>
                    <b class="timer" data-to="12" data-speed="10000"></b>
                </div>
            </div>
            <div class="text-center col-lg-3 col-sm-6">
                <div class="mb-0 counter-block">
                    <i class="glyph-icon flaticon-cup"></i>
                    <h6 class="text-black">Service Awards</h6>
                    <b class="timer" data-to="15" data-speed="10000"></b>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- hr (hidden) -->
<hr class="hidden gray">

<!-- Client logos -->
<section class="logo-slider-section">
    <div class="logo-slider-title">
        <h2>Global Automotive Leaders</h2>
        <p>Building the future of mobility together</p>
    </div>

    <div class="swiper logo-swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/bmw.png" alt="Porsche Logo"
                    class="logo-img">
            </div>

            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/mbenz.png" alt="Tesla Logo"
                    class="logo-img">
            </div>

            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/toyota.png" alt="Nissan Logo"
                    class="logo-img">
            </div>

            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/mitsubishi.png" alt="Hyundai Logo"
                    class="logo-img">
            </div>

            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/btd.png" alt="BMW Logo"
                    class="logo-img">
            </div>

            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/tesla.png" alt="Mercedes Logo"
                    class="logo-img">
            </div>

            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/hyundai.png" alt="Mercedes Logo"
                    class="logo-img">
            </div>

            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/porsche.png" alt="Mercedes Logo"
                    class="logo-img">
            </div>

            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/maserati.png" alt="Mercedes Logo"
                    class="logo-img">
            </div>

            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/ferrari.png" alt="Mercedes Logo"
                    class="logo-img">
            </div>

            <div class="swiper-slide logo-slide">
                <img src="assets/images/brands/land-rover.png" alt="Mercedes Logo"
                    class="logo-img">
            </div>
        </div>
    </div>
</section>

<!-- testimonials -->
@include('public-site.partials.testimonials')

@endsection

@push('page-ajax')

<!--swiper-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<!--hero swiper logic-->
<script>
    // Initialize Hero Swiper
    const heroSwiper = new Swiper('.hero-swiper', {
        // Basic settings
        direction: 'horizontal',
        loop: true,
        speed: 1000,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },

        // Autoplay
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },

        // Navigation
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // Pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: false,
        },

        // Keyboard control
        keyboard: {
            enabled: true,
            onlyInViewport: false,
        },

        // Mouse wheel control
        mousewheel: {
            thresholdDelta: 50,
            sensitivity: 1,
        },

        // Touch gestures
        touchRatio: 1,
        touchAngle: 45,
        grabCursor: true,

        // Callbacks
        on: {
            slideChange: function() {
                // Reset animations for all slides
                document.querySelectorAll('.hero-title, .hero-subtitle, .hero-btn').forEach(el => {
                    el.style.animation = 'none';
                    el.offsetHeight; // Trigger reflow
                });

                // Trigger animations for active slide
                setTimeout(() => {
                    const activeSlide = document.querySelector('.swiper-slide-active');
                    if (activeSlide) {
                        const title = activeSlide.querySelector('.hero-title');
                        const subtitle = activeSlide.querySelector('.hero-subtitle');
                        const btn = activeSlide.querySelector('.hero-btn');

                        if (title) title.style.animation = 'slideInUp 1s ease-out 0.3s forwards';
                        if (subtitle) subtitle.style.animation = 'slideInUp 1s ease-out 0.6s forwards';
                        if (btn) btn.style.animation = 'slideInUp 1s ease-out 0.9s forwards';
                    }
                }, 100);
            },

            init: function() {
                // Initialize animations for first slide
                setTimeout(() => {
                    const activeSlide = document.querySelector('.swiper-slide-active');
                    if (activeSlide) {
                        const title = activeSlide.querySelector('.hero-title');
                        const subtitle = activeSlide.querySelector('.hero-subtitle');
                        const btn = activeSlide.querySelector('.hero-btn');

                        if (title) title.style.animation = 'slideInUp 1s ease-out 0.3s forwards';
                        if (subtitle) subtitle.style.animation = 'slideInUp 1s ease-out 0.6s forwards';
                        if (btn) btn.style.animation = 'slideInUp 1s ease-out 0.9s forwards';
                    }
                }, 100);
            }
        }
    });

    // Pause autoplay on hover
    const swiperContainer = document.querySelector('.hero-swiper');
    swiperContainer.addEventListener('mouseenter', () => {
        heroSwiper.autoplay.stop();
    });
    swiperContainer.addEventListener('mouseleave', () => {
        heroSwiper.autoplay.start();
    });
</script>
<!--client logo logic-->
<script>
    // Initialize all logo swipers
    const logoSwipers = document.querySelectorAll('.logo-swiper');

    logoSwipers.forEach((swiperElement, index) => {
        new Swiper(swiperElement, {
            // Slides settings
            slidesPerView: 2,
            spaceBetween: 30,

            // Loop
            loop: true,

            // Autoplay with different speeds for variety
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
            },

            // Speed
            speed: 3000 + (index * 1000), // Different speeds for each slider

            // Continuous movement
            freeMode: true,
            freeModeMomentum: false,

            // Responsive breakpoints
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 25,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                768: {
                    slidesPerView: 5,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 6,
                    spaceBetween: 50,
                },
                1200: {
                    slidesPerView: 7,
                    spaceBetween: 60,
                }
            },

            // Disable interactions
            allowTouchMove: false,

            // CSS mode for better performance
            cssMode: false,
        });
    });
</script>
@endpush