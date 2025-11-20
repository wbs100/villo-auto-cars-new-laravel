<!-- TOP FILTER BAR -->
<div class="top-filter-bar">
	<div class="filter-controls-wrapper">
		<!-- Model Search -->
		<div class="filter-group">
			<label class="filter-group-label" for="modelSearch">Model Search</label>
			<div class="model-search-wrapper">
				<input type="text" class="model-search-input" id="modelSearch" placeholder="Search by model name" aria-label="Search by model name">
				<i class="fa fa-search search-icon" aria-hidden="true"></i>
			</div>
		</div>

		<!-- Sort Vehicles -->
		<div class="filter-group">
			<label class="filter-group-label">Sort Vehicles</label>
			<div class="sort-dropdown-wrapper">
				<select class="sort-dropdown" id="sortVehicles">
					<option value="">Sort by</option>
					<option value="price-low">Price: Low to High</option>
					<option value="price-high">Price: High to Low</option>
					<option value="year-new">Year: Newest First</option>
					<option value="year-old">Year: Oldest First</option>
					<option value="mileage-low">Mileage: Low to High</option>
					<option value="mileage-high">Mileage: High to Low</option>
				</select>
				<i class="fa fa-chevron-down dropdown-arrow"></i>
			</div>
		</div>

		<!-- View Toggle -->
		<div class="filter-group view-filter" style="flex: 0;">
			<label class="filter-group-label">View</label>
			<div class="view-toggle-group">
				<button class="view-toggle-btn active" onclick="setView('grid')" data-view="grid" title="Grid view">
					<i class="fa fa-th" aria-hidden="true"></i>
				</button>
				<button class="view-toggle-btn" onclick="setView('list')" data-view="list" title="List view">
					<i class="fa fa-list" aria-hidden="true"></i>
				</button>
			</div>
		</div>


		<!-- Filter Button -->
		<div class="filter-group" style="flex: 0; align-self: flex-end;">
			<button class="filter-action-btn" onclick="toggleSidebarFilters()">
				<i class="fa fa-filter"></i> Filter
			</button>
		</div>
	</div>
</div>
