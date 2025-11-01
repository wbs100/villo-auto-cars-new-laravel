<!--vehicle grid view-->
<div id="gridView" class="vehicle-view-mode">
    @include('public-site.partials.vehicle-grid')
</div>

<!--vehicle list view-->
<div id="listView" class="vehicle-view-mode d-none">
    @include('public-site.partials.vehicle-list')
</div>

<!--vehicle pagination-->
<div class="pagination-nav d-flex justify-content-center">
    {{ $vehicles->links('components.custom-pagination') }}
</div>