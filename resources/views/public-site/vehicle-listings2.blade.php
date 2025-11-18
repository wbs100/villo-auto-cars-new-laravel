<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <title>Villo Auto Cars - Gallery</title>
    <link href="assets/img/favicon.png" type="image/x-icon" rel="shortcut icon" />
    <link href="assets/css/master.css" rel="stylesheet" />
    <link href="assets/css/index.css" rel="stylesheet" />
    <link href="assets/plugins/iview/css/iview.css" rel="stylesheet" />
    <link href="assets/plugins/iview/css/skin/style.css" rel="stylesheet" />

    <script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>

    <!-- SWITCHER -->
    <link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all" />
    <link href="assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" media="all" />
    <link href="assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" media="all" />
    <link href="assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" media="all" />
    <link href="assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" media="all" />
    <link href="assets/plugins/switcher/css/color5.css" rel="alternate stylesheet" title="color5" media="all" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- SWITCHER -->
    <link href="assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all" />
    <link href="assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" media="all" />
    <link href="assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" media="all" />
    <link href="assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" media="all" />
    <link href="assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" media="all" />
    <link href="assets/plugins/switcher/css/color5.css" rel="alternate stylesheet" title="color5" media="all" />

    <script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
    <style>
        .header-container-padding {
            padding-right: 90px;
            padding-left: 90px;
        }

        @media (max-width: 768px) {
            .header-container-padding {
                padding-right: 15px;
                padding-left: 15px;
            }
        }

        /* Top Filter Bar Styles */
        .top-filter-bar {
            background: #fff;
            padding: 25px 30px;
            margin-bottom: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .filter-controls-wrapper {
            display: flex;
            gap: 20px;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .filter-group {
            flex: 1;
            min-width: 200px;
        }

        .filter-group-label {
            font-size: 13px;
            font-weight: 600;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 12px;
            display: block;
        }

        /* Model Search */
        .model-search-wrapper {
            position: relative;
        }

        .model-search-input {
            width: 100%;
            padding: 12px 45px 12px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            font-size: 14px;
            color: #555;
            transition: all 0.3s ease;
        }

        .model-search-input:focus {
            outline: none;
            border-color: #dc2d13;
            box-shadow: 0 0 0 3px rgba(220, 45, 19, 0.1);
        }

        .model-search-input::placeholder {
            color: #999;
        }

        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 16px;
            pointer-events: none;
        }

        /* Sort Dropdown */
        .sort-dropdown-wrapper {
            position: relative;
        }

        .sort-dropdown {
            width: 100%;
            padding: 12px 35px 12px 15px;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            font-size: 14px;
            color: #555;
            background: #fff;
            cursor: pointer;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            transition: all 0.3s ease;
        }

        .sort-dropdown:focus {
            outline: none;
            border-color: #dc2d13;
            box-shadow: 0 0 0 3px rgba(220, 45, 19, 0.1);
        }

        .dropdown-arrow {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 12px;
            pointer-events: none;
        }

        /* View Toggle Buttons */
        .view-toggle-group {
            display: flex;
            gap: 0;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
        }

        .view-toggle-btn {
            padding: 11px 18px;
            background: #fff;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #666;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .view-toggle-btn:not(:last-child) {
            border-right: 1px solid #e0e0e0;
        }

        .view-toggle-btn:hover {
            background: #f9f9f9;
            color: #dc2d13;
        }

        .view-toggle-btn.active {
            background: #dc2d13;
            color: #fff;
        }

        /* Filter Button */
        .filter-action-btn {
            background: #dc2d13;
            color: #fff;
            border: none;
            padding: 13px 40px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .filter-action-btn:hover {
            background: #b82410;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 45, 19, 0.3);
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .filter-controls-wrapper {
                flex-direction: column;
            }

            .filter-group {
                width: 100%;
            }

            .view-toggle-group {
                justify-content: center;
            }
        }

        /* Enhanced Filter Styles */
        .filter-dropdown {
            background: #fff;
            border: 1px solid #e0e0e0;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .filter-dropdown:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .filter-header {
            padding: 15px 20px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            border-bottom: 1px solid #e0e0e0;
            transition: background 0.3s ease;
        }

        .filter-header:hover {
            background: #f9f9f9;
        }

        .filter-header h4 {
            margin: 0;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            color: #333;
        }

        .filter-arrow {
            font-size: 12px;
            color: #666;
            transition: transform 0.3s ease;
        }

        .filter-dropdown.active .filter-arrow {
            transform: rotate(180deg);
        }

        .filter-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            background: #fff;
        }

        .filter-dropdown.active .filter-content {
            max-height: 400px;
            overflow-y: auto;
        }

        .filter-options {
            padding: 10px 20px 20px;
        }

        .filter-option {
            padding: 8px 0;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .filter-option:hover {
            color: #fe5656;
        }

        .filter-option input[type="checkbox"],
        .filter-option input[type="radio"] {
            margin-right: 10px;
            cursor: pointer;
        }

        .filter-option label {
            cursor: pointer;
            margin: 0;
            font-size: 13px;
            color: #555;
            flex: 1;
        }

        .filter-option:hover label {
            color: #fe5656;
        }

        .filter-count {
            color: #999;
            font-size: 12px;
        }

        .sidebar-enhanced {
            background: #f8f8f8;
            padding: 20px;
            border-radius: 5px;
        }

        .filter-section-title {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Skewed Filter Buttons Styling */
        .btn-apply-filters {
            background: #dc2d13 !important;
            border-color: #dc2d13 !important;
        }

        .btn-apply-filters:hover {
            background: #b82410 !important;
            border-color: #b82410 !important;
        }

        .btn-reset-filters {
            background: transparent !important;
            border: 2px solid #cccccc !important;
            color: #666666 !important;
        }

        .btn-reset-filters:hover {
            background: #f5f5f5 !important;
            border-color: #999999 !important;
            color: #333333 !important;
        }

        .btn-reset-filters .btn-skew-r__inner {
            color: #666666 !important;
        }

        .btn-reset-filters:hover .btn-skew-r__inner {
            color: #333333 !important;
        }

        /* Wider skewed filter buttons on desktop and centered in sidebar */
        @media (min-width: 769px) {
            #sidebarFilters .btn {
                display: flex;
                justify-content: center;
            }

            /* Set a comfortable width for the skewed buttons (adjust px as needed) */
            .wrap__btn-skew-r .btn-skew-r {
                width: 260px !important;
                max-width: 100%;
                box-sizing: border-box;
            }
        }

        /* Full-width variant for skewed buttons (makes them span the sidebar) */
        @media (min-width: 769px) {
            .wrap__btn-skew-r.full-width {
                width: 100%;
                display: block;
            }

            .wrap__btn-skew-r.full-width .btn-skew-r {
                width: 100% !important;
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            /* Ensure the inner text aligns nicely when full width */
            .wrap__btn-skew-r.full-width .btn-skew-r__inner {
                display: inline-block;
                width: auto;
            }
        }

        /* Custom Scrollbar for filter content */
        .filter-content::-webkit-scrollbar {
            width: 6px;
        }

        .filter-content::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .filter-content::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }

        .filter-content::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Price Range Slider Enhancement */
        .price-filter-wrapper {
            padding: 20px;
            background: #fff;
            border: 1px solid #e0e0e0;
            margin-bottom: 15px;
        }

        .price-filter-wrapper h4 {
            margin: 0 0 15px 0;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            color: #333;
        }

        /* Grid Icons */
        .grid-icon {
            display: inline-block;
            width: 16px;
            height: 16px;
        }

        .grid-icon::before {
            content: '▦';
            font-size: 16px;
        }

        .list-icon::before {
            content: '☰';
            font-size: 16px;
        }
        
        /* Reduce large gap under pagination on small screens */
        @media (max-width: 768px) {
            /* tighten pagination spacing */
            ul.pagination {
                margin: 8px 0 6px !important;
                padding: 0;
                display: flex;
                gap: 6px;
                justify-content: center;
            }

            ul.pagination li {
                margin: 0 !important;
                padding: 0 !important;
                display: inline-block;
            }

            /* reduce vertical spacing around main content blocks that can create extra gap */
            main.main-content { margin-bottom: 8px; }

            /* if individual cards have large bottom margin, reduce it on mobile */
            article.card { margin-bottom: 14px; }

            /* Make filter action buttons full-width on mobile */
            .btn-apply-filters, .btn-reset-filters {
                display: block !important;
                width: 100% !important;
                box-sizing: border-box;
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            /* add spacing between stacked buttons */
            .btn-reset-filters { margin-bottom: 8px !important; }
        }

        /* Hide the 'View' toggle on smaller screens */
        @media (max-width: 768px) {
            .view-filter { display: none !important; }
        }
            /* Mobile Vehicle Card Image Fixes */
            @media (max-width: 768px) {
                /* Fix card image container */
                .card__img {
                    width: 100% !important;
                    height: auto !important;
                    overflow: hidden;
                    margin-bottom: 15px;
                }
                
                /* Make images fully responsive */
                .card__img img {
                    width: 100% !important;
                    height: auto !important;
                    max-width: 100%;
                    object-fit: cover;
                    display: block;
                }
                
                /* Fix card layout on mobile */
                article.card {
                    display: block !important;
                    margin-bottom: 20px;
                    padding: 15px;
                }
                
                /* Remove any float that might break layout */
                .card__img,
                .card__inner {
                    float: none !important;
                    width: 100% !important;
                }
                
                /* Ensure card inner content stacks properly */
                .card__inner {
                    padding: 15px 0 0 0 !important;
                }
                
                /* Fix clearfix if needed */
                article.card::after {
                    content: "";
                    display: table;
                    clear: both;
                }
            }
        
        /* Full Width Filter Buttons */
        .btn-filter-primary,
        .btn-filter-secondary {
            width: 100%;
            padding: 14px 20px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 12px;
            display: block;
        }

        .btn-filter-primary {
            background: #dc2d13;
            color: #fff;
            border: 2px solid #dc2d13;
        }

        .btn-filter-primary:hover {
            background: #b82410;
            border-color: #b82410;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220, 45, 19, 0.3);
        }

        .btn-filter-secondary {
            background: #fff;
            color: #666;
            border: 2px solid #ddd;
        }

        .btn-filter-secondary:hover {
            background: #f5f5f5;
            border-color: #999;
            color: #333;
            transform: translateY(-2px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Loader -->
    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end -->

    <div id="this-top" class="layout-theme animated-css" data-header="sticky" data-header-top="200">
        <!-- Start Switcher -->
        <div class="switcher-wrapper">
            <div class="demo_changer">
                <div class="demo-icon customBgColor">
                    <i class="fa fa-cog fa-spin fa-2x"></i>
                </div>
                <div class="form_holder">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="predefined_styles">
                                <div class="skin-theme-switcher">
                                    <h4>Color</h4>
                                    <a href="javascript:void(0);" data-switchcolor="color1" class="styleswitch"
                                        style="background-color: #fe5656">
                                    </a>
                                    <a href="javascript:void(0);" data-switchcolor="color2" class="styleswitch"
                                        style="background-color: #4fb0fd">
                                    </a>
                                    <a href="javascript:void(0);" data-switchcolor="color3" class="styleswitch"
                                        style="background-color: #ffc73c">
                                    </a>
                                    <a href="javascript:void(0);" data-switchcolor="color4" class="styleswitch"
                                        style="background-color: #ff8300">
                                    </a>
                                    <a href="javascript:void(0);" data-switchcolor="color5" class="styleswitch"
                                        style="background-color: #02cc8b">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="assets/plugins/switcher/js/bootstrap-select.js"></script>
            <script src="assets/plugins/switcher/js/evol.colorpicker.min.js"></script>
            <script src="assets/plugins/switcher/js/dmss.js"></script>
        </div>
        <!-- End Switcher -->

        <div id="wrapper">
            <!-- HEADER -->
            <div class="header">
                <div class="top-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="header-contacts">
                                    <span class="header-contacts__item"><i class="icon fa fa-phone"></i> 076 905
                                        7272</span>
                                    <a class="header-contacts__item" href="mailto:villoauto@gmail.com"><i
                                            class="icon fa fa-envelope"></i>
                                        villoauto@gmail.com</a>
                                </div>
                                <ul class="social-links list-inline">
                                    <li>
                                        <a class="" href="javascript:void(0);"><i class="bi bi-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="" href="javascript:void(0);"><i class="bi bi-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="" href="javascript:void(0);"><i class="bi bi-whatsapp"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header__inner">
                    <div class="header-container-padding">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <a href="index.html" class="logo d-none d-lg-block">
                                    <img class="logo__img img-responsive" src="assets/img/logo.png"
                                        style="height: 100px; object-fit: contain;" alt="Logo" />
                                </a>
                                <div class="navbar yamm">
                                    <div class="navbar-header hidden-md hidden-lg hidden-sm">
                                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1"
                                            class="navbar-toggle">
                                            <span class="icon-bar"></span><span class="icon-bar"></span><span
                                                class="icon-bar"></span>
                                        </button>
                                        <a href="javascript:void(0);" class="navbar-brand"></a>
                                    </div>
                                    <div id="navbar-collapse-1" class="navbar-collapse collapse ">
                                        <ul class="nav navbar-nav ">
                                            <li><a href="index.html">HOME</a></li>
                                            <li><a href="vehicle-listings.html">VEHICLE LISTINGS</a></li>
                                            <li><a href="services.html">SERVICES</a></li>
                                            <li><a href="about-us.html">ABOUT US</a></li>
                                            <li><a href="gallery.html">GALLERY</a></li>
                                            <li><a href="contact-us.html">CONTACT US</a></li>
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
                        <h1 class="ui-title-page">vehicle listings</h1>
                        <div class="decor-1 center-block"></div>
                        <ol class="breadcrumb">
                            <li><a href="javascript:void(0);">HOME</a></li>
                            <li class="active">listings</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- TOP FILTER BAR -->
                <div class="top-filter-bar">
                    <div class="filter-controls-wrapper">
                        <!-- Model Search -->
                        <div class="filter-group">
                            <label class="filter-group-label">Model Search</label>
                            <div class="model-search-wrapper">
                                <input type="text" class="model-search-input" id="modelSearch"
                                    placeholder="Search by model name">
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
                                        <span id="resultsCount">156 Results</span>
                                    </div>
                                    <div class="sorting__item">
                                        <span class="sorting__title">show on page</span>
                                        <div class="select jelect">
                                            <input id="page" name="page" value="0" data-text="imagemin" type="text"
                                                class="jelect-input" />
                                            <div tabindex="0" role="button" class="jelect-current">
                                                10 Items
                                            </div>
                                            <ul class="jelect-options">
                                                <li class="jelect-option jelect-option_state_active">10 Items</li>
                                                <li class="jelect-option">20 Items</li>
                                                <li class="jelect-option">30 Items</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Vehicle Cards -->
                            <article class="card clearfix">
                                <div class="card__img">
                                    <img class="img-responsive" src="assets/media/cards/1.jpg" height="196" width="235"
                                        alt="foto" />
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
                                        <li class="card-list__row">
                                            <span class="card-list__title">Body Style:</span>
                                            <span class="card-list__info">Sedan</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Engine:</span>
                                            <span class="card-list__info">DOHC 24-valve V-6</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Mileage:</span>
                                            <span class="card-list__info">35,000 KM</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Color:</span>
                                            <span class="card-list__info">White</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Transmission:</span>
                                            <span class="card-list__info">6-Speed Auto</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Specs</span>
                                            <span class="card-list__info">2-Passenger, 2-Door</span>
                                        </li>
                                    </ul>
                                    <div class="card__price">
                                        PRICE:<span class="card__price-number">Rs. 33,90500</span>
                                    </div>
                                </div>
                            </article>

                            <article class="card clearfix">
                                <div class="card__img">
                                    <img class="img-responsive" src="assets/media/cards/2.jpg" height="196" width="235"
                                        alt="foto" />
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
                                        <li class="card-list__row">
                                            <span class="card-list__title">Body Style:</span>
                                            <span class="card-list__info">Sedan</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Engine:</span>
                                            <span class="card-list__info">DOHC 24-valve V-6</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Mileage:</span>
                                            <span class="card-list__info">35,000 KM</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Color:</span>
                                            <span class="card-list__info">White</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Transmission:</span>
                                            <span class="card-list__info">6-Speed Auto</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Specs</span>
                                            <span class="card-list__info">2-Passenger, 2-Door</span>
                                        </li>
                                    </ul>
                                    <div class="card__price">
                                        PRICE:<span class="card__price-number">Rs. 29,41500</span>
                                    </div>
                                </div>
                            </article>

                            <article class="card clearfix">
                                <div class="card__img">
                                    <img class="img-responsive" src="assets/media/cards/3.jpg" height="196" width="235"
                                        alt="foto" />
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
                                        <li class="card-list__row">
                                            <span class="card-list__title">Body Style:</span>
                                            <span class="card-list__info">Sedan</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Engine:</span>
                                            <span class="card-list__info">DOHC 24-valve V-6</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Mileage:</span>
                                            <span class="card-list__info">35,000 KM</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Color:</span>
                                            <span class="card-list__info">White</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Transmission:</span>
                                            <span class="card-list__info">6-Speed Auto</span>
                                        </li>
                                        <li class="card-list__row">
                                            <span class="card-list__title">Specs</span>
                                            <span class="card-list__info">2-Passenger, 2-Door</span>
                                        </li>
                                    </ul>
                                    <div class="card__price">
                                        PRICE:<span class="card__price-number">Rs. 14,49500</span>
                                    </div>
                                </div>
                            </article>

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
                                <div class="filter-header" onclick="toggleFilter(this)">
                                    <h4>Year</h4>
                                    <span class="filter-arrow">▼</span>
                                </div>
                                <div class="filter-content">
                                    <div class="filter-options">
                                        <div class="filter-option">
                                            <input type="checkbox" id="year-2024" name="year" value="2024">
                                            <label for="year-2024">2024</label>
                                            <span class="filter-count">(12)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="year-2023" name="year" value="2023">
                                            <label for="year-2023">2023</label>
                                            <span class="filter-count">(25)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="year-2022" name="year" value="2022">
                                            <label for="year-2022">2022</label>
                                            <span class="filter-count">(18)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="year-2021" name="year" value="2021">
                                            <label for="year-2021">2021</label>
                                            <span class="filter-count">(15)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="year-2020" name="year" value="2020">
                                            <label for="year-2020">2020</label>
                                            <span class="filter-count">(22)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="year-2019" name="year" value="2019">
                                            <label for="year-2019">2019</label>
                                            <span class="filter-count">(19)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="year-older" name="year" value="older">
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
                                            <input type="radio" id="condition-certified" name="condition"
                                                value="certified">
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
                                            <input type="checkbox" id="body-sedan" name="body" value="sedan">
                                            <label for="body-sedan">Sedan</label>
                                            <span class="filter-count">(42)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="body-suv" name="body" value="suv">
                                            <label for="body-suv">SUV</label>
                                            <span class="filter-count">(38)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="body-coupe" name="body" value="coupe">
                                            <label for="body-coupe">Coupe</label>
                                            <span class="filter-count">(15)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="body-hatchback" name="body" value="hatchback">
                                            <label for="body-hatchback">Hatchback</label>
                                            <span class="filter-count">(28)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="body-convertible" name="body"
                                                value="convertible">
                                            <label for="body-convertible">Convertible</label>
                                            <span class="filter-count">(8)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="body-wagon" name="body" value="wagon">
                                            <label for="body-wagon">Wagon</label>
                                            <span class="filter-count">(12)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="body-van" name="body" value="van">
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
                                            <input type="checkbox" id="make-audi" name="make" value="audi">
                                            <label for="make-audi">Audi</label>
                                            <span class="filter-count">(5)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="make-bentley" name="make" value="bentley">
                                            <label for="make-bentley">Bentley</label>
                                            <span class="filter-count">(10)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="make-bmw" name="make" value="bmw">
                                            <label for="make-bmw">BMW</label>
                                            <span class="filter-count">(70)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="make-chevrolet" name="make" value="chevrolet">
                                            <label for="make-chevrolet">Chevrolet</label>
                                            <span class="filter-count">(6)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="make-mercedes" name="make" value="mercedes">
                                            <label for="make-mercedes">Mercedes-Benz</label>
                                            <span class="filter-count">(80)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="make-landrover" name="make" value="landrover">
                                            <label for="make-landrover">Land Rover</label>
                                            <span class="filter-count">(36)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="make-toyota" name="make" value="toyota">
                                            <label for="make-toyota">Toyota</label>
                                            <span class="filter-count">(95)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="make-honda" name="make" value="honda">
                                            <label for="make-honda">Honda</label>
                                            <span class="filter-count">(72)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="make-nissan" name="make" value="nissan">
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
                                            <input type="checkbox" id="trans-auto" name="transmission"
                                                value="automatic">
                                            <label for="trans-auto">Automatic</label>
                                            <span class="filter-count">(112)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="trans-manual" name="transmission" value="manual">
                                            <label for="trans-manual">Manual</label>
                                            <span class="filter-count">(36)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="trans-cvt" name="transmission" value="cvt">
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
                                            <input type="checkbox" id="color-white" name="color-ext" value="white">
                                            <label for="color-white">White</label>
                                            <span class="filter-count">(45)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="color-black" name="color-ext" value="black">
                                            <label for="color-black">Black</label>
                                            <span class="filter-count">(38)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="color-silver" name="color-ext" value="silver">
                                            <label for="color-silver">Silver</label>
                                            <span class="filter-count">(32)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="color-gray" name="color-ext" value="gray">
                                            <label for="color-gray">Gray</label>
                                            <span class="filter-count">(28)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="color-red" name="color-ext" value="red">
                                            <label for="color-red">Red</label>
                                            <span class="filter-count">(15)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="color-blue" name="color-ext" value="blue">
                                            <label for="color-blue">Blue</label>
                                            <span class="filter-count">(22)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="color-other" name="color-ext" value="other">
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
                                            <input type="checkbox" id="int-black" name="color-int" value="black">
                                            <label for="int-black">Black</label>
                                            <span class="filter-count">(65)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="int-beige" name="color-int" value="beige">
                                            <label for="int-beige">Beige</label>
                                            <span class="filter-count">(42)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="int-gray" name="color-int" value="gray">
                                            <label for="int-gray">Gray</label>
                                            <span class="filter-count">(35)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="int-brown" name="color-int" value="brown">
                                            <label for="int-brown">Brown</label>
                                            <span class="filter-count">(18)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="int-tan" name="color-int" value="tan">
                                            <label for="int-tan">Tan</label>
                                            <span class="filter-count">(12)</span>
                                        </div>
                                        <div class="filter-option">
                                            <input type="checkbox" id="int-other" name="color-int" value="other">
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
                                    <input class="slider-price__input" id="slider-price_min" placeholder="Min" />
                                    <span>-</span>
                                    <input class="slider-price__input" id="slider-price_max" placeholder="Max" />
                                </span>
                            </div>

                            <!-- Action Buttons - simple full-width buttons -->
                            <div style="margin-top: 20px;">
                                <button class="btn-filter-primary" onclick="applyFilters()">
                                    APPLY FILTERS
                                </button>
                                
                                <button class="btn-filter-secondary" onclick="resetFilters()">
                                    RESET ALL
                                </button>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>

            <!--footer new-->
            <footer class="footer">
                <div class="container">
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="footer-column">
                                    <h4>INVENTORY</h4>
                                    <ul>
                                        <li><a href="#">NEW VEHICLES</a></li>
                                        <li><a href="#">USED VEHICLES</a></li>
                                        <li><a href="#">PRE-OWNED VEHICLE SPECIALS</a></li>
                                        <li><a href="#">PRICED UNDER 15K</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="footer-column">
                                    <h4>FINANCING</h4>
                                    <ul>
                                        <li><a href="#">GET FINANCING</a></li>
                                        <li><a href="#">PAYMENT CALCULATOR</a></li>
                                        <li><a href="#">VALUE YOUR TRADE</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="footer-column">
                                    <h4>QUICK LINKS</h4>
                                    <ul>
                                        <li><a href="#">FAQS</a></li>
                                        <li><a href="#">WHY BUY FROM ALM</a></li>
                                        <li><a href="#">FIVE QUESTIONS TO ASK</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="footer-column">
                                    <h4>CONTACT</h4>
                                    <ul>
                                        <li><a href="tel:94769057272">076 905 7272</a></li>
                                        <li><a href="mailto:villoauto@gmail.com">villoauto@gmail.com</a></li>
                                        <li><a href="#">No. 614, Colombo road, Nanuoya, Pilimathalawa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer-bottom">
                        <div>
                            <img src="assets/img/logo-footer.png" alt="logo" class="footer-logo">
                        </div>
                        <div class="copyright">
                            2025 © All Rights Reserved | Villo Auto Cars (Pvt) Ltd | Designed & Developed by Silicon
                            Radon Networks
                            (Pvt) Ltd.
                        </div>
                    </div>
                </div>
            </footer>

            <!--Messenger and WhatsApp Floating btns-->
            <a href="https://m.me/94769057272" class="float" style="z-index: 999999;">
                <i class="fa-brands fa-facebook-messenger my-float"></i>
            </a>
            <script async
                src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
            <script>
                var wa_btnSetting = { "btnColor": "#16BE45", "ctaText": "", "cornerRadius": 40, "marginBottom": 20, "marginLeft": 20, "marginRight": 20, "btnPosition": "right", "whatsAppNumber": "94769057272", "welcomeMessage": "Hello! How can we help you today?", "zIndex": 999999, "btnColorScheme": "light" };
                window.onload = () => {
                    _waEmbed(wa_btnSetting);
                };
            </script>

        </div>
    </div>

    <div class="car-top">
        <span><img src="assets/img/car.png" alt="car"></span>
    </div>

    <!-- SCRIPTS -->
    <script src="assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="assets/plugins/jelect/jquery.jelect.js"></script>
    <script src="assets/plugins/sliderpro/js/jquery.sliderPro.min.js"></script>
    <script src="assets/js/cssua.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Gallery JavaScript -->
    <script>
        // Gallery Filter Functionality
        const filterBtns = document.querySelectorAll('.gallery-filters ul li a');
        const galleryItems = document.querySelectorAll('.gallery-item');

        if (filterBtns.length > 0) {
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Remove active class from all li elements
                    document.querySelectorAll('.gallery-filters ul li').forEach(li => li.classList.remove('active'));
                    // Add active class to clicked button's parent li
                    this.parentElement.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    galleryItems.forEach(item => {
                        if (filterValue === 'all') {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 10);
                        } else {
                            const category = item.getAttribute('data-category');
                            if (category === filterValue) {
                                item.style.display = 'block';
                                setTimeout(() => {
                                    item.style.opacity = '1';
                                    item.style.transform = 'scale(1)';
                                }, 10);
                            } else {
                                item.style.opacity = '0';
                                item.style.transform = 'scale(0.8)';
                                setTimeout(() => {
                                    item.style.display = 'none';
                                }, 300);
                            }
                        }
                    });
                });
            });
        }

        // Lightbox Functionality
        const lightboxModal = document.getElementById('lightboxModal');
        const lightboxImg = document.getElementById('lightboxImg');
        const lightboxCaption = document.getElementById('lightboxCaption');
        const closeBtn = document.querySelector('.lightbox-close');
        const prevBtn = document.querySelector('.lightbox-prev');
        const nextBtn = document.querySelector('.lightbox-next');

        if (lightboxModal && lightboxImg && lightboxCaption && closeBtn && prevBtn && nextBtn) {
            let currentIndex = 0;
            let visibleItems = [];

            // Function to update visible items based on current filter
            function updateVisibleItems() {
                visibleItems = Array.from(galleryItems).filter(item => {
                    return item.style.display !== 'none';
                });
            }

            // Open lightbox
            galleryItems.forEach((item, index) => {
                item.addEventListener('click', function () {
                    updateVisibleItems();
                    currentIndex = visibleItems.indexOf(this);
                    showLightbox();
                });
            });

            function showLightbox() {
                const img = visibleItems[currentIndex].querySelector('img');
                const caption = visibleItems[currentIndex].querySelector('.gallery-caption');

                lightboxImg.src = img.src;
                lightboxCaption.innerHTML = caption.innerHTML;
                lightboxModal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }

            // Close lightbox
            closeBtn.addEventListener('click', closeLightbox);
            lightboxModal.addEventListener('click', function (e) {
                if (e.target === lightboxModal) {
                    closeLightbox();
                }
            });

            function closeLightbox() {
                lightboxModal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            // Previous image
            prevBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                currentIndex = (currentIndex - 1 + visibleItems.length) % visibleItems.length;
                showLightbox();
            });

            // Next image
            nextBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                currentIndex = (currentIndex + 1) % visibleItems.length;
                showLightbox();
            });

            // Keyboard navigation
            document.addEventListener('keydown', function (e) {
                if (lightboxModal.style.display === 'block') {
                    if (e.key === 'Escape') {
                        closeLightbox();
                    } else if (e.key === 'ArrowLeft') {
                        currentIndex = (currentIndex - 1 + visibleItems.length) % visibleItems.length;
                        showLightbox();
                    } else if (e.key === 'ArrowRight') {
                        currentIndex = (currentIndex + 1) % visibleItems.length;
                        showLightbox();
                    }
                }
            });

            // Initialize visible items on page load
            updateVisibleItems();
        }
    </script>

    <!-- SCRIPTS -->
    <script src="assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="assets/plugins/jelect/jquery.jelect.js"></script>
    <script src="assets/plugins/nouislider/jquery.nouislider.all.min.js"></script>
    <script src="assets/plugins/flexslider/jquery.flexslider.js"></script>
</body>

</html>