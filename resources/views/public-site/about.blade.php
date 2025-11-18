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
    @include('public-site.header.header')
    @include('public-site.header.page-header', ['title' => 'ABOUT US', 'breadcrumb' => 'About Us'])
@endsection

@section('content')

<!-- Welcome / Intro Section -->
<section class="welcome-4 page-section-ptb white-bg my-section-padding welcome-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <span class="section-subtitle">Welcome to</span>
                    <h2 class="section-title">VILLO AUTO CARS</h2>
                    <div class="section-separator"></div>
                    <p class="section-description">
                        At Villo Auto Cars, we bring you the best selection of reconditioned and brand-new vehicles
                        at competitive prices. Whether you're looking for your first car, an upgrade, or a reliable
                        vehicle for your business, we've got you covered with flexible finance options and trusted
                        service.

                        Our goal is to make car ownership smooth and hassle-free. From hand-picked vehicles to
                        expert guidance, we ensure quality and trust at every step.
                        We provide full documentation assistance, flexible leasing plans, and ongoing customer
                        support long after your purchase.
                        Located in the heart of Nugegoda, we've served thousands of happy customers
                        islandwide—delivering
                        excellence, every time.
                    </p>
                </div>
            </div>
        </div>

        <div class="row features-row">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-lg-0">
                <div class="feature-box feature-item" data-index="0">
                    <div class="feature-icon-wrapper"><i class="fas fa-car feature-icon"></i></div>
                    <h6 class="feature-title">ALL BRANDS</h6>
                    <p class="feature-description">Choose from Toyota, Honda, Nissan, Suzuki, and more top-tier brands.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-lg-0">
                <div class="feature-box feature-item" data-index="1">
                    <div class="feature-icon-wrapper"><i class="fas fa-headset feature-icon"></i></div>
                    <h6 class="feature-title">CUSTOMER SUPPORT</h6>
                    <p class="feature-description">Friendly, expert support throughout your car-buying journey.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-sm-0">
                <div class="feature-box feature-item" data-index="2">
                    <div class="feature-icon-wrapper"><i class="fas fa-shield-alt feature-icon"></i></div>
                    <h6 class="feature-title">TRUSTED DEALERSHIP</h6>
                    <p class="feature-description">Reputation built on honesty, service quality, and satisfied
                        customers.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="feature-box feature-item" data-index="3">
                    <div class="feature-icon-wrapper"><i class="fas fa-wallet feature-icon"></i></div>
                    <h6 class="feature-title">AFFORDABLE OPTIONS</h6>
                    <p class="feature-description">Finance plans to suit every budget. Drive away with confidence.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our History -->
<section class="our-history white-bg page-section-ptb my-section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span>Villo Auto Cars: From humble beginnings to a trusted name</span>
                    <h2>Our History</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="timeline list-style-none">
                    <li>
                        <div class="timeline-badge">
                            <h4>01</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5>Founded in 2010</h5>
                            </div>
                            <div class="timeline-body">
                                <p>Villo Auto Cars opened its doors in Nugegoda with a mission to deliver quality
                                    vehicles at fair prices.</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge">
                            <h4>02</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5>Expanding Our Services</h5>
                            </div>
                            <div class="timeline-body">
                                <p>We expanded into offering full vehicle documentation, after-sales services, and
                                    leasing assistance.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <h4>03</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5>New Showroom Opening</h5>
                            </div>
                            <div class="timeline-body">
                                <p>Our spacious new showroom opened, allowing us to display a wide range of vehicles.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge">
                            <h4>04</h4>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5>Going Digital</h5>
                            </div>
                            <div class="timeline-body">
                                <p>We launched our website and social platforms, enabling customers across Sri Lanka to
                                    view our inventory and connect online.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Statistics -->
