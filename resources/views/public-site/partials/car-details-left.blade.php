<main class="main-content">
    <article class="car-details">
        @php
            $title = isset($vehicle) ? trim(($vehicle->make ?? '') . ' ' . ($vehicle->model ?? '') . ' ' . ($vehicle->manufactured_year ?? '')) : 'Chevrolet Impala';
            $price = (isset($vehicle) && isset($vehicle->price)) ? 'Rs. ' . number_format($vehicle->price, 0) : 'Rs. 27,92000';
            // images from the vehicle (main_image and others)
            $images = [];
            if (isset($vehicle)) {
                if ($vehicle->main_image) $images[] = asset('uploads/vehicles/' . $vehicle->main_image);
                foreach (['image_2','image_3','image_4','image_5'] as $imgKey) {
                    if (!empty($vehicle->$imgKey)) $images[] = asset('uploads/vehicles/' . $vehicle->$imgKey);
                }
            }
            // fallback if no images
            if (empty($images)) {
                $images = [asset('NewAssts/media/slider_product/large/1.jpg')];
            }
        @endphp
        <div class="car-details__wrap-title clearfix">
            <h2 class="car-details__title">{{ $title }}</h2>
            <div class="car-details__wrap-price">
                <span class="car-details__price"><span class="car-details__price-inner">{{ $price }}</span></span>
            </div>
        </div>

        <div id="slider-product" class="flexslider slider-product">
            <ul class="slides">
                @foreach($images as $img)
                    <li>
                        <a href="{{ $img }}">
                            <img class="img-responsive" src="{{ $img }}" height="430" width="770" alt="Foto" />
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div id="carousel-product" class="flexslider carousel-product">
            <ul class="slides">
                @foreach($images as $img)
                    <li>
                        <img src="{{ $img }}" height="75" width="95" alt="foto" />
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Nav tabs -->
        <div class="wrap-nav-tabs">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab1" data-toggle="tab">vehicle DESCRIPTION</a>
                </li>
                <li><a href="#tab2" data-toggle="tab">features</a></li>
                <li><a href="#tab3" data-toggle="tab">inquiry</a></li>
            </ul>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="tab1">
                <h3 class="ui-title-inner">{{ isset($vehicle) ? ($vehicle->model ?? 'Vehicle Details') : 'Vehicle Description' }}</h3>
                <div class="decor-1"></div>
                <p>{{ isset($vehicle) ? ($vehicle->description ?? '') : 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.' }}</p>

            </div>
            <div class="tab-pane" id="tab2">
                <h3 class="ui-title-inner">{{ isset($vehicle) ? 'Key Features' : 'Lorem ipsum dolor' }}</h3>
                <div class="decor-1"></div>
                <p>{{ isset($vehicle) ? ($vehicle->features ?? 'No features provided.') : 'Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.' }}</p>
            </div>
            <div class="tab-pane" id="tab3">
                <h3 class="ui-title-inner">Sit amet consectetur</h3>
                <div class="decor-1"></div>
                <p>
                    No features provided.
                </p>

            </div>
        </div>


        <!-- end accordion -->
    </article>

    <div class="wrap-section-border">
        <section class="section_letter section-bg section-bg_primary">
            <div class="letter bg-inner">
                <div class="letter__inner">
                    <h2 class="letter__title">
                        Do you want some modifications or need a custom build
                        vehicle ?
                    </h2>
                    <div class="letter__info">
                        Integer tor bibendum estnu faucibus gravida aliquam nu
                        lectus lacina lorem ipsum dolor sit amet consectetur
                        adipisicing.
                    </div>
                </div>
                <div class="letter__btn wrap-social-block wrap-social-block_mod-a">
                    <a class="social-block social-block_mod-a btn-effect" href="#">
                        <div class="social-block__inner">send details</div>
                    </a>
                </div>
            </div>
            <!-- end bg-inner -->
            <div class="border-section-bottom border-section-bottom_mod-a"></div>
        </section>
        <!-- end section_mod-b -->
    </div>
    <!-- end wrap-section-border -->
</main>
<!-- end main-content -->
