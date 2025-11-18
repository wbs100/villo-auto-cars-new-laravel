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
                        <h1 class="ui-title-page">CONTACT US</h1>
                        <div class="decor-1 center-block"></div>
                        <ol class="breadcrumb">
                            <li><a href="{{ route('home') }}">HOME</a></li>
                            <li class="active">CONTACT US</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div> <!-- /#wrapper -->
    </div> <!-- /#this-top -->
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
                        <div class="contact-map-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7692881407293!2d80.56775379999999!3d7.267075500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae369dddb5eb077%3A0x8e1e0407a46ff296!2sVillo%20Auto%20Cars!5e0!3m2!1sen!2slk!4v1753537417729!5m2!1sen!2slk" allowfullscreen loading="lazy"></iframe>
                        </div>

                        <!-- Nav tabs -->
                        <div class="wrap-nav-tabs">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab1" data-toggle="tab">CONTACT FORM</a></li>
                                <li><a href="#tab2" data-toggle="tab">LOCATION INFO</a></li>
                                <li><a href="#tab3" data-toggle="tab">OPENING HOURS</a></li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <h3 class="ui-title-inner">Send Us A Message</h3>
                                <div class="decor-1"></div>
                                <p>We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.</p>

                                <div class="contact-form-box">
                                    <form id="contactform" role="form" method="post" action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Your Name*" name="name" required>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" placeholder="Your Email*" name="email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="Phone Number*" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" placeholder="Your Message*" rows="6" name="message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn-submit">SEND MESSAGE</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane" id="tab2">
                                <h3 class="ui-title-inner">Our Location</h3>
                                <div class="decor-1"></div>
                                <p>Visit us at our showroom to browse our wide selection of quality vehicles. Our friendly team is ready to assist you with all your automotive needs.</p>
                                <p><strong>Address:</strong><br>No. 614, Colombo road, Nanuoya, Pilimathalawa, Kandy</p>
                                <p><strong>Contact:</strong><br>Phone: 076 905 7272<br>Email: villoauto@gmail.com</p>
                            </div>

                            <div class="tab-pane" id="tab3">
                                <h3 class="ui-title-inner">When To Visit</h3>
                                <div class="decor-1"></div>
                                <p>Our showroom is open six days a week. Feel free to drop by during our business hours or schedule an appointment for a personalized consultation.</p>
                                <div class="opening-hours-widget">
                                    <ul>
                                        <li><strong>Sunday</strong> <span class="text-red">Closed</span></li>
                                        <li><strong>Monday</strong> <span>9:00 AM to 9:00 PM</span></li>
                                        <li><strong>Tuesday</strong> <span>9:00 AM to 9:00 PM</span></li>
                                        <li><strong>Wednesday</strong> <span>9:00 AM to 9:00 PM</span></li>
                                        <li><strong>Thursday</strong> <span>9:00 AM to 9:00 PM</span></li>
                                        <li><strong>Friday</strong> <span>9:00 AM to 9:00 PM</span></li>
                                        <li><strong>Saturday</strong> <span>9:00 AM to 9:00 PM</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Accordion -->
                        <div class="panel-group accordion" id="accordion-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1"><i class="icon"></i></a>
                                    <h3 class="panel-title">Why Choose Villo Auto Cars?</h3>
                                </div>
                                <div id="collapse-1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <p>We offer top-quality reconditioned and brand-new vehicles with flexible leasing options tailored to your needs. Our experienced team provides comprehensive support from selection to after-sales service.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2"><i class="icon"></i></a>
                                    <h3 class="panel-title">Our Services</h3>
                                </div>
                                <div id="collapse-2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Vehicle sales, leasing options, documentation assistance, financing guidance, after-sales support, and trade-in services.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading">
                                    <a class="btn-collapse collapsed" data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3"><i class="icon"></i></a>
                                    <h3 class="panel-title">How To Reach Us</h3>
                                </div>
                                <div id="collapse-3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>You can reach us by phone, email, WhatsApp, or visit our showroom in person. We're also available on Facebook and Instagram for updates and inquiries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion -->
                    </article>

                    <!-- Call to Action -->
                    <div class="wrap-section-border">
                        <section class="section_letter section-bg section-bg_primary">
                            <div class="letter bg-inner">
                                <div class="letter__inner">
                                    <h2 class="letter__title">Looking for a specific vehicle or need custom financing?</h2>
                                    <div class="letter__info">Contact us today and let our team help you find the perfect vehicle with flexible payment options tailored to your budget.</div>
                                </div>
                            </div>
                        </section>
                    </div>

                </div>

                <!-- SIDEBAR -->
                <div class="col-md-4">
                    <aside class="sidebar">
                        <!-- Contact Information Widget -->
                        <section class="widget">
                            <h3 class="widget-title">Contact Information</h3>
                            <div class="decor-1"></div>
                            <div class="widget-content">
                                <dl class="list-descriptions list-unstyled">
                                    <dt>Address:</dt>
                                    <dd>No. 614, Colombo road, Nanuoya, Pilimathalawa, Kandy</dd>
                                    <dt>Phone:</dt>
                                    <dd>076 905 7272</dd>
                                    <dt>Email:</dt>
                                    <dd>villoauto@gmail.com</dd>
                                    <dt>Working Hours:</dt>
                                    <dd>Monday - Saturday: 9:00 AM - 9:00 PM<br>Sunday: Closed</dd>
                                    <dt>Social Media:</dt>
                                    <dd>Follow us on Facebook, Instagram, and WhatsApp for the latest updates</dd>
                                </dl>
                            </div>
                        </section>

                        <!-- Quick Contact Widget -->
                        <section class="widget">
                            <h3 class="widget-title">Quick Contact</h3>
                            <div class="decor-1"></div>
                            <div class="widget-content">
                                <div class="contact-form-box">
                                    <form id="quickcontactform">
                                        <input type="text" class="form-control" placeholder="Name*" required>
                                        <input type="text" class="form-control" placeholder="Phone*" required>
                                        <textarea class="form-control" placeholder="Message*" rows="4" required></textarea>
                                        <button type="submit" class="btn-submit" style="width: 100%;">QUICK INQUIRY</button>
                                    </form>
                                </div>
                            </div>
                        </section>

                        <!-- Share Widget -->
                        <div class="widget widget_mod-b">
                            <div class="wrap-social-block wrap-social-block_mod-a">
                                <div class="social-block">
                                    <div class="social-block__inner">
                                        <span class="social-block__title">SHARE THIS</span>
                                        <ul class="social-block__list list-inline">
                                            <li><a href="javascript:void(0);" aria-label="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="javascript:void(0);" aria-label="Share on Twitter"><i class="fa-brands fa-twitter"></i></a></li>
                                            <li><a href="javascript:void(0);" aria-label="Share on Google+"><i class="fa-brands fa-google-plus-g"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- END CONTACT DETAILS SECTION -->

    </main>


@endsection

@push('scripts')
    <script src="{{ asset('NewAssts/js/plugins-init/contact-init.js') }}"></script>
@endpush
