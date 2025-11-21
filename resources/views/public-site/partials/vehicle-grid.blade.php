<div class="row">
    @foreach ($vehicles as $vehicle)
    <!--vehicle card-->
    <div class="col-lg-4 col-sm-6">
        <div class="text-center car-item gray-bg">
            <div class="car-image">
                <img class="img-fluid" src="{{ 'uploads/vehicles/' . $vehicle->main_image }}" style="aspect-ratio: 4/3; object-fit: cover;" alt="">
                <div class="car-overlay-banner">
                    <ul>
                        <li><a href="{{ route('vehicle.details', $vehicle->id) }}"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
                <div class="car-list">
                    <ul class="list-inline">
                        <li><i class="fa fa-registered"></i> {{$vehicle->year}}</li>
                        <li><i class="fa fa-cog"></i> {{$vehicle->transmission}} </li>
                        <li><i class="fa fa-dashboard"></i> {{$vehicle->mileage}}</li>
                    </ul>
                </div>
            <div class="car-content">
                <div class="separator"></div>
                <div class="hidden star">
                    <i class="fa fa-star orange-color"></i>
                    <i class="fa fa-star orange-color"></i>
                    <i class="fa fa-star orange-color"></i>
                    <i class="fa fa-star orange-color"></i>
                    <i class="fa fa-star-o orange-color"></i>
                </div>
                <a href="{{ route('vehicle.details', $vehicle->id) }}">{{$vehicle->model}}</a>
                <div class="separator"></div>
                <div class="price">
                    <span class="hidden old-price">{{$vehicle->price}}</span>
                    <span class="new-price">Rs. {{$vehicle->price}} </span>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
