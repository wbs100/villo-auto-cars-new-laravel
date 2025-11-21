<!-- start filter container -->
<div class="container filteringpart">
    <div class="inventory-filter">
        <div class="row g-4">
            <div class="col-lg-8 col-12">
                <div class=" g-3">
                    <div class="col-md-4 col-12">
                        <label class="form-label w-100">Select Make</label>
                        <select class="form-select w-100">
                            <option selected>--Any Make--</option>
                            @foreach($makes as $make)
                                <option value="{{ $make['name'] }}">{{ $make['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Model</label>
                        <select class="form-select w-100">
                            <option selected>--Any Model--</option>
                            @foreach($models as $model)
                                <option value="{{ $model['name'] }}">{{ $model['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Body Style</label>
                        <select class="form-select w-100">
                            <option selected>--Any Body Style--</option>
                            @foreach($bodies as $body)
                                <option value="{{ $body['name'] }}">{{ $body['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Color</label>
                        <select class="form-select w-100">
                            <option selected>--Any Color--</option>
                            @foreach($colors as $color)
                                <option value="{{ $color['name'] }}">{{ $color['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Transmission</label>
                        <select class="form-select w-100">
                            <option selected>--Any Transmission--</option>
                            @foreach($transmissions as $transmission)
                                <option value="{{ $transmission['name'] }}">{{ $transmission['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Condition</label>
                        <select class="form-select w-100">
                            <option selected>--Any Condition--</option>
                            @foreach($conditions as $condition)
                                <option value="{{ $condition['name'] }}">{{ $condition['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="price-section">
                        <div class="price-header">Price Range</div>
                        <div class="price-value" id="priceRangeDisplay">Rs. {{ number_format(floor($minPrice ?? 0)) }} - Rs. {{ number_format(ceil($maxPrice ?? 0)) }}</div>
                    <div class="slider-container">
                        <div id="sliderTrack"></div>
                        <div id="sliderRange"></div>
                        <input type="range" min="{{ floor($minPrice ?? 0) }}" max="{{ ceil($maxPrice ?? 0) }}" step="1000" value="{{ floor($minPrice ?? 0) }}" id="priceMin">
                        <input type="range" min="{{ floor($minPrice ?? 0) }}" max="{{ ceil($maxPrice ?? 0) }}" step="1000" value="{{ ceil($maxPrice ?? 0) }}" id="priceMax">
                    </div>
                    <a href="{{ url('/vehicle-listings') }}" class="btn-search btn btn-primary">Search Inventory</a>
                </div>
            </div>
        </div>
    </div>
</div>
