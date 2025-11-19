<aside class="sidebar">
    <x-components.specifications-widget :specs="[
        'Make / model' => 'Chevrolet Impala',
        'Make year' => 'January 2016',
        'vehicle type' => 'Front-engine, front-wheel-drive, 5-passenger, 4-door sedan',
        'ENGINE TYPE' => 'DOHC 16-valve inline-4, aluminum block and head, direct fuel injection',
        'DIMENSIONS' => 'Wheelbase: 111.7 in<br />Length: 201.3 in<br /> Width: 73.0 in Height: 58.9 in<br />Curb weight: 3700 lb',
        'TRANSMISSION' => '6-speed automatic with manual shifting mode',
        'fuel economy' => 'EPA city/highway: 21/31 mpg',
        'Passenger Capacity' => '5 Seats'
    ]" />

    <x-components.video-widget :items="[
        ['videoUrl' => 'https://www.youtube.com/watch?v=neS5h_VSvb8', 'image' => 'NewAssts/media/banners/1.jpg'],
        ['videoUrl' => 'https://www.youtube.com/watch?v=neS5h_VSvb8', 'image' => 'NewAssts/media/banners/1.jpg'],
        ['videoUrl' => 'https://www.youtube.com/watch?v=neS5h_VSvb8', 'image' => 'NewAssts/media/banners/1.jpg'],
        ['videoUrl' => 'https://www.youtube.com/watch?v=neS5h_VSvb8', 'image' => 'NewAssts/media/banners/1.jpg']
    ]" />

    <x-components.related-cars-widget :items="[
        ['image' => 'NewAssts/media/widget-post/1.jpg', 'title' => 'Toyota Avalon', 'price' => 'Rs. 33,12000', 'description' => 'Cullam semper aibe vestibulum'],
        ['image' => 'NewAssts/media/widget-post/2.jpg', 'title' => 'Nissan Maxima', 'price' => 'Rs. 40,68500', 'description' => 'Cullam semper aibe vestibulum']
    ]" />

    <div class="widget widget_mod-b">
        <x-components.share-widget />
    </div>
</aside>
