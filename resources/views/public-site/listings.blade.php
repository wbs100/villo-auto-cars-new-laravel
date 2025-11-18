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
<link rel="stylesheet" href="{{ asset('NewAssts/css/listings.css') }}">
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
                        <h1 class="ui-title-page">ABOUT US</h1>
                        <div class="decor-1 center-block"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">HOME</a></li>
                            <li class="active">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> <!-- /#wrapper -->
    </div> <!-- /#this-top -->
    @endsection

@section('content')

    <div class="block-title">
        <div class="block-title__inner section-bg section-bg_second">
            <div class="bg-inner">
                <h1 class="ui-title-page">car details</h1>
                <div class="decor-1 center-block"></div>
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li class="active">car details</li>
                </ol>
            </div>
            <!-- end bg-inner -->
        </div>
        <!-- end block-title__inner -->
    </div>
    <!-- end block-title -->

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <main class="main-content">
                    <article class="car-details">
                        <div class="car-details__wrap-title clearfix">
                            <h2 class="car-details__title">Chevrolet Impala</h2>
                            <div class="car-details__wrap-price">
                                <span class="car-details__price"><span class="car-details__price-inner">Rs. 27,92000</span></span>
                            </div>
                        </div>

                        <div id="slider-product" class="flexslider slider-product">
                            <ul class="slides">
                                <li>
                                    <a href="{{ asset('NewAssts/media/slider_product/large/1.jpg') }}">
                                        <img class="img-responsive" src="{{ asset('NewAssts/media/slider_product/large/1.jpg') }}" height="430" width="770" alt="Foto" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="carousel-product" class="flexslider carousel-product">
                            <ul class="slides">
                                <li><img src="{{ asset('NewAssts/media/slider_product/small/1.jpg') }}" height="75" width="95" alt="foto" /></li>
                            </ul>
                        </div>

                        <div class="wrap-nav-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">vehicle DESCRIPTION</a></li>
                                <li><a href="#tab2" data-toggle="tab">features</a></li>
                                <li><a href="#tab3" data-toggle="tab">inquiry</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <h3 class="ui-title-inner">Lorem ipsum dolor sit amet</h3>
                                <div class="decor-1"></div>
                                <p>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>
                    </article>
                </main>
            </div>

            <div class="col-md-4">
                <aside class="sidebar">
                    <div class="price-section">
                        <div class="price-header">Price Range</div>
                        <div class="price-value" id="priceRangeDisplay">Rs. 6,900 - Rs. 801,700</div>
                        <div class="slider-container">
                            <div id="sliderTrack"></div>
                            <div id="sliderRange"></div>
                            <input type="range" min="6900" max="801700" step="1000" value="6900" id="priceMin">
                            <input type="range" min="6900" max="801700" step="1000" value="801700" id="priceMax">
                        </div>
                        <a href="{{ route('listings') }}" class="btn-search btn btn-primary">Search Inventory</a>
                    </div>
                </aside>
            </div>
        </div>
    </div>

@endsection
