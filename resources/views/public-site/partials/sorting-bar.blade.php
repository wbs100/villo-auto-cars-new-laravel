<div class="sorting">
    <div class="sorting__inner">
        <div class="sorting__item">
            <span class="sorting__title">Showing</span>
            <span id="resultsCount">{{ $vehicles->total() ?? '0' }} Results</span>
        </div>
        <div class="sorting__item">
            <span class="sorting__title">show on page</span>
            <div class="select jelect">
                <input id="page" name="page" value="0" data-text="imagemin" type="text" class="jelect-input" />
                <div tabindex="0" role="button" class="jelect-current">4 Items</div>
                <ul class="jelect-options">
                    <li class="jelect-option jelect-option_state_active">4 Items</li>

                </ul>
            </div>
        </div>
    </div>
</div>
