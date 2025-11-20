@php
    // Expected variables passed to this include:
    // route, primaryImage, secondaryImage, priceMain, priceMsrp, title, location, specs (array of 4), date
    $route = $route ?? route('car-details');
    $primaryImage = $primaryImage ?? asset('NewAssts/media/gridImg/1_1.webp');
    $secondaryImage = $secondaryImage ?? asset('NewAssts/media/gridImg/1_2.webp');
    $priceMain = $priceMain ?? 'Rs. 85,000';
    $priceMsrp = $priceMsrp ?? 'MSRP: Rs. 89,000';
    $title = $title ?? 'N/A';
    $location = $location ?? 'Miami, USA';
    $registerStatus = $registerStatus ?? null;
    $exteriorColor = $exteriorColor ?? null;
    // Determine register status icon and classes
    $registerIcon = 'fa-map-marker-alt';
    $registerIconClass = '';
    if ($registerStatus) {
        $regUpper = strtoupper($registerStatus);
        if (strpos($regUpper, 'UNREG') !== false) {
            $registerIcon = 'fa-times-circle';
            $registerIconClass = 'text-danger';
        } elseif (strpos($regUpper, 'REGISTER') !== false) {
            $registerIcon = 'fa-check-circle';
            $registerIconClass = 'text-success';
        } else {
            $registerIcon = 'fa-map-marker-alt';
        }
    }
    $specs = $specs ?? ['Petrol', '5', '3.0 cc', 'SUV'];
    $date = $date ?? 'March 26, 2021';
@endphp

<a href="{{ $route }}">
    <div class="car-card">
        <div class="car-image-wrapper">
            <img src="{{ $primaryImage }}" alt="Car Primary" class="car-image primary" />
            <img src="{{ $secondaryImage }}" alt="Car Secondary" class="car-image secondary" />
            <div class="image-actions">
                <button class="action-btn"><i class="fas fa-camera"></i></button>
            </div>
            <div class="price-tag"><span class="price-main">{{ $priceMain }}</span><span class="price-msrp">{{ $priceMsrp }}</span></div>
        </div>
        <div class="car-card-body">
            <div class="d-flex justify-content-between align-items-start mb-2">
                <h3 class="car-title mb-0">{{ $title }}</h3>
            </div>

            @if($registerStatus)
                <div class="car-location">
                    <i class="fas {{ $registerIcon }} {{ $registerIconClass }} me-2"></i>{{ $registerStatus }}
                </div>
            @else
                <div class="car-location">
                    <i class="fas fa-map-marker-alt me-2"></i>{{ $location }}
                </div>
            @endif

            <div class="car-specs">
                <div class="spec-item"><i class="fas fa-gas-pump"></i><span>{{ $specs[0] ?? '' }}</span></div>
                @if($exteriorColor)
                    <div class="spec-item">
                        <i class="fas fa-palette"></i>
                        <span class="d-flex align-items-center gap-2">
                            <span class="swatch" data-color="{{ $exteriorColor }}" style="display:inline-block;width:12px;height:12px;border-radius:50%;border:1px solid #ddd;"></span>
                            <script>(function(){var el=document.currentScript.previousElementSibling; if(el&&el.dataset&&el.dataset.color){try{el.style.backgroundColor=el.dataset.color;}catch(e){}}})();</script>
                            <span>{{ $exteriorColor }}</span>
                        </span>
                    </div>
                @else
                    <div class="spec-item"><i class="fas fa-user"></i><span>{{ $specs[1] ?? '' }}</span></div>
                @endif
                <div class="spec-item"><i class="fas fa-cog"></i><span>{{ $specs[2] ?? '' }}</span></div>
                <div class="spec-item"><i class="fas fa-car"></i><span>{{ $specs[3] ?? '' }}</span></div>
            </div>

            <div class="car-footer">
                <div class="car-date"><i class="far fa-calendar me-2"></i>{{ $date }}</div>
                <div class="share-btn"><i class="fas fa-share-alt"></i></div>
            </div>
        </div>
    </div>
</a>
