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
<link rel="stylesheet" href="{{ asset('NewAssts/css/gallery.css') }}">
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
                                <h1 class="ui-title-page">OUR GALLERY</h1>
                        <div class="decor-1 center-block"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">HOME</a></li>
                            <li class="active">Gallery</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> <!-- /#wrapper -->
    </div> <!-- /#this-top -->
    @endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                            <main class="main-content page-gallery">

                    <!-- Gallery Filters -->
                    <div class="gallery-filters">
                        <ul class="pagination">
                            <li class="active"><a href="#" data-filter="all">ALL</a></li>
                            <li><a href="#" data-filter="luxury">LUXURY</a></li>
                            <li><a href="#" data-filter="suv">SUV</a></li>
                            <li><a href="#" data-filter="sedan">SEDAN</a></li>
                            <li><a href="#" data-filter="hybrid">HYBRID</a></li>
                        </ul>
                    </div>

                    <!-- Gallery Grid -->
                    <div class="gallery-grid">
                        <!-- Recreated gallery items using NewAssts assets -->
                        <div class="gallery-item" data-category="luxury">
                            <img src="{{ asset('NewAssts/media/posts/370x250/1.jpg') }}" alt="Luxury Car 1" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Mercedes-Benz S-Class</h4><p>2023 Model</p></div>
                        </div>
                        <div class="gallery-item" data-category="suv">
                            <img src="{{ asset('NewAssts/media/posts/370x250/2.jpg') }}" alt="SUV 1" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Toyota Land Cruiser</h4><p>2022 Model</p></div>
                        </div>
                        <div class="gallery-item" data-category="sedan">
                            <img src="{{ asset('NewAssts/media/posts/370x250/3.jpg') }}" alt="Sedan 1" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Honda Accord</h4><p>2023 Model</p></div>
                        </div>
                        <div class="gallery-item" data-category="hybrid">
                            <img src="{{ asset('NewAssts/media/posts/370x250/4.jpg') }}" alt="Hybrid 1" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Toyota Prius</h4><p>Hybrid 2023</p></div>
                        </div>
                        <div class="gallery-item" data-category="luxury">
                            <img src="{{ asset('NewAssts/media/posts/370x250/5.jpg') }}" alt="Luxury Car 2" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>BMW 7 Series</h4><p>2023 Model</p></div>
                        </div>
                        <div class="gallery-item" data-category="suv">
                            <img src="{{ asset('NewAssts/media/posts/370x250/6.jpg') }}" alt="SUV 2" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Range Rover Sport</h4><p>2022 Model</p></div>
                        </div>
                        <div class="gallery-item" data-category="sedan">
                            <img src="{{ asset('NewAssts/media/posts/370x250/7.jpg') }}" alt="Sedan 2" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Audi A6</h4><p>2023 Model</p></div>
                        </div>
                        <div class="gallery-item" data-category="hybrid">
                            <img src="{{ asset('NewAssts/media/posts/370x250/8.jpg') }}" alt="Hybrid 2" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Honda Vezel</h4><p>Hybrid 2023</p></div>
                        </div>
                        <div class="gallery-item" data-category="luxury">
                            <img src="{{ asset('NewAssts/media/posts/370x250/9.jpg') }}" alt="Luxury Car 3" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Lexus LS</h4><p>2023 Model</p></div>
                        </div>
                        <div class="gallery-item" data-category="suv">
                            <img src="{{ asset('NewAssts/media/posts/370x250/1.jpg') }}" alt="SUV 3" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Nissan Patrol</h4><p>2022 Model</p></div>
                        </div>
                        <div class="gallery-item" data-category="sedan">
                            <img src="{{ asset('NewAssts/media/posts/370x250/2.jpg') }}" alt="Sedan 3" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Toyota Camry</h4><p>2023 Model</p></div>
                        </div>
                        <div class="gallery-item" data-category="hybrid">
                            <img src="{{ asset('NewAssts/media/posts/370x250/3.jpg') }}" alt="Hybrid 3" />
                            <div class="gallery-overlay"><i class="fa fa-search-plus"></i></div>
                            <div class="gallery-caption"><h4>Lexus NX Hybrid</h4><p>Hybrid 2023</p></div>
                        </div>
                    </div>

                    <div class="text-center" style="margin-top: 40px;">
                        <a class="btn btn-success btn-effect" href="javascript:void(0);"><span class="btn-inner">LOAD MORE</span></a>
                    </div>

                </main>
            </div>
        </div>
    </div>

    <!-- Lightbox Modal -->
    <div id="lightboxModal" class="lightbox-modal">
        <span class="lightbox-close">&times;</span>
        <span class="lightbox-prev">&#10094;</span>
        <span class="lightbox-next">&#10095;</span>
        <div class="lightbox-content">
            <img id="lightboxImg" src="" alt="Lightbox Image" />
        </div>
        <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>

@push('scripts')
    <script src="{{ asset('NewAssts/js/plugins-init/gallery-init.js') }}"></script>
@endpush

@endsection