<section class="statistics-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa fa-car"></i></div>
                    <div class="stat-content">
                        <div class="stat-label">VEHICLES IN STOCK</div>
                        <div class="stat-number" data-target="561">561</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa fa-comments"></i></div>
                    <div class="stat-content">
                        <div class="stat-label">DEALER REVIEWS</div>
                        <div class="stat-number" data-target="856">856</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa fa-smile"></i></div>
                    <div class="stat-content">
                        <div class="stat-label">HAPPY CUSTOMER</div>
                        <div class="stat-number" data-target="789">789</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="stat-item">
                    <div class="stat-icon"><i class="fa fa-trophy"></i></div>
                    <div class="stat-content">
                        <div class="stat-label">AWARDS</div>
                        <div class="stat-number" data-target="356">356</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const statsSection = document.querySelector('.statistics-section');
        const counters = document.querySelectorAll('.stat-number');
        let started = false;

        function animateCounters() {
            counters.forEach(counter => {
                const raw = counter.getAttribute('data-target') || counter.textContent;
                const target = parseInt(String(raw).replace(/,/g, '').replace(/[^0-9]/g, ''), 10) || 0;
                let frame = 0;
                const duration = 2000;
                const fps = 60;
                const totalFrames = Math.round((duration / 1000) * fps);
                const easeOutQuad = t => t * (2 - t);

                const ticker = setInterval(() => {
                    frame++;
                    const progress = easeOutQuad(frame / totalFrames);
                    const value = Math.round(target * progress);
                    counter.textContent = value;
                    if (frame >= totalFrames) { counter.textContent = target; clearInterval(ticker); }
                }, Math.round(1000 / fps));
            });
        }

        if (!statsSection || counters.length === 0) return;
        if ('IntersectionObserver' in window) {
            const io = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => { if (entry.isIntersecting && !started) { started = true; animateCounters(); obs.disconnect(); } });
            }, { threshold: 0.3 });
            io.observe(statsSection);
        } else { animateCounters(); }
    });
</script>
@endpush

<!-- Customer Reviews Section -->
<section class="customer-reviews-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title">
                    <span>What Our Kandy Customers Say About Us</span>
                    <h2>CUSTOMER REVIEWS</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 review-col">
                <div class="review-card">
                    <div class="review-image">
                        <img src="{{ asset('NewAssts/media/gridImg/1_1.webp') }}" alt="Car Review">
                    </div>
                    <img src="{{ asset('NewAssts/media/avatar_reviews/1.jpg') }}" alt="Nishani Rathnayake"
                        class="reviewer-avatar">
                    <div class="review-content">
                        <h5 class="reviewer-name">Nishani Rathnayake</h5>
                        <span class="reviewer-title">Doctor, Kandy General Hospital</span>
                        <p class="review-text">"Excellent service and genuine spare parts availability. I've been a
                            loyal customer for 5 years and wouldn't go anywhere else for my automotive needs."</p>
                        <div class="quote-icon">"</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 review-col">
                <div class="review-card">
                    <div class="review-image">
                        <img src="{{ asset('NewAssts/media/gridImg/1_2.webp') }}" alt="Car Review">
                    </div>
                    <img src="{{ asset('NewAssts/media/avatar_reviews/2.jpg') }}" alt="Pradeep Jayasuriya"
                        class="reviewer-avatar">
                    <div class="review-content">
                        <h5 class="reviewer-name">Pradeep Jayasuriya</h5>
                        <span class="reviewer-title">Business Owner, Kandy</span>
                        <p class="review-text">"Villo Auto Cars helped me find the perfect Toyota Corolla for my family.
                            Their service was exceptional, and the financing was very competitive. Highly recommended!"
                        </p>
                        <div class="quote-icon">"</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 review-col">
                <div class="review-card">
                    <div class="review-image">
                        <img src="{{ asset('NewAssts/media/gridImg/2_1.webp') }}" alt="Car Review">
                    </div>
                    <img src="{{ asset('NewAssts/media/avatar_reviews/3.jpg') }}" alt="Samantha De Silva"
                        class="reviewer-avatar">
                    <div class="review-content">
                        <h5 class="reviewer-name">Samantha De Silva</h5>
                        <span class="reviewer-title">Teacher, Peradeniya</span>
                        <p class="review-text">"I purchased my Honda Vezel from Villo Auto Cars last year. The entire
                            process was smooth and transparent. Their after-sales service is outstanding!"</p>
                        <div class="quote-icon">"</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
