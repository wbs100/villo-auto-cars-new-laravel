<!-- Contact Tabs Partial -->
<div class="wrap-nav-tabs">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab1" data-toggle="tab">CONTACT FORM</a></li>
        <li><a href="#tab2" data-toggle="tab">LOCATION INFO</a></li>
        <li><a href="#tab3" data-toggle="tab">OPENING HOURS</a></li>
    </ul>
</div>

<div class="tab-content">
    <div class="tab-pane active" id="tab1">
        <h3 class="ui-title-inner">Send Us A Message</h3>
        <div class="decor-1"></div>
        <p>We'd love to hear from you! Fill out the form below and we'll get back to you as soon as possible.</p>

        <x-components.contact-form />
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

        <x-components.opening-hours />
    </div>
</div>
