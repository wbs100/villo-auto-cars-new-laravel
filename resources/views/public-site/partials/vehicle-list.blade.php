@foreach ($vehicles as $vehicle)
<div class="car-grid">
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="text-center car-item gray-bg">
                    <div class="car-image">
                    <img class="img-fluid" src="{{ 'uploads/vehicles/' . $vehicle->main_image }}" style="aspect-ratio: 1/1; object-fit: cover;" alt="img">
                    <div class="car-overlay-banner">
                        <ul>
                            <li><a href="{{ route('vehicle.details', $vehicle->id) }}"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="car-details">
                    <div class="car-title">
                    <a href="{{ route('vehicle.details', $vehicle->id) }}">{{$vehicle->model}}</a>
                    <p>
                        {{$vehicle->description}}
                    </p>
                </div>
                <div class="price">
                    <span class="new-price">{{$vehicle->price}}</span>
                    <a class="button red float-end" href="/vehicle/{{$vehicle->id}}">Details</a>
                </div>
                <div class="car-list">
                    <ul class="list-inline">
                        <li><i class="fa fa-registered"></i> {{$vehicle->year}}</li>
                        <li><i class="fa fa-cog"></i> {{$vehicle->transmission}} </li>
                        <li><i class="fa fa-dashboard"></i> {{$vehicle->mileage}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
