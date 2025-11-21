@props(['items' => []])

<section class="widget">
    <h3 class="widget-title">related cars</h3>
    <div class="decor-1"></div>
    <div class="widget-content">
        @if(!empty($items))
            @foreach($items as $item)
                <section class="widget-post1 clearfix">
                    <div class="widget-post1__img">
                        <a href="{{ $item['route'] ?? '#' }}"><img class="img-responsive" src="{{ asset($item['image']) }}" height="75" width="75" alt="foto" /></a>
                    </div>
                    <div class="widget-post1__inner">
                        <h3 class="widget-post1__title"><a href="{{ $item['route'] ?? '#' }}">{{ $item['title'] }}</a></h3>
                        <div class="widget-post1__price">Price: {{ $item['price'] }}</div>
                    </div>
                </section>
            @endforeach
        @else
            <p>No related cars available.</p>

        @endif
    </div>
</section>
