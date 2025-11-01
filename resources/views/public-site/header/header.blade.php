<!-- header -->
<header id="header" class="defualt">
    <!-- header top -->
    <div class="topbar hidden-on-992">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="text-center topbar-left text-lg-start">
                        <ul class="list-inline">
                            <li><a href="mailto:villoauto@gmail.com"><i class="fa fa-envelope-o"> </i>
                                    villoauto@gmail.com</a></li>
                            <li> <i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="text-center topbar-right text-lg-end">
                        <ul class="list-inline">
                            <li><a href="tel:+94773116657"><i class="fa fa-phone"></i> 077 311 6657</a></li>
                            <li><a href="https://www.facebook.com/p/Villo-Auto-Cars-100083298821557/"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/villo_auto_cars/"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li><a href="https://wa.me/+94773116657"><i class="fa fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header bottom -->
    <div class="bg-white menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="bg-white menu-list-items my-shadow">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 position-relative">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li class="d-flex justify-content-between">
                                    <a href="index.html"><img id="logo_img" src="{{ asset('/assets/images/va-logo.png') }}"
                                            style="border-radius: 9999px; background-color: white; aspect-ratio: 1/1;"
                                            alt="logo"> </a>
                                    <!-- Mobile Offcanvas Toggle Button -->
                                    <button class="navbar-toggler d-lg-none" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                                        aria-controls="offcanvasNavbar">
                                        <svg style="scale: 2.5;" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="black" class="bi bi-list" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li class="{{ request()->is('/') ? 'active' : '' }}">
                                    <a href="/">Home</a>
                                </li>
                                <li class="{{ request()->is('all-services') ? 'active' : '' }}">
                                    <a href="/all-services">Services</a>
                                </li>
                                <li class="{{ request()->is('about') ? 'active' : '' }}">
                                    <a href="/about">About Us</a>
                                </li>
                                <li class="{{ request()->is('gallery') ? 'active' : '' }}">
                                    <a href="/gallery">Gallery</a>
                                </li>
                                <li class="{{ request()->is('contact') ? 'active' : '' }}">
                                    <a href="/contact">Contact Us</a>
                                </li>
                                <li class="{{ request()->is('listings') || request()->is('/') || request()->is('login') ? 'hidden' : '' }}">
                                    <form method="GET" action="/listings">
                                        <div class="search-top">
                                            <a class="search-btn not_click d-none d-lg-block"
                                                href="javascript:void(0);">Search Button</a>
                                            <div class="search-box not-click">
                                                <div class="row">
                                                    <div class="col-xl-2 col-md-4 col-sm-6">
                                                        <div class="selected-box">
                                                            <select name="make" class="selectpicker">
                                                                <option value="">Select Make</option>
                                                                @foreach ($makes as $make)
                                                                <option value="{{ $make->name }}">{{ $make->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-md-4 col-sm-6">
                                                        <div class="selected-box">
                                                            <select name="model" class="selectpicker">
                                                                <option value="">Select Model</option>
                                                                @foreach ($vehicles as $vehicle)
                                                                <option value="{{ $vehicle->model }}">{{ $vehicle->model }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-md-4 col-sm-6">
                                                        <div class="selected-box">
                                                            <select name="year" class="selectpicker">
                                                                <option value="">Select Year</option>
                                                                @foreach ($years as $year)
                                                                <option value="{{ $year->name }}">{{ $year->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-md-4 col-sm-6">
                                                        <div class="selected-box">
                                                            <select name="body" class="selectpicker">
                                                                <option value="">Select Body</option>
                                                                @foreach ($bodies as $body)
                                                                <option value="{{ $body->name }}">{{ $body->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-md-4 col-sm-6">
                                                        <div class="selected-box">
                                                            <select name="condition" class="selectpicker">
                                                                <option value="">Select Condition</option>
                                                                @foreach ($conditions as $condition)
                                                                <option value="{{ $condition->name }}">{{ $condition->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-md-4 col-sm-6">
                                                        <div class="text-center">
                                                            <button class="button red" type="submit">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>

<!-- Mobile Offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img src="{{ asset('/assets/images/va-logo.png') }}" alt="logo"
                style="height: 40px; border-radius: 50%; background-color: white;">
            Villo Auto Cars
        </h5>
        <button type="button" class="text-black bg-white btn-close" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Mobile Navigation Links -->
        <ul class="navbar-nav h-100 d-flex justify-content-center align-items-center">
            <li class="nav-item list-style-none">
                <a class="nav-link active" href="#">
                    <i class="fa fa-home me-2"></i>Home
                </a>
            </li>
            <li class="nav-item list-style-none">
                <a class="nav-link" href="#">
                    <i class="fa fa-cog me-2"></i>Services
                </a>
            </li>
            <li class="nav-item list-style-none">
                <a class="nav-link" href="#">
                    <i class="fa fa-info-circle me-2"></i>About Us
                </a>
            </li>
            <li class="nav-item list-style-none">
                <a class="nav-link" href="#">
                    <i class="fa fa-image me-2"></i>Gallery
                </a>
            </li>
            <li class="nav-item list-style-none">
                <a class="nav-link" href="#">
                    <i class="fa fa-envelope me-2"></i>Contact Us
                </a>
            </li>
        </ul>

        <!--hr (hidden)-->
        <hr class="hidden mt-3">

        <!-- Mobile Search Section (hidden) -->
        <div class="hidden search-mobile">
            <h6 class="pt-3 mb-3"><i class="fa fa-search me-2"></i>Vehicle Search</h6>
            <div class="row g-2">
                <div class="col-12">
                    <select class="mb-2 form-select">
                        <option>Make</option>
                        <option>BMW</option>
                        <option>Honda</option>
                        <option>Hyundai</option>
                        <option>Nissan</option>
                        <option>Mercedes Benz</option>
                    </select>
                </div>
                <div class="col-12">
                    <select class="mb-2 form-select">
                        <option>Model</option>
                        <option>3-Series</option>
                        <option>Carrera</option>
                        <option>GT-R</option>
                        <option>Cayenne</option>
                        <option>Mazda6</option>
                        <option>Macan</option>
                    </select>
                </div>
                <div class="col-12">
                    <select class="mb-2 form-select">
                        <option>Year</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                    </select>
                </div>
                <div class="col-12">
                    <select class="mb-2 form-select">
                        <option>Body style</option>
                        <option>2dr Car</option>
                        <option>4dr Car</option>
                        <option>Convertible</option>
                        <option>Sedan</option>
                        <option>Sports Utility</option>
                    </select>
                </div>
                <div class="col-12">
                    <select class="mb-2 form-select">
                        <option>Vehicle Status</option>
                        <option>Condition</option>
                        <option>All Conditions</option>
                        <option>Brand New</option>
                        <option>Slightly Used</option>
                        <option>Used</option>
                    </select>
                </div>
                <div class="col-12">
                    <button class="search-btn-custom w-100" type="button">Search Vehicles</button>
                </div>
            </div>
        </div>
    </div>
</div>