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
                            <option>Audi</option>
                            <option>BMW</option>
                            <option>Ferrari</option>
                            <option>Ford</option>
                            <option>Honda</option>
                            <option>Lamborghini</option>
                            <option>Lexus</option>
                            <option>Mercedes-Benz</option>
                            <option>Nissan</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Model</label>
                        <select class="form-select w-100">
                            <option selected>--Any Model--</option>
                            <option>Accord</option>
                            <option>Camry</option>
                            <option>Civic</option>
                            <option>Corolla</option>
                            <option>F-150</option>
                            <option>Model 3</option>
                            <option>Model S</option>
                            <option>Mustang</option>
                            <option>Silverado</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Body Style</label>
                        <select class="form-select w-100">
                            <option selected>--Any Body Style--</option>
                            <option>Convertible</option>
                            <option>Coupe</option>
                            <option>Hatchback</option>
                            <option>Pickup Truck</option>
                            <option>Sedan</option>
                            <option>SUV</option>
                            <option>Van</option>
                            <option>Wagon</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Mileage</label>
                        <select class="form-select w-100">
                            <option selected>--Any Mileage--</option>
                            <option>Under 10,000 miles</option>
                            <option>10,000 - 30,000 miles</option>
                            <option>30,000 - 50,000 miles</option>
                            <option>50,000 - 75,000 miles</option>
                            <option>75,000 - 100,000 miles</option>
                            <option>Over 100,000 miles</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Transmission</label>
                        <select class="form-select w-100">
                            <option selected>--Any Transmission--</option>
                            <option>Automatic</option>
                            <option>Manual</option>
                            <option>CVT</option>
                            <option>Semi-Automatic</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label w-100">Select Condition</label>
                        <select class="form-select w-100">
                            <option selected>--Any Condition--</option>
                            <option>New</option>
                            <option>Used</option>
                            <option>Certified Pre-Owned</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="price-section">
                    <div class="price-header">Price Range</div>
                    <div class="price-value" id="priceRangeDisplay">Rs. 6,90000 - Rs. 901,70000</div>
                    <div class="slider-container">
                        <div id="sliderTrack"></div>
                        <div id="sliderRange"></div>
                        <input type="range" min="6900" max="801700" step="1000" value="6900" id="priceMin">
                        <input type="range" min="6900" max="801700" step="1000" value="801700" id="priceMax">
                    </div>
                    <a href="{{ url('/vehicle-listings') }}" class="btn-search btn btn-primary">Search Inventory</a>
                </div>
            </div>
        </div>
    </div>
</div>
