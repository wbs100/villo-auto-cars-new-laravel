<!-- grid container (featured vehicles) -->
<div class="container" style="padding-top: 30px;">
    <div class="row pt-10 mb-5 position-relative">
        <div class="col-lg-6"><div class="top-vehicles-label">Top Vehicles</div><h2 class="section-title">Featured Vehicles Suggested<br />by Dealer</h2><div class="title-underline"></div></div>
        <div class="col-lg-6 d-flex align-items-center justify-content-end h-100 d-none"><div class="d-flex h-100 justify-content-end gap-3"><button class="filter-tab active">New</button><button class="filter-tab">Certified Used</button><button class="filter-tab">Used</button></div></div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            @include('components.components.car-card', [
                'primaryImage' => asset('NewAssts/media/gridImg/1_1.webp'),
                'secondaryImage' => asset('NewAssts/media/gridImg/1_2.webp'),
                'priceMain' => 'Rs. 85,000',
                'priceMsrp' => 'MSRP: Rs. 89,000',
                'title' => 'Toyota Urban Cruiser Taisor G 2025',
                'location' => 'Miami, USA',
                'specs' => ['Petrol','20','4.0 cc','SUV']
            ])
        </div>
        <div class="col-lg-4 col-md-6">
            @include('components.components.car-card', [
                'primaryImage' => asset('NewAssts/media/gridImg/2_1.webp'),
                'secondaryImage' => asset('NewAssts/media/gridImg/2_2.webp'),
                'priceMain' => 'Rs. 85,060',
                'priceMsrp' => 'MSRP: Rs. 89,000',
                'title' => 'Honda Vezel 1500cc Z Grade',
                'location' => 'Miami, USA',
                'specs' => ['Petrol','20','2.0 cc','SUV']
            ])
        </div>
        <div class="col-lg-4 col-md-6">
            @include('components.components.car-card', [
                'primaryImage' => asset('NewAssts/media/gridImg/3_1.webp'),
                'secondaryImage' => asset('NewAssts/media/gridImg/3_2.webp'),
                'priceMain' => 'Rs. 85,000',
                'priceMsrp' => 'MSRP: Rs. 89,000',
                'title' => 'Suzuki wagon r Stingry 2017/2018',
                'location' => 'Miami, USA',
                'specs' => ['Petrol','5','6.2 cc','SUV']
            ])
        </div>
        <div class="col-lg-4 col-md-6">
            @include('components.components.car-card', [
                'primaryImage' => asset('NewAssts/media/gridImg/4_1.webp'),
                'secondaryImage' => asset('NewAssts/media/gridImg/4_2.webp'),
                'priceMain' => 'Rs. 75,000',
                'priceMsrp' => 'MSRP: Rs. 82,000',
                'title' => 'Toyota Roomy Custom G 2025',
                'location' => 'Miami, USA',
                'specs' => ['Petrol','20','3.0 cc','SUV']
            ])
        </div>
        <div class="col-lg-4 col-md-6">
            @include('components.components.car-card', [
                'primaryImage' => asset('NewAssts/media/gridImg/5_1.webp'),
                'secondaryImage' => asset('NewAssts/media/gridImg/5_2.webp'),
                'priceMain' => 'Rs. 68,000',
                'priceMsrp' => 'MSRP: Rs. 74,000',
                'title' => 'Toyota Raize Hybrid Z 2025',
                'location' => 'Miami, USA',
                'specs' => ['Petrol','20','3.0 cc','SUV']
            ])
        </div>
        <div class="col-lg-4 col-md-6">
            @include('components.components.car-card', [
                'primaryImage' => asset('NewAssts/media/gridImg/6_1.webp'),
                'secondaryImage' => asset('NewAssts/media/gridImg/6_2.webp'),
                'priceMain' => 'Rs. 55,000',
                'priceMsrp' => 'MSRP: Rs. 62,000',
                'title' => 'Kia Sonet GTX Plus 2025 - Brand New',
                'location' => 'Miami, USA',
                'specs' => ['Petrol','5','3.0 cc','Sedan']
            ])
        </div>
    </div>
</div>
