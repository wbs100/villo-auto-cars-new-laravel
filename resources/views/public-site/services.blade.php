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
<link rel="stylesheet" href="{{ asset('NewAssts/css/services.css') }}">
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
        @include('public-site.header.page-header', ['title' => 'OUR Services', 'breadcrumb' => 'Services'])
    @endsection


@section('content')

    <main class="main-content page-services">

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon"><i class="fa fa-car"></i></div>
                            <h3 class="service-title">SUPER FAST</h3>
                            <p class="service-description">We value your time. Our team ensures lightning-fast
                                diagnostics, service, and delivery, getting you back on the road without delay.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon"><i class="fa fa-credit-card"></i></div>
                            <h3 class="service-title">AFFORDABLE</h3>
                            <p class="service-description">Enjoy premium vehicle services and competitive
                                prices. At Villo Auto Cars, we ensure top value for every rupee you spend.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon"><i class="fa fa-oil-can"></i></div>
                            <h3 class="service-title">OIL CHANGES</h3>
                            <p class="service-description">Regular oil changes are vital. We use top-grade oils
                                to extend your engine life and improve performance — quick and professional.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon"><i class="fa fa-snowflake"></i></div>
                            <h3 class="service-title">AIR CONDITIONING</h3>
                            <p class="service-description">Beat the heat with our expert A/C repairs and
                                servicing. We'll keep your vehicle's climate cool, comfortable, and running
                                efficiently.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon"><i class="fa fa-cogs"></i></div>
                            <h3 class="service-title">TRANSMISSION</h3>
                            <p class="service-description">From maintenance to complete overhauls, our
                                technicians handle manual and automatic transmissions with precision and care.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="service-card">
                            <div class="service-icon"><i class="fa fa-handshake"></i></div>
                            <h3 class="service-title">DEALERSHIP</h3>
                            <p class="service-description">Find your dream car at Villo Auto Cars. Our trusted
                                dealership offers a wide selection of quality pre-owned and new vehicles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Section -->
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

        <!-- Reliable Service Section -->
        <section class="reliable-service-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="section-heading">WE PROVIDE RELIABLE AUTO CARE SERVICES TO KEEP YOU CONFIDENTLY ON THE ROAD.</h2>
                        <p class="section-intro">At Villo Auto Cars, we combine experience, precision, and passion to deliver outstanding automotive solutions. Whether it's routine maintenance or complex repairs, our certified technicians are committed to providing exceptional service tailored to your vehicle's needs.</p>
                        <ul class="service-features">
                            <li><i class="fa fa-check"></i> Comprehensive diagnostics and inspections for all vehicle models.</li>
                            <li><i class="fa fa-check"></i> Quality-assured repairs using genuine parts and modern tools.</li>
                            <li><i class="fa fa-check"></i> Transparent service process and competitive pricing.</li>
                            <li><i class="fa fa-check"></i> Friendly, knowledgeable staff dedicated to your satisfaction.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('NewAssts/media/gridImg/2_1.webp') }}" alt="Auto Service" class="service-image">
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Service Schedule Section -->
    <section class="service-schedule-section">
        <div class="container">
            <div class="text-center mb-5">
                <p class="schedule-subtitle">This is what we do and we do it perfectly</p>
                <h2 class="schedule-title">SERVICE SCHEDULE</h2>
                <div class="title-underline"></div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <form class="service-form">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <input type="text" class="form-control" placeholder="Name*" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="email" class="form-control" placeholder="Email*" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="tel" class="form-control" placeholder="Phone*" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Comment*" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-submit">Send Your Message</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="opening-hours-box">
                        <h3 class="hours-title">OPENING HOURS</h3>
                        <div class="hours-divider"></div>
                        <ul class="hours-list">
                            <li><span class="day">Sunday</span><span class="time closed">closed</span></li>
                            <li><span class="day">Monday</span><span class="time">9:00 AM to 9:00 PM</span></li>
                            <li><span class="day">Tuesday</span><span class="time">9:00 AM to 9:00 PM</span></li>
                            <li><span class="day">Wednesday</span><span class="time">9:00 AM to 9:00 PM</span></li>
                            <li><span class="day">Thursday</span><span class="time">9:00 AM to 9:00 PM</span></li>
                            <li><span class="day">Friday</span><span class="time">9:00 AM to 9:00 PM</span></li>
                            <li><span class="day">Saturday</span><span class="time">9:00 AM to 9:00 PM</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
<script src="{{ asset('NewAssts/js/plugins-init/services-init.js') }}"></script>
@endpush
