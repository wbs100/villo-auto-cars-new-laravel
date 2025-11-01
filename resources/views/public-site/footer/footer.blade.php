<!-- footer -->
<footer class="footer bg-2 bg-overlay-black-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social">
                    <ul>
                        <li>
                            <a class="facebook"
                                href="https://www.facebook.com/p/Villo-Auto-Cars-100083298821557/">facebook
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a class="instagram" href="https://www.instagram.com/villo_auto_cars/">instagram
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="whatsapp" href="https://wa.me/+94773116657">whatsapp
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="about-content">
                    <img class="img-fluid" id="logo-footer" src="{{ asset('/assets/images/va-logo.jpg') }}" alt=""
                        style="border-radius: 9999px; height: 100px; aspect-ratio: 1/1;">
                    <p>
                        It is our ultimate target to maintain our good name in the market and to serve our clients
                        with utmost integrity, preserving their trust.
                    </p>
                </div>
                <div class="address">
                    <ul>
                        <li> <i class="fa fa-map-marker"></i><span>No. 614, Colombo road, Nanuoya, Pilimathalawa,
                                Kandy</span>
                        </li>
                        <li> <i class="fa fa-phone"></i><span>077 311 6657</span> </li>
                        <li> <i class="fa fa-envelope-o"></i><span>villoauto@gmail.com</span> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="usefull-link">
                    <h6 class="text-white">Useful Links</h6>
                    <ul>
                        <li><a href="/"><i class="fa fa-angle-double-right"></i> Home</a></li>
                        <li><a href="/all-services"><i class="fa fa-angle-double-right"></i> Services</a></li>
                        <li><a href="/about"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                        <li><a href="/gallery"><i class="fa fa-angle-double-right"></i> Gallery</a>
                        </li>
                        <li><a href="/contact"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="news-letter">
                    <h6 class="text-white">subscribe Our Newsletter </h6>
                    <p>Keep up on our always evolving products features and technology. Enter your e-mail and
                        subscribe to our
                        newsletter.</p>
                    <form class="news-letter">
                        <input type="email" placeholder="Enter your Email" class="form-control placeholder">
                        <a class="button red" href="#">Subscribe</a>
                    </form>
                </div>
            </div>
        </div>
        <hr />
        <div class="copyright">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="text-center text-lg-center">
                        2025 © All Rights Reserved | Villo Auto Cars | Designed & Developed by <a
                            href="https://siliconradonnetworks.com/">Silicon Radon Networks (Pvt) Ltd.</a>
                    </div>
                </div>
                <div class="hidden col-lg-6 col-md-12">
                    <ul class="text-center list-inline text-lg-end">
                        <li><a href="#">privacy policy </a> | </li>
                        <li><a href="#">terms and conditions </a> |</li>
                        <li><a href="#">contact us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- back to top -->
<div class="car-top">
    <span><img src="{{ asset('/assets/images/car.png') }}" alt=""></span>
</div>
<!--Messenger and WhatsApp Floating btns-->
<a href="https://m.me/94773116657" class="float" style="z-index: 999999;">
    <i class="bi bi-messenger"></i>
</a>
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
<script>
    var wa_btnSetting = {
        "btnColor": "#16BE45",
        "ctaText": "",
        "cornerRadius": 40,
        "marginBottom": 20,
        "marginLeft": 20,
        "marginRight": 20,
        "btnPosition": "right",
        "whatsAppNumber": "94773116657",
        "welcomeMessage": "Hello! How can we help you today?",
        "zIndex": 999999,
        "btnColorScheme": "light"
    };
    window.onload = () => {
        _waEmbed(wa_btnSetting);
    };
</script>