<!-- start filter container -->
<div class="container filteringpart">
    <div class="inventory-filter">
        <div class="row g-4">
            <div class="col-lg-8 col-12">
                {{-- Filter form: use GET to send querystring params to public listings controller --}}
                <form method="GET" action="{{ url('/vehicle-listings') }}" id="filterForm">
                <div class=" g-3">
                    <div class="col-md-4 col-12">
                        <label class="form-label w-100">Select Make</label>
                        <select class="form-select w-100" name="make[]">
                            <option value="" disabled {{ !request('make') ? 'selected' : '' }}>--Any Make--</option>
                            @foreach($makes as $make)
                                <option value="{{ $make['name'] }}" {{ in_array($make['name'], (array) request('make')) ? 'selected' : '' }}>{{ $make['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Model</label>
                        {{-- Public Listings controller accepts `search` to filter by model (uses LIKE), so we'll name it `search` --}}
                        <select class="form-select w-100" name="search">
                            <option value="" disabled {{ !request('search') ? 'selected' : '' }}>--Any Model--</option>
                            @foreach($models as $model)
                                <option value="{{ $model['name'] }}" {{ request('search') == $model['name'] ? 'selected' : '' }}>{{ $model['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Body Style</label>
                        <select class="form-select w-100" name="body[]">
                            <option value="" disabled {{ !request('body') ? 'selected' : '' }}>--Any Body Style--</option>
                            @foreach($bodies as $body)
                                <option value="{{ $body['name'] }}" {{ in_array($body['name'], (array) request('body')) ? 'selected' : '' }}>{{ $body['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Color</label>
                        {{-- We send exterior_color to match controller filter --}}
                        <select class="form-select w-100" name="exterior_color[]">
                            <option value="" disabled {{ !request('exterior_color') ? 'selected' : '' }}>--Any Color--</option>
                            @foreach($colors as $color)
                                <option value="{{ $color['name'] }}" {{ in_array($color['name'], (array) request('exterior_color')) ? 'selected' : '' }}>{{ $color['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Transmission</label>
                        <select class="form-select w-100" name="transmission[]">
                            <option value="" disabled {{ !request('transmission') ? 'selected' : '' }}>--Any Transmission--</option>
                            @foreach($transmissions as $transmission)
                                <option value="{{ $transmission['name'] }}" {{ in_array($transmission['name'], (array) request('transmission')) ? 'selected' : '' }}>{{ $transmission['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Condition</label>
                        <select class="form-select w-100" name="condition[]">
                            <option value="" disabled {{ !request('condition') ? 'selected' : '' }}>--Any Condition--</option>
                            @foreach($conditions as $condition)
                                <option value="{{ $condition['name'] }}" {{ in_array($condition['name'], (array) request('condition')) ? 'selected' : '' }}>{{ $condition['name'] }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="price-section">
                        <div class="price-header">Price Range</div>
                        <div class="price-value" id="priceRangeDisplay">Rs. {{ number_format(floatval(request('price_min') ?? floor($minPrice ?? 0))) }} - Rs. {{ number_format(floatval(request('price_max') ?? ceil($maxPrice ?? 0))) }}</div>
                    <div class="slider-container">
                        <div id="sliderTrack"></div>
                        <div id="sliderRange"></div>
                        <input type="range" min="{{ floor($minPrice ?? 0) }}" max="{{ ceil($maxPrice ?? 0) }}" step="1000" value="{{ request('price_min') ?? floor($minPrice ?? 0) }}" id="priceMin" name="price_min">
                        <input type="range" min="{{ floor($minPrice ?? 0) }}" max="{{ ceil($maxPrice ?? 0) }}" step="1000" value="{{ request('price_max') ?? ceil($maxPrice ?? 0) }}" id="priceMax" name="price_max">
                    </div>
                    {{-- Submit button for the filter form (GET) --}}
                    <button type="submit" class="btn-search btn btn-primary">Search Inventory</button>
                </div>
            </div>
        </div>
    </div>
                </form>
 </div>

{{-- price range behavior moved to `public/NewAssts/js/custom.js` to avoid inline duplication --}}
