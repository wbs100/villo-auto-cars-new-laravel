@props(['items' => null, 'defaultVideoUrl' => 'https://www.youtube.com/watch?v=neS5h_VSvb8', 'defaultImage' => 'NewAssts/media/banners/1.jpg'])

<section class="widget widget-banner">
    <h3 class="widget-title">car video</h3>
    <div class="decor-1"></div>
    <div class="widget-content">
        <div class="widget-slider owl-carousel owl-theme owl-theme_mod-d enable-owl-carousel"
            data-pagination="true" data-single-item="true" data-auto-play="7000" data-transition-style="fade"
            data-main-text-animation="true" data-after-init-delay="3000" data-after-move-delay="1000"
            data-stop-on-hover="true">
            @php
                $slides = $items ?? [
                    ['videoUrl' => $defaultVideoUrl, 'image' => $defaultImage],
                    ['videoUrl' => $defaultVideoUrl, 'image' => $defaultImage],
                    ['videoUrl' => $defaultVideoUrl, 'image' => $defaultImage],
                    ['videoUrl' => $defaultVideoUrl, 'image' => $defaultImage],
                ];
            @endphp

            @foreach($slides as $slide)
                <div class="widget-slider__item">
                    <a href="{{ $slide['videoUrl'] ?? $defaultVideoUrl }}" rel="prettyPhoto">
                        <img class="img-responsive" src="{{ asset($slide['image'] ?? $defaultImage) }}" height="250" width="306" alt="banner" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
