@extends('layouts.app')

@section('content')

    <!--hero (large screens)-->
    <div id="sliderpro1" class="slider-pro main-slider">
        <div class="sp-slides">
            <div class="sp-slide">
                <img class="sp-image" src="{{ asset('NewAssts/media/main-slider/1.jpg') }}" data-src="{{ asset('NewAssts/media/main-slider/1.jpg') }}" data-retina="{{ asset('NewAssts/media/main-slider/1.jpg') }}" alt="img" />
                <div class="item-wrap sp-layer sp-padding" data-horizontal="100" data-vertical="300" data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
                    <div class="main-slider__inner text-left">
                        <div class="custom-caption">
                            <a class="main-slider__btn btn-effect" href="javascript:void(0);"><span class="main-slider__btn_inner">Brand New Arrival</span></a>
                            <div class="main-slider__title">2020 Toyota Axio Hybrid</div>
                            <div class="main-slider__subtitle">Reliable Performance & Exceptional Fuel Efficiency</div>
                            <div class="decor-1"></div>
                            <div class="main-slider__text">Starts from</div>
                            <div><span class="main-slider__price">Rs. 7,850,000</span><a class="main-slider__link" href="javascript:void(0);"><i class="icon fa fa-caret-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sp-slide">
                <img class="sp-image" src="{{ asset('NewAssts/media/main-slider/2.jpg') }}" data-src="{{ asset('NewAssts/media/main-slider/2.jpg') }}" data-retina="{{ asset('NewAssts/media/main-slider/2.jpg') }}" alt="img" />
                <div class="item-wrap sp-layer sp-padding" data-horizontal="100" data-vertical="300" data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
                    <div class="main-slider__inner text-left">
                        <div class="custom-caption">
                            <a class="main-slider__btn btn-effect" href="javascript:void(0);"><span class="main-slider__btn_inner">Featured Deal</span></a>
                            <div class="main-slider__title">2019 Honda Vezel Z</div>
                            <div class="main-slider__subtitle">Stylish Design with Advanced Safety Features</div>
                            <div class="decor-1"></div>
                            <div class="main-slider__text">Starts from</div>
                            <div><span class="main-slider__price">Rs. 8,450,000</span><a class="main-slider__link" href="javascript:void(0);"><i class="icon fa fa-caret-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--hero (small screens)-->
    <div id="sliderpro2" class="slider-pro main-slider">
        <div class="sp-slides">
            <div class="sp-slide">
                <img class="sp-image" src="{{ asset('NewAssts/media/main-slider/1.jpg') }}" data-src="{{ asset('NewAssts/media/main-slider/1.jpg') }}" data-retina="{{ asset('NewAssts/media/main-slider/1.jpg') }}" alt="img" />
                <div class="item-wrap sp-layer sp-padding max-lg-larger" data-horizontal="100" data-vertical="80" data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
                    <div class="main-slider__inner text-left">
                        <div class="custom-caption">
                            <a class="main-slider__btn btn-effect" href="javascript:void(0);"><span class="main-slider__btn_inner">Brand New Arrival</span></a>
                            <div class="main-slider__title">2020 Toyota Axio</div>
                            <div class="main-slider__subtitle">Reliable Performance & Exceptional Fuel Efficiency</div>
                            <div class="decor-1"></div>
                            <div class="main-slider__text">Starts from</div>
                            <div><span class="main-slider__price">Rs. 7,850,000</span><a class="main-slider__link" href="javascript:void(0);"><i class="icon fa fa-caret-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sp-slide">
                <img class="sp-image" src="{{ asset('NewAssts/media/main-slider/2.jpg') }}" data-src="{{ asset('NewAssts/media/main-slider/2.jpg') }}" data-retina="{{ asset('NewAssts/media/main-slider/2.jpg') }}" alt="img" />
                <div class="item-wrap sp-layer sp-padding max-lg-larger" data-horizontal="100" data-vertical="80" data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
                    <div class="main-slider__inner text-left">
                        <div class="custom-caption">
                            <a class="main-slider__btn btn-effect" href="javascript:void(0);"><span class="main-slider__btn_inner">Featured Deal</span></a>
                            <div class="main-slider__title">2019 Honda Vezel Z</div>
                            <div class="main-slider__subtitle">Stylish Design with Advanced Safety Features</div>
                            <div class="decor-1"></div>
                            <div class="main-slider__text">Starts from</div>
                            <div><span class="main-slider__price">Rs. 8,450,000</span><a class="main-slider__link" href="javascript:void(0);"><i class="icon fa fa-caret-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start filter container -->
    <div class="container filteringpart">
        <div class="inventory-filter">
            <div class="row g-4">
                <div class="col-lg-8 col-12">
                    <div class=" g-3">
                        <div class="col-md-4 col-12">
                            <label class="form-label w-100">Select Make</label>
                            <select class="form-select w-100">
                                <option selected>--Any Make--</option>
                                <option>Audi</option>
                                <option>BMW</option>
                                <option>Ferrari</option>
                                <option>Ford</option>
                                <option>Honda</option>
                                <option>Lamborghini</option>
                                <option>Lexus</option>
                                <option>Mercedes-Benz</option>
                                <option>Nissan</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label w-100">Select Model</label>
                            <select class="form-select w-100">
                                <option selected>--Any Model--</option>
                                <option>Accord</option>
                                <option>Camry</option>
                                <option>Civic</option>
                                <option>Corolla</option>
                                <option>F-150</option>
                                <option>Model 3</option>
                                <option>Model S</option>
                                <option>Mustang</option>
                                <option>Silverado</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label w-100">Select Body Style</label>
                            <select class="form-select w-100">
                                <option selected>--Any Body Style--</option>
                                <option>Convertible</option>
                                <option>Coupe</option>
                                <option>Hatchback</option>
                                <option>Pickup Truck</option>
                                <option>Sedan</option>
                                <option>SUV</option>
                                <option>Van</option>
                                <option>Wagon</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label w-100">Select Mileage</label>
                            <select class="form-select w-100">
                                <option selected>--Any Mileage--</option>
                                <option>Under 10,000 miles</option>
                                <option>10,000 - 30,000 miles</option>
                                <option>30,000 - 50,000 miles</option>
                                <option>50,000 - 75,000 miles</option>
                                <option>75,000 - 100,000 miles</option>
                                <option>Over 100,000 miles</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label w-100">Select Transmission</label>
                            <select class="form-select w-100">
                                <option selected>--Any Transmission--</option>
                                <option>Automatic</option>
                                <option>Manual</option>
                                <option>CVT</option>
                                <option>Semi-Automatic</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label w-100">Select Condition</label>
                            <select class="form-select w-100">
                                <option selected>--Any Condition--</option>
                                <option>New</option>
                                <option>Used</option>
                                <option>Certified Pre-Owned</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="price-section">
                        <div class="price-header">Price Range</div>
                        <div class="price-value" id="priceRangeDisplay">Rs. 6,900 - Rs. 801,700</div>
                        <div class="slider-container">
                            <div id="sliderTrack"></div>
                            <div id="sliderRange"></div>
                            <input type="range" min="6900" max="801700" step="1000" value="6900" id="priceMin">
                            <input type="range" min="6900" max="801700" step="1000" value="801700" id="priceMax">
                        </div>
                        <a href="{{ url('/vehicle-listings') }}" class="btn-search btn btn-primary">Search Inventory</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about us -->
    <div class="section_default section_mod-e section-bg-2 wow bounceInRight" style="padding-top: 0px;" data-wow-duration="2s">
        <section class="section_mod-d">
            <div class="container">
                <div class="row"><div class="col-xs-12"><h2 class="ui-title-block">About Us</h2><div class="ui-subtitle-block_mod-b">Serving Pilimathalawa with quality vehicles & trusted customer care</div></div></div>
                <div class="row"><div class="col-md-5">
                    <h3 class="ui-title-inner"><i class="decor-3 fa fa-caret-right"></i>Villo Auto Cars – Your trusted vehicle dealer in Pilimathalawa</h3>
                    <div class="decor-1 decor-1_mod-c"></div>
                    <div class="ui-description"><p>Villo Auto Cars is a family-owned automobile dealer based in Pilimathalawa, Sri Lanka. We specialise in both brand new and reconditioned cars, offering honest pricing and genuine mileage. Whether you're looking for compact city cars or rugged SUVs, we pride ourselves on delivering vehicles that meet your needs and budget.</p></div>
                    <p>From selection to after-sales, our team is committed to transparent service. We assist with financing options, complete documentation, and help you understand all costs involved. We aim to make buying a vehicle stress-free and trustworthy.</p>
                    <p>Located conveniently in Pilimathalawa, Villo Auto Cars has built a reputation of integrity, quality, and customer satisfaction throughout the North Western Province.</p>
                    <a class="link" href="#">Wide inventory of cars in stock</a>
                    <div class="decor-1"></div>
                    <a class="link" href="#">Genuine imported & local vehicles</a>
                    <div class="decor-1"></div>
                    <a class="link" href="#">Full support: financing, servicing & documentation</a>
                </div></div>
            </div>
        </section>
    </div>

    <!-- services -->
    <div class="wrap-section-border wow bounceInUp" data-wow-duration="2s">
        <section class="section_mod-b section-bg section-bg_primary" style="padding-top: 30px; padding-bottom: 0px; height: fit-content;">
            <div class="bg-inner border-section-top border-section-top_mod-a"><div class="container"><div class="row"><div class="col-xs-12">
                <h2 class="ui-title-block ui-title-block_mod-a text-center">Our Services</h2>
                <div class="ui-subtitle-block_mod-a">Comprehensive vehicle solutions for your convenience</div>
                <div class="slider-services owl-carousel owl-theme owl-theme_mod-a enable-owl-carousel" data-min480="2" data-min768="3" data-min992="4" data-min1200="4" data-pagination="true" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true">
                    <div class="list-services"><i class="icon flaticon-car33"></i><div class="decor-1"></div><div class="list-services__inner"><h3 class="list-services__title">Vehicle <strong>SALES</strong></h3><div class="list-services__description">Wide selection of brand-new & reconditioned cars from trusted brands.</div></div></div>
                    <div class="list-services"><i class="icon flaticon-transport320"></i><div class="decor-1"></div><div class="list-services__inner"><h3 class="list-services__title">Vehicle <strong>IMPORTS</strong></h3><div class="list-services__description">Direct import services for custom vehicle orders from Japan & beyond.</div></div></div>
                    <div class="list-services"><i class="icon flaticon-automobile8"></i><div class="decor-1"></div><div class="list-services__inner"><h3 class="list-services__title">Financing <strong>ASSISTANCE</strong></h3><div class="list-services__description">Support with bank leasing and flexible payment plans to suit your budget.</div></div></div>
                    <div class="list-services"><i class="icon flaticon-transport391"></i><div class="decor-1"></div><div class="list-services__inner"><h3 class="list-services__title">Vehicle <strong>TRADE-INS</strong></h3><div class="list-services__description">Exchange your old car for a newer model at the best possible value.</div></div></div>
                    <div class="list-services"><i class="icon flaticon-repairing4"></i><div class="decor-1"></div><div class="list-services__inner"><h3 class="list-services__title">Documentation <strong>SUPPORT</strong></h3><div class="list-services__description">Assistance with vehicle registration, insurance, and legal paperwork.</div></div></div>
                </div></div></div><div class="border-section-bottom"></div></div></div>
        </section>
    </div>

    <!-- grid container (featured vehicles) -->
    <div class="container" style="padding-top: 30px;">
        <div class="row pt-10 mb-5 position-relative">
            <div class="col-lg-6"><div class="top-vehicles-label">Top Vehicles</div><h2 class="section-title">Featured Vehicles Suggested<br />by Dealer</h2><div class="title-underline"></div></div>
            <div class="col-lg-6 d-flex align-items-center justify-content-end h-100 d-none"><div class="d-flex h-100 justify-content-end gap-3"><button class="filter-tab active">New</button><button class="filter-tab">Certified Used</button><button class="filter-tab">Used</button></div></div>
        </div>
        <div class="row">
            <!-- add vehicle cards using NewAssts gridImg assets -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('listings') }}">
                    <div class="car-card">
                        <div class="car-image-wrapper">
                            <img src="{{ asset('NewAssts/media/gridImg/1_1.webp') }}" alt="Car Primary" class="car-image primary" />
                            <img src="{{ asset('NewAssts/media/gridImg/1_2.webp') }}" alt="Car Secondary" class="car-image secondary" />
                            <div class="image-actions"><button class="action-btn"><i class="fas fa-random"></i></button><span class="compare-tooltip">Add to compare</span><button class="action-btn"><i class="fas fa-camera"></i></button></div>
                            <div class="price-tag"><span class="price-main">Rs. 85,000</span><span class="price-msrp">MSRP: Rs. 89,000</span></div>
                        </div>
                        <div class="car-card-body"><h3 class="car-title mb-0">Toyota Urban Cruiser Taisor G 2025</h3><div class="car-location"><i class="fas fa-map-marker-alt me-2"></i>Miami, USA</div><div class="car-specs"><div class="spec-item"><i class="fas fa-gas-pump"></i><span>Petrol</span></div><div class="spec-item"><i class="fas fa-user"></i><span>20</span></div><div class="spec-item"><i class="fas fa-cog"></i><span>4.0 cc</span></div><div class="spec-item"><i class="fas fa-car"></i><span>SUV</span></div></div><div class="car-footer"><div class="car-date"><i class="far fa-calendar me-2"></i>March 26, 2021</div><div class="share-btn"><i class="fas fa-share-alt"></i></div></div></div>
                    </div>
                </a>
            </div>
            <!-- Card 2 - Ford Ranger -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('listings') }}">
                    <div class="car-card">
                        <div class="car-image-wrapper">
                            <img src="{{ asset('NewAssts/media/gridImg/2_1.webp') }}" alt="Car Primary" class="car-image primary" />
                            <img src="{{ asset('NewAssts/media/gridImg/2_2.webp') }}" alt="Car Secondary" class="car-image secondary" />
                            <div class="image-actions">
                                <button class="action-btn">
                                    <i class="fas fa-random"></i>
                                </button>
                                <button class="action-btn">
                                    <i class="fas fa-camera"></i>
                                </button>
                            </div>
                            <div class="price-tag">
                                <span class="price-main">Rs. 85,060</span>
                                <span class="price-msrp">MSRP: Rs. 89,000</span>
                            </div>
                        </div>
                        <div class="car-card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="car-title mb-0">Honda Vezel 1500cc Z Grade</h3>
                            </div>
                            <div class="car-location">
                                <i class="fas fa-map-marker-alt me-2"></i>Miami, USA
                            </div>
                            <div class="car-specs">
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <span>Petrol</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-user"></i>
                                    <span>20</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-cog"></i>
                                    <span>2.0 cc</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-car"></i>
                                    <span>SUV</span>
                                </div>
                            </div>
                            <div class="car-footer">
                                <div class="car-date">
                                    <i class="far fa-calendar me-2"></i>March 26, 2021
                                </div>
                                <div class="share-btn">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 3 - Chevrolet Corvette -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('listings') }}">
                    <div class="car-card">
                        <div class="car-image-wrapper">
                            <img src="{{ asset('NewAssts/media/gridImg/3_1.webp') }}" alt="Car Primary" class="car-image primary" />
                            <img src="{{ asset('NewAssts/media/gridImg/3_2.webp') }}" alt="Car Secondary" class="car-image secondary"
                                onmouseenter="this.parentElement.querySelector('.image-actions').style.display='block';"
                                onmouseleave="this.parentElement.querySelector('.image-actions').style.display='none';" />

                            <div class="image-actions">
                                <button class="action-btn">
                                    <i class="fas fa-random"></i>
                                </button>
                                <button class="action-btn">
                                    <i class="fas fa-camera"></i>
                                </button>
                            </div>
                            <div class="price-tag">
                                <span class="price-main">Rs. 85,000</span>
                                <span class="price-msrp">MSRP: Rs. 89,000</span>
                            </div>
                        </div>
                        <div class="car-card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="car-title mb-0">
                                    Suzuki wagon r Stingry 2017/2018
                                </h3>
                            </div>
                            <div class="car-location">
                                <i class="fas fa-map-marker-alt me-2"></i>Miami, USA
                            </div>
                            <div class="car-specs">
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <span>Petrol</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-user"></i>
                                    <span>5</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-cog"></i>
                                    <span>6.2 cc</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-car"></i>
                                    <span>SUV</span>
                                </div>
                            </div>
                            <div class="car-footer">
                                <div class="car-date">
                                    <i class="far fa-calendar me-2"></i>March 26, 2021
                                </div>
                                <div class="share-btn">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 4 - With DEAL Badge -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('listings') }}">
                    <div class="car-card">
                        <div class="car-image-wrapper">
                            <img src="{{ asset('NewAssts/media/gridImg/4_1.webp') }}" alt="Car Primary" class="car-image primary" />
                            <img src="{{ asset('NewAssts/media/gridImg/4_2.webp') }}" alt="Car Secondary" class="car-image secondary" />
                            <div class="image-actions">
                                <button class="action-btn">
                                    <i class="fas fa-random"></i>
                                </button>
                                <button class="action-btn">
                                    <i class="fas fa-camera"></i>
                                </button>
                            </div>
                            <div class="price-tag">
                                <span class="price-main">Rs. 75,000</span>
                                <span class="price-msrp">MSRP: Rs. 82,000</span>
                            </div>
                        </div>
                        <div class="car-card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="car-title mb-0">Toyota Roomy Custom G 2025</h3>
                            </div>
                            <div class="car-location">
                                <i class="fas fa-map-marker-alt me-2"></i>Miami, USA
                            </div>
                            <div class="car-specs">
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <span>Petrol</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-user"></i>
                                    <span>20</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-cog"></i>
                                    <span>3.0 cc</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-car"></i>
                                    <span>SUV</span>
                                </div>
                            </div>
                            <div class="car-footer">
                                <div class="car-date">
                                    <i class="far fa-calendar me-2"></i>March 26, 2021
                                </div>
                                <div class="share-btn">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 5 - With DEAL Badge -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('listings') }}">
                    <div class="car-card">
                        <div class="car-image-wrapper">
                            <img src="{{ asset('NewAssts/media/gridImg/5_1.webp') }}" alt="Car Primary" class="car-image primary" />
                            <img src="{{ asset('NewAssts/media/gridImg/5_2.webp') }}" alt="Car Secondary" class="car-image secondary" />
                            <div class="image-actions">
                                <button class="action-btn">
                                    <i class="fas fa-random"></i>
                                </button>
                                <button class="action-btn">
                                    <i class="fas fa-camera"></i>
                                </button>
                            </div>
                            <div class="price-tag">
                                <span class="price-main">Rs. 68,000</span>
                                <span class="price-msrp">MSRP: Rs. 74,000</span>
                            </div>
                        </div>
                        <div class="car-card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="car-title mb-0">Toyota Raize Hybrid Z 2025</h3>
                            </div>
                            <div class="car-location">
                                <i class="fas fa-map-marker-alt me-2"></i>Miami, USA
                            </div>
                            <div class="car-specs">
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <span>Petrol</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-user"></i>
                                    <span>20</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-cog"></i>
                                    <span>3.0 cc</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-car"></i>
                                    <span>SUV</span>
                                </div>
                            </div>
                            <div class="car-footer">
                                <div class="car-date">
                                    <i class="far fa-calendar me-2"></i>March 26, 2021
                                </div>
                                <div class="share-btn">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Card 6 - With DEAL Badge -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('listings') }}">
                    <div class="car-card">
                        <div class="car-image-wrapper">
                            <img src="{{ asset('NewAssts/media/gridImg/6_1.webp') }}" alt="Car Primary" class="car-image primary" />
                            <img src="{{ asset('NewAssts/media/gridImg/6_2.webp') }}" alt="Car Secondary" class="car-image secondary" />
                            <div class="image-actions">
                                <button class="action-btn">
                                    <i class="fas fa-random"></i>
                                </button>
                                <button class="action-btn">
                                    <i class="fas fa-camera"></i>
                                </button>
                            </div>
                            <div class="price-tag">
                                <span class="price-main">Rs. 55,000</span>
                                <span class="price-msrp">MSRP: Rs. 62,000</span>
                            </div>
                        </div>
                        <div class="car-card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="car-title mb-0">
                                    Kia Sonet GTX Plus 2025 - Brand New
                                </h3>
                            </div>
                            <div class="car-location">
                                <i class="fas fa-map-marker-alt me-2"></i>Miami, USA
                            </div>
                            <div class="car-specs">
                                <div class="spec-item">
                                    <i class="fas fa-gas-pump"></i>
                                    <span>Petrol</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-user"></i>
                                    <span>5</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-cog"></i>
                                    <span>3.0 cc</span>
                                </div>
                                <div class="spec-item">
                                    <i class="fas fa-car"></i>
                                    <span>Sedan</span>
                                </div>
                            </div>
                            <div class="car-footer">
                                <div class="car-date">
                                    <i class="far fa-calendar me-2"></i>March 26, 2021
                                </div>
                                <div class="share-btn">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Vehicle Import Inquiry Form -->
    <section class="section_default section_mod-e section-bg-2 wow bounceInLeft" style="padding-top: 30px; padding-bottom: 30px;" data-wow-duration="2s">
        <div class="container">
            <div class="row"><div class="col-xs-12"><h2 class="ui-title-block">Import Your Dream Vehicle</h2><div class="ui-subtitle-block_mod-b">Let us help you import the perfect vehicle tailored to your needs</div></div></div>
            <div class="row" style="margin-top: 40px;">
                <div class="col-md-8 col-md-offset-2">
                    <div class="import-inquiry-form">
                        <form id="vehicleImportForm" class="vehicle-import-form">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Full Name *</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number *</label>
                                        <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Email Address *</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Preferred Brand *</label>
                                        <select name="brand" class="form-control" required>
                                            <option value="">--Select Brand--</option>
                                            <option value="Toyota">Toyota</option>
                                            <option value="Honda">Honda</option>
                                            <option value="Nissan">Nissan</option>
                                            <option value="Mazda">Mazda</option>
                                            <option value="Suzuki">Suzuki</option>
                                            <option value="Mitsubishi">Mitsubishi</option>
                                            <option value="BMW">BMW</option>
                                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                                            <option value="Audi">Audi</option>
                                            <option value="Lexus">Lexus</option>
                                            <option value="Hyundai">Hyundai</option>
                                            <option value="Kia">Kia</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Model</label>
                                        <input type="text" name="model" class="form-control" placeholder="e.g., Prius, Vezel, Axio">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Preferred Year</label>
                                        <select name="year" class="form-control">
                                            <option value="">--Select Year--</option>
                                            <option value="2024">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="Older">Older than 2015</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Mileage Preference</label>
                                        <select name="mileage" class="form-control">
                                            <option value="">--Select Mileage--</option>
                                            <option value="Under 10,000 km">Under 10,000 km</option>
                                            <option value="10,000 - 30,000 km">10,000 - 30,000 km</option>
                                            <option value="30,000 - 50,000 km">30,000 - 50,000 km</option>
                                            <option value="50,000 - 75,000 km">50,000 - 75,000 km</option>
                                            <option value="75,000 - 100,000 km">75,000 - 100,000 km</option>
                                            <option value="Over 100,000 km">Over 100,000 km</option>
                                            <option value="No preference">No preference</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Condition *</label>
                                        <select name="condition" class="form-control" required>
                                            <option value="">--Select Condition--</option>
                                            <option value="Brand New">Brand New</option>
                                            <option value="Used">Used</option>
                                            <option value="No preference">No preference</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Additional Requirements</label>
                                        <textarea name="message" class="form-control" rows="4" placeholder="Please describe any specific requirements, budget range, or additional details..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn-import-submit"><i class="fa fa-paper-plane"></i> Submit Import Inquiry</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client logos -->
    <section class="logo-slider-section">
        <div class="logo-slider-title"><h2>Global Automotive Leaders</h2><p>Building the future of mobility together</p></div>
        <div class="swiper logo-swiper"><div class="swiper-wrapper">
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/bmw.png') }}" alt="BMW" class="logo-img"></div>
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/mbenz.png') }}" alt="Mercedes" class="logo-img"></div>
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/toyota.png') }}" alt="Toyota" class="logo-img"></div>
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/mitsubishi.png') }}" alt="Mitsubishi" class="logo-img"></div>
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/btd.png') }}" alt="BTD" class="logo-img"></div>
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/tesla.png') }}" alt="Tesla" class="logo-img"></div>
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/hyundai.png') }}" alt="Hyundai" class="logo-img"></div>
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/porsche.png') }}" alt="Porsche" class="logo-img"></div>
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/maserati.png') }}" alt="Maserati" class="logo-img"></div>
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/ferrari.png') }}" alt="Ferrari" class="logo-img"></div>
            <div class="swiper-slide logo-slide"><img src="{{ asset('NewAssts/img/brands/land-rover.png') }}" alt="Land Rover" class="logo-img"></div>
        </div></div>
    </section>

    <!--numbers-->
    <section class="section_default wow bounceInUp" data-wow-duration="2s">
        <div class="container">
            <div class="text-center"><h2 class="section-title">We are known for trend-setting styles and<br>customization.</h2><p class="section-description">For 15 years, we raising the standard of used car retailing with one of the most innovative and reliable used vehicle programmes ever created.</p></div>
            <div class="stats-container">
                <div class="stat-card"><div class="stat-icon"><i class="fas fa-warehouse"></i></div><div class="stat-number">1200+</div><div class="stat-label">Vehicles in stock</div></div>
                <div class="stat-card"><div class="stat-icon"><i class="fas fa-user-tie"></i></div><div class="stat-number">20k</div><div class="stat-label">Happy Customers</div></div>
                <div class="stat-card"><div class="stat-icon"><i class="fas fa-car"></i></div><div class="stat-number">15</div><div class="stat-label">Showrooms</div></div>
                <div class="stat-card"><div class="stat-icon"><i class="fas fa-award"></i></div><div class="stat-number">30</div><div class="stat-label">Awards</div></div>
            </div>
            <div class="text-center"><button class="cta-button">Call us today!</button></div>
        </div>
    </section>

@endsection
