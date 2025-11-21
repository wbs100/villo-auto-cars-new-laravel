<!-- services -->
<div class="wrap-section-border wow bounceInUp" data-wow-duration="2s">
    <section class="section_mod-b section-bg section-bg_primary" style="padding-top: 30px; padding-bottom: 0px; height: fit-content;">
        <div class="bg-inner border-section-top border-section-top_mod-a"><div class="container"><div class="row"><div class="col-xs-12">
            <h2 class="ui-title-block ui-title-block_mod-a text-center">Our Services</h2>
            <div class="ui-subtitle-block_mod-a">Comprehensive vehicle solutions for your convenience</div>
            <div class="slider-services owl-carousel owl-theme owl-theme_mod-a enable-owl-carousel" data-min480="2" data-min768="3" data-min992="4" data-min1200="4" data-pagination="true" data-navigation="false" data-auto-play="4000" data-stop-on-hover="true">
                @include('components.components.service-item', ['iconClass' => 'icon flaticon-car33', 'title' => 'Vehicle <strong>SALES</strong>', 'description' => 'Wide selection of brand-new & reconditioned cars from trusted brands.'])
                @include('components.components.service-item', ['iconClass' => 'icon flaticon-transport320', 'title' => 'Vehicle <strong>IMPORTS</strong>', 'description' => 'Direct import services for custom vehicle orders from Japan & beyond.'])
                @include('components.components.service-item', ['iconClass' => 'icon flaticon-automobile8', 'title' => 'Financing <strong>ASSISTANCE</strong>', 'description' => 'Support with bank leasing and flexible payment plans to suit your budget.'])
                @include('components.components.service-item', ['iconClass' => 'icon flaticon-transport391', 'title' => 'Vehicle <strong>TRADE-INS</strong>', 'description' => 'Exchange your old car for a newer model at the best possible value.'])
                @include('components.components.service-item', ['iconClass' => 'icon flaticon-repairing4', 'title' => 'Documentation <strong>SUPPORT</strong>', 'description' => 'Assistance with vehicle registration, insurance, and legal paperwork.'])
            </div></div></div><div class="border-section-bottom"></div></div></div>
    </section>
</div>
