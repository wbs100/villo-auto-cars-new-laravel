<!--vehicle grid view-->
@if(isset($vehicles) && $vehicles->total())
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="results-summary">Showing {{ $vehicles->firstItem() }} - {{ $vehicles->lastItem() }} of {{ $vehicles->total() }} results</div>
    </div>
@endif
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
