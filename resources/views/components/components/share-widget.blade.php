<div {{ $attributes->merge(['class' => 'widget widget_mod-b share-widget']) }}>
    <div class="wrap-social-block wrap-social-block_mod-a">
        <div class="social-block">
            <div class="social-block__inner">
                <span class="social-block__title">{{ $title ?? 'SHARE THIS' }}</span>
                <ul class="social-block__list list-inline">
                    <li><a href="{{ $facebook ?? 'javascript:void(0);' }}" aria-label="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="{{ $twitter ?? 'javascript:void(0);' }}" aria-label="Share on Twitter"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="{{ $google ?? 'javascript:void(0);' }}" aria-label="Share on Google+"><i class="fa-brands fa-google-plus-g"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
