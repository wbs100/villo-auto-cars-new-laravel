<!-- Gallery Filters Partial -->
<div class="gallery-filters">
    <ul class="pagination">
        <x-components.gallery-filter filter="all" label="ALL" :active="true" />
        <x-components.gallery-filter filter="luxury" label="LUXURY" />
        <x-components.gallery-filter filter="suv" label="SUV" />
        <x-components.gallery-filter filter="sedan" label="SEDAN" />
        <x-components.gallery-filter filter="hybrid" label="HYBRID" />
    </ul>
</div>
