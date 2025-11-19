@props(['items' => []])

<section class="widget">
    <h3 class="widget-title">related cars</h3>
    <div class="decor-1"></div>
    <div class="widget-content">
        @if(!empty($items))
            @foreach($items as $item)
                <section class="widget-post1 clearfix">
                    <div class="widget-post1__img">
                        <img class="img-responsive" src="{{ asset($item['image']) }}" height="75" width="75" alt="foto" />
                    </div>
                    <div class="widget-post1__inner">
                        <h3 class="widget-post1__title">{{ $item['title'] }}</h3>
                        <div class="widget-post1__price">Price: {{ $item['price'] }}</div>
                        <div class="widget-post1__description">{{ $item['description'] }}</div>
                    </div>
                </section>
            @endforeach
        @else
            <section class="widget-post1 clearfix">
                <div class="widget-post1__img">
                    <img class="img-responsive" src="{{ asset('NewAssts/media/widget-post/1.jpg') }}" height="75" width="75" alt="foto" />
                </div>
                <div class="widget-post1__inner">
                    <h3 class="widget-post1__title">Toyota Avalon</h3>
                    <div class="widget-post1__price">Price: Rs. 33,12000</div>
                    <div class="widget-post1__description">Cullam semper aibe vestibulum</div>
                </div>
            </section>
            <section class="widget-post1 clearfix">
                <div class="widget-post1__img">
                    <img class="img-responsive" src="{{ asset('NewAssts/media/widget-post/2.jpg') }}" height="75" width="75" alt="foto" />
                </div>
                <div class="widget-post1__inner">
                    <h3 class="widget-post1__title">Nissan Maxima</h3>
                    <div class="widget-post1__price">Price: Rs. 40,68500</div>
                    <div class="widget-post1__description">Cullam semper aibe vestibulum</div>
                </div>
            </section>
        @endif
    </div>
</section>
