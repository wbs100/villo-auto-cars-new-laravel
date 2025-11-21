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
<link rel="stylesheet" href="{{ asset('NewAssts/css/contact.css') }}">
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
        @include('public-site.header.page-header', ['title' => 'CONTACT US', 'breadcrumb' => 'Contact Us'])
    @endsection


@section('content')

    <main class="main-content page-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <article class="contact-details">
                        <div class="contact-details__wrap-title clearfix">
                            <h2 class="contact-details__title">Get In Touch</h2>
                        </div>

                        <!-- Google Map -->
                        <x-components.google-map src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7692881407293!2d80.56775379999999!3d7.267075500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae369dddb5eb077%3A0x8e1e0407a46ff296!2sVillo%20Auto%20Cars!5e0!3m2!1sen!2slk!4v1753537417729!5m2!1sen!2slk" />

                        @include('public-site.partials.contact-tabs')

                        @include('public-site.partials.contact-accordion')
                        <!-- end accordion -->
                    </article>

                    @include('public-site.partials.contact-cta')

                </div>

                <!-- SIDEBAR -->
                <div class="col-md-4">
                    @include('public-site.partials.contact-sidebar')
                </div>
            </div>
        </div>
        <!-- END CONTACT DETAILS SECTION -->

    </main>


@endsection

@push('scripts')
    <script src="{{ asset('NewAssts/js/plugins-init/contact-init.js') }}"></script>
@endpush
