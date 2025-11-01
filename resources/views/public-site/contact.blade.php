@extends('layouts.app')

@section('content')

<!--=================================
 inner-intro -->

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="text-center row intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">Contact us </h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
                <ul class="page-breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>Contact Us</span> </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 contact -->

<section class="contact page-section-ptb white-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <span>We’d Love to Hear From You</span>
                    <h2>LET'S GET IN TOUCH!</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="text-center contact-box grey-border">
                    <i class="fa fa-map-marker"></i>
                    <h5>Address</h5>
                    <p> No. 614, Colombo road, Nanuoya, Pilimathalawa, Kandy</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center contact-box grey-border">
                    <i class="fa fa-phone"></i>
                    <h5>Phone</h5>
                    <p> 077 311 6657</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-4 text-center contact-box grey-border mb-sm-0">
                    <i class="fa fa-envelope-o"></i>
                    <h5>Email</h5>
                    <p> villoauto@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="page-section-ptb">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="gray-form">
                        <div id="formmessage" class="form-notice" style="display:none;">Success/Error Message Goes Here</div>
                        <form class="form-horizontal" id="contactform" role="form" method="post" action="#">
                            <div class="contact-form row">
                                <div class="col-lg-4 col-sm-12">
                                    <div class="mb-3">
                                        <input id="contactform_name" type="text" placeholder="Name*" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="mb-3">
                                        <input id="contactform_email" type="email" placeholder="Email*" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="mb-3">
                                        <input id="contactform_phone" type="text" placeholder="Phone*" class="form-control" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea id="contactform_message" class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="hidden" name="action" value="sendEmail" />
                                    <button id="submit" name="submit" type="submit" value="Send" class="button red">Send your message <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-4 col-lg-4 col-sm-12 mt-lg-0">
                    <div class="opening-hours gray-bg mt-sm-0">
                        <h6>opening hours</h6>
                        <ul class="list-style-none">
                            <li><strong>Sunday</strong> <span class="text-red"> closed</span></li>
                            <li><strong>Monday</strong> <span> 9:00 AM to 9:00 PM</span></li>
                            <li><strong>Tuesday </strong> <span> 9:00 AM to 9:00 PM</span></li>
                            <li><strong>Wednesday </strong> <span> 9:00 AM to 9:00 PM</span></li>
                            <li><strong>Thursday </strong> <span> 9:00 AM to 9:00 PM</span></li>
                            <li><strong>Friday </strong> <span> 9:00 AM to 9:00 PM</span></li>
                            <li><strong>Saturday </strong> <span> 9:00 AM to 9:00 PM</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="feature-box-3 grey-border">
                    <div class="icon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="content">
                        <h6>Opening Hours</h6>
                        <p>We’re open Monday to Saturday from 8:30 AM to 6:00 PM. Visit us to browse a wide selection of reconditioned and brand-new vehicles.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box-3 grey-border">
                    <div class="icon">
                        <i class="fa fa-support"></i>
                    </div>
                    <div class="content">
                        <h6>Our Support Center</h6>
                        <p>Need assistance? Our experienced team is here to guide you through vehicle selection, documentation, and after-sales support.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-0 feature-box-3 grey-border">
                    <div class="icon">
                        <i class="fa fa-info"></i>
                    </div>
                    <div class="content">
                        <h6>Some Information</h6>
                        <p class="mb-0">Located in Nugegoda, Villo Auto Cars offers top-quality vehicles and flexible leasing options tailored to your needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 contact -->


<!--=================================
 contact-map -->

<section class="contact-map">
    <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7692881407293!2d80.56775379999999!3d7.267075500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae369dddb5eb077%3A0x8e1e0407a46ff296!2sVillo%20Auto%20Cars!5e0!3m2!1sen!2slk!4v1753537417729!5m2!1sen!2slk" allowfullscreen></iframe>
    </div>
</section>

<!--=================================
 contact-map -->


@endsection