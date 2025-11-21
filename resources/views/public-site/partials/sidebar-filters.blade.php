<aside class="sidebar sidebar-enhanced">
	<h3 class="filter-section-title">Filter Vehicles</h3>

	<!-- Year Filter -->
	<div class="filter-dropdown">
		<div class="filter-header" onclick="toggleFilter(this)">
			<h4>Year</h4>
			<span class="filter-arrow">▼</span>
		</div>
		<div class="filter-content">
			<div class="filter-options">
				<div class="filter-option">
					<input type="checkbox" id="year-2024" name="year[]" value="2024">
					<label for="year-2024">2024</label>
					<span class="filter-count">(12)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="year-2023" name="year[]" value="2023">
					<label for="year-2023">2023</label>
					<span class="filter-count">(25)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="year-2022" name="year[]" value="2022">
					<label for="year-2022">2022</label>
					<span class="filter-count">(18)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="year-2021" name="year[]" value="2021">
					<label for="year-2021">2021</label>
					<span class="filter-count">(15)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="year-2020" name="year[]" value="2020">
					<label for="year-2020">2020</label>
					<span class="filter-count">(22)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="year-2019" name="year[]" value="2019">
					<label for="year-2019">2019</label>
					<span class="filter-count">(19)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="year-older" name="year[]" value="older">
					<label for="year-older">2018 & Older</label>
					<span class="filter-count">(45)</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Condition Filter -->
	<div class="filter-dropdown">
		<div class="filter-header" onclick="toggleFilter(this)">
			<h4>Condition</h4>
			<span class="filter-arrow">▼</span>
		</div>
		<div class="filter-content">
			<div class="filter-options">
				<div class="filter-option">
					<input type="radio" id="condition-new" name="condition" value="new">
					<label for="condition-new">Brand New</label>
					<span class="filter-count">(35)</span>
				</div>
				<div class="filter-option">
					<input type="radio" id="condition-used" name="condition" value="used">
					<label for="condition-used">Used</label>
					<span class="filter-count">(89)</span>
				</div>
				<div class="filter-option">
					<input type="radio" id="condition-certified" name="condition" value="certified">
					<label for="condition-certified">Certified Pre-Owned</label>
					<span class="filter-count">(24)</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Body Type Filter -->
	<div class="filter-dropdown">
		<div class="filter-header" onclick="toggleFilter(this)">
			<h4>Body</h4>
			<span class="filter-arrow">▼</span>
		</div>
		<div class="filter-content">
			<div class="filter-options">
				<div class="filter-option">
					<input type="checkbox" id="body-sedan" name="body[]" value="sedan">
					<label for="body-sedan">Sedan</label>
					<span class="filter-count">(42)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="body-suv" name="body[]" value="suv">
					<label for="body-suv">SUV</label>
					<span class="filter-count">(38)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="body-coupe" name="body[]" value="coupe">
					<label for="body-coupe">Coupe</label>
					<span class="filter-count">(15)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="body-hatchback" name="body[]" value="hatchback">
					<label for="body-hatchback">Hatchback</label>
					<span class="filter-count">(28)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="body-convertible" name="body[]" value="convertible">
					<label for="body-convertible">Convertible</label>
					<span class="filter-count">(8)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="body-wagon" name="body[]" value="wagon">
					<label for="body-wagon">Wagon</label>
					<span class="filter-count">(12)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="body-van" name="body[]" value="van">
					<label for="body-van">Van</label>
					<span class="filter-count">(18)</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Make Filter -->
	<div class="filter-dropdown">
		<div class="filter-header" onclick="toggleFilter(this)">
			<h4>Make</h4>
			<span class="filter-arrow">▼</span>
		</div>
		<div class="filter-content">
			<div class="filter-options">
				<div class="filter-option">
					<input type="checkbox" id="make-audi" name="make[]" value="audi">
					<label for="make-audi">Audi</label>
					<span class="filter-count">(5)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="make-bentley" name="make[]" value="bentley">
					<label for="make-bentley">Bentley</label>
					<span class="filter-count">(10)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="make-bmw" name="make[]" value="bmw">
					<label for="make-bmw">BMW</label>
					<span class="filter-count">(70)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="make-chevrolet" name="make[]" value="chevrolet">
					<label for="make-chevrolet">Chevrolet</label>
					<span class="filter-count">(6)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="make-mercedes" name="make[]" value="mercedes">
					<label for="make-mercedes">Mercedes-Benz</label>
					<span class="filter-count">(80)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="make-landrover" name="make[]" value="landrover">
					<label for="make-landrover">Land Rover</label>
					<span class="filter-count">(36)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="make-toyota" name="make[]" value="toyota">
					<label for="make-toyota">Toyota</label>
					<span class="filter-count">(95)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="make-honda" name="make[]" value="honda">
					<label for="make-honda">Honda</label>
					<span class="filter-count">(72)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="make-nissan" name="make[]" value="nissan">
					<label for="make-nissan">Nissan</label>
					<span class="filter-count">(48)</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Transmission Filter -->
	<div class="filter-dropdown">
		<div class="filter-header" onclick="toggleFilter(this)">
			<h4>Transmission</h4>
			<span class="filter-arrow">▼</span>
		</div>
		<div class="filter-content">
			<div class="filter-options">
				<div class="filter-option">
					<input type="checkbox" id="trans-auto" name="transmission[]" value="automatic">
					<label for="trans-auto">Automatic</label>
					<span class="filter-count">(112)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="trans-manual" name="transmission[]" value="manual">
					<label for="trans-manual">Manual</label>
					<span class="filter-count">(36)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="trans-cvt" name="transmission[]" value="cvt">
					<label for="trans-cvt">CVT</label>
					<span class="filter-count">(8)</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Exterior Color Filter -->
	<div class="filter-dropdown">
		<div class="filter-header" onclick="toggleFilter(this)">
			<h4>Exterior Color</h4>
			<span class="filter-arrow">▼</span>
		</div>
		<div class="filter-content">
			<div class="filter-options">
				<div class="filter-option">
					<input type="checkbox" id="color-white" name="exterior_color[]" value="white">
					<label for="color-white">White</label>
					<span class="filter-count">(45)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="color-black" name="exterior_color[]" value="black">
					<label for="color-black">Black</label>
					<span class="filter-count">(38)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="color-silver" name="exterior_color[]" value="silver">
					<label for="color-silver">Silver</label>
					<span class="filter-count">(32)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="color-gray" name="exterior_color[]" value="gray">
					<label for="color-gray">Gray</label>
					<span class="filter-count">(28)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="color-red" name="exterior_color[]" value="red">
					<label for="color-red">Red</label>
					<span class="filter-count">(15)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="color-blue" name="exterior_color[]" value="blue">
					<label for="color-blue">Blue</label>
					<span class="filter-count">(22)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="color-other" name="exterior_color[]" value="other">
					<label for="color-other">Other Colors</label>
					<span class="filter-count">(16)</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Interior Color Filter -->
	<div class="filter-dropdown active">
		<div class="filter-header" onclick="toggleFilter(this)">
			<h4>Interior Color</h4>
			<span class="filter-arrow">▼</span>
		</div>
		<div class="filter-content">
			<div class="filter-options">
				<div class="filter-option">
					<input type="checkbox" id="int-black" name="interior_color[]" value="black">
					<label for="int-black">Black</label>
					<span class="filter-count">(65)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="int-beige" name="interior_color[]" value="beige">
					<label for="int-beige">Beige</label>
					<span class="filter-count">(42)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="int-gray" name="interior_color[]" value="gray">
					<label for="int-gray">Gray</label>
					<span class="filter-count">(35)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="int-brown" name="interior_color[]" value="brown">
					<label for="int-brown">Brown</label>
					<span class="filter-count">(18)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="int-tan" name="interior_color[]" value="tan">
					<label for="int-tan">Tan</label>
					<span class="filter-count">(12)</span>
				</div>
				<div class="filter-option">
					<input type="checkbox" id="int-other" name="interior_color[]" value="other">
					<label for="int-other">Other Colors</label>
					<span class="filter-count">(8)</span>
				</div>
			</div>
		</div>
	</div>

	<!-- Price Range Filter -->
	<div class="price-filter-wrapper">
		<h4>Price Range</h4>
		<div class="slider-price" id="slider-price"></div>
		<span class="slider-price__wrap-input">
			<input class="slider-price__input" id="slider-price_min" placeholder="Min" value="{{ floor($minPrice ?? 0) }}" />
			<span>-</span>
			<input class="slider-price__input" id="slider-price_max" placeholder="Max" value="{{ ceil($maxPrice ?? 0) }}" />
		</span>
	</div>

	<!-- Action Buttons - simple full-width buttons (pinned footer) -->
	<div class="sidebar-footer" style="margin-top: 20px;">
		<button class="btn-filter-primary" onclick="applyFilters()">APPLY FILTERS</button>
		<button class="btn-filter-secondary" onclick="resetFilters()">RESET ALL</button>
	</div>
</aside>

