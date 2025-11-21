@extends('layouts.app')

@push('head')
<link rel="stylesheet" href="{{ asset('NewAssts/css/master.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/theme.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/sections.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/responsive.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/blog.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/color.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/about.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/css/vehicle-listings.css') }}">
<!-- CDN & plugin CSS (also available in global header) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/switcher.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/color1.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/color2.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/color3.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/color4.css') }}">
<link rel="stylesheet" href="{{ asset('NewAssts/plugins/switcher/css/color5.css') }}">

<!-- jQuery fallback: only load if not loaded globally -->
<script>if (!window.jQuery) { document.write('<script src="{{ asset("NewAssts/plugins/jquery/jquery-1.11.1.min.js") }}"><\/script>'); }</script>
@endpush

    @section('custom-header')
        @include('public-site.header.header')
        @include('public-site.header.page-header', ['title' => 'VEHICLE LISTINGS', 'breadcrumb' => 'Vehicle Listings'])
    @endsection


@section('content')
    <div class="container">
        <!-- TOP FILTER BAR -->
        @include('public-site.partials.top-filter-bar')

        <div class="row">
            <div class="col-md-9" id="vehicleListingsContainer">
                <main class="main-content">
                @include('public-site.partials.sorting-bar')

                @include('public-site.partials.vehicle-cards', ['limit' => 4])
                @if(isset($vehicles))
                    <div class="pagination-nav d-flex justify-content-center mt-4">{{ $vehicles->links('components.custom-pagination') }}</div>
                @endif
                </main>
            </div>

            <!-- ENHANCED SIDEBAR WITH FILTERS -->
            <div class="col-md-3" id="sidebarFilters">
                @include('public-site.partials.sidebar-filters')
            </div>
        </div>
    </div>
@endsection

@push('page-ajax')
<script>
    function toggleFilter(el) {
        const parent = el.parentElement;
        parent.classList.toggle('active');
    }

    function toggleSidebarFilters() {
        const sidebar = document.getElementById('sidebarFilters');
        if (!sidebar) return;
        if (window.getComputedStyle(sidebar).display === 'none') sidebar.style.display = 'block';
        else sidebar.style.display = 'none';
    }

    // NOTE: View toggle UI removed; setView no longer necessary.

    function applyFilters() {
        // Collect selected filters and submit GET to listings-filter
        const params = new URLSearchParams();
        // Model search
        const modelSearchVal = document.getElementById('modelSearch')?.value;
        if (modelSearchVal) params.append('model', modelSearchVal);
        // Sort value
        const sortVal = document.getElementById('sortVehicles')?.value;
        if (sortVal) params.append('sort', sortVal);
        // Years
        document.querySelectorAll('#sidebarFilters input[name="year[]"]:checked').forEach(e => params.append('year[]', e.value));
        // Condition (single radio will be appended as array)
        const cond = document.querySelector('#sidebarFilters input[name="condition"]:checked'); if (cond) params.append('condition[]', cond.value);
        // Body
        document.querySelectorAll('#sidebarFilters input[name="body[]"]:checked').forEach(e => params.append('body[]', e.value));
        // Make
        document.querySelectorAll('#sidebarFilters input[name="make[]"]:checked').forEach(e => params.append('make[]', e.value));
        // Transmission
        document.querySelectorAll('#sidebarFilters input[name="transmission[]"]:checked').forEach(e => params.append('transmission[]', e.value));
        // Exterior Color
        document.querySelectorAll('#sidebarFilters input[name="exterior_color[]"]:checked').forEach(e => params.append('exterior_color[]', e.value));
        // Interior Color
        document.querySelectorAll('#sidebarFilters input[name="interior_color[]"]:checked').forEach(e => params.append('interior_color[]', e.value));
        // Price
        const min = document.getElementById('slider-price_min')?.value; const max = document.getElementById('slider-price_max')?.value;
        if (min) params.append('price_min', min.replace(/[^0-9]/g,''));
        if (max) params.append('price_max', max.replace(/[^0-9]/g,''));
        // Per page
        const perPageVal = document.getElementById('perPageSelect')?.value;
        if (perPageVal) params.append('per_page', perPageVal);
        const url = "{{ url('/listings-filter') }}" + '?' + params.toString();
        window.location.href = url;
    }

    // Return URLSearchParams for the current client-side filter & sort state
    function getClientParams() {
        const params = new URLSearchParams();
        const modelSearchVal = document.getElementById('modelSearch')?.value;
        if (modelSearchVal) params.append('model', modelSearchVal);
        const sortVal = document.getElementById('sortVehicles')?.value;
        if (sortVal) params.append('sort', sortVal);
        // price
        const min = document.getElementById('slider-price_min')?.value; const max = document.getElementById('slider-price_max')?.value;
        if (min) params.append('price_min', min.replace(/[^0-9]/g,''));
        if (max) params.append('price_max', max.replace(/[^0-9]/g,''));
        // per page
        const perPageVal = document.getElementById('perPageSelect')?.value;
        if (perPageVal) params.append('per_page', perPageVal);
        // add selected checkbox filters too
        document.querySelectorAll('#sidebarFilters input[type="checkbox"][name][value]:checked').forEach(e => params.append(e.name, e.value));
        // add selected radio (name duplicates allowed) -> append as values
        document.querySelectorAll('#sidebarFilters input[type="radio"][name][value]:checked').forEach(e => params.append(e.name, e.value));
        return params;
    }

    function resetFilters() {
        document.querySelectorAll('#sidebarFilters input[type="checkbox"], #sidebarFilters input[type="radio"]').forEach(i => i.checked = false);
        document.getElementById('modelSearch').value = '';
        document.getElementById('sortVehicles').value = '';
        // Reset slider via noUiSlider if available
        const slider = document.getElementById('slider-price');
        if (slider && slider.noUiSlider) {
            slider.noUiSlider.set([min, max]);
        }
        // Reset per-page select
        const perPageSelect = document.getElementById('perPageSelect');
        if (perPageSelect) perPageSelect.value = 4;
        // Optionally reapply filters
        // Update pagination links and client-side filtering, then navigate server-side reset
        updatePaginationLinksWithParams();
        filterCardsOnPage();
        // clear URL model & sort - do a replace on history so page state is reset
        history.replaceState(null, '', window.location.pathname);
        // trigger server reset by applying filters with reset empty filters (if desired)
        applyFilters();
    }
    // Press Enter on search to apply filters
    document.getElementById('modelSearch')?.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') { e.preventDefault(); applyFilters(); }
    });
    // Change sort to apply client-side sorting & reapply client-side filters
    document.getElementById('sortVehicles')?.addEventListener('change', function () { sortCardsOnPage(); filterCardsOnPage(); });
    // Change per page to apply quickly
    document.getElementById('perPageSelect')?.addEventListener('change', function () { applyFilters(); });
    // Make whole card clickable: delegate clicks from container
    document.getElementById('vehicleListingsContainer')?.addEventListener('click', function(e) {
        const card = e.target.closest('.card-clickable');
        if (!card) return;
        // ignore if clicking a real link or button
        if (e.target.closest('a') || e.target.closest('button') || e.target.closest('input')) return;
        const url = card.dataset.href;
        if (url) window.location.href = url;
    });

    // Adjust sidebar scrollable area to fit viewport (fallback for sticky behavior)
    function adjustSidebarHeight() {
        const sidebarFilters = document.getElementById('sidebarFilters');
        if (!sidebarFilters) return;
        const aside = sidebarFilters.querySelector('.sidebar-enhanced');
        if (!aside) return;

        // Only apply for desktop/tablet sizes (matching CSS media query)
        if (window.innerWidth < 992) {
            aside.style.top = '';
            aside.style.maxHeight = '';
            aside.style.overflowY = '';
            return;
        }

        // Compute combined header offsets (main header + page header) to apply as sticky top
        const headerEl = document.querySelector('.header');
        const pageHeaderEl = document.querySelector('.block-title');
        let headerHeight = (headerEl && headerEl.offsetHeight) ? headerEl.offsetHeight : 0;
        let pageHeaderHeight = (pageHeaderEl && pageHeaderEl.offsetHeight) ? pageHeaderEl.offsetHeight : 0;
        const extraSpacing = 180; // even larger breathing room: push sidebar further down per design
        const topOffset = headerHeight + pageHeaderHeight + extraSpacing;
        aside.style.top = topOffset + 'px';

        // Recalculate available height using the new top offset
        const buffer = 16; // breathing space from bottom of viewport
        const available = window.innerHeight - topOffset - buffer;
        // if (available > 220) {
        //     aside.style.maxHeight = available + 'px';
        //     aside.style.overflowY = 'auto';
        // } else {
        //     aside.style.maxHeight = '';
        //     aside.style.overflowY = '';
        // }
    }
    window.addEventListener('load', adjustSidebarHeight);
    window.addEventListener('resize', function () { setTimeout(adjustSidebarHeight, 120); });

    // Apply initial sorting & filters on load if there is a sort selection
    window.addEventListener('load', function () {
        sortCardsOnPage();
        filterCardsOnPage();
    });

    // Update pagination anchor hrefs to include current client-side params so clicking the page keeps the filters.
    function updatePaginationLinksWithParams() {
        const params = getClientParams();
        if (!params) return;
        const paginationNav = document.querySelectorAll('.pagination-nav a');
        if (!paginationNav || paginationNav.length === 0) return;
        paginationNav.forEach(a => {
            try {
                const url = new URL(a.href, window.location.origin);
                // keep the page param as set in href
                const page = url.searchParams.get('page');
                // append all client parameters (except any page param) while preserving page
                const newParams = new URLSearchParams(params.toString());
                if (page) newParams.set('page', page);
                url.search = newParams.toString();
                a.href = url.toString();
            } catch (error) {
                // if parsing fails, append simple
                const sep = a.href.indexOf('?') === -1 ? '?' : '&';
                a.href = a.href.replace(/[&?]model=[^&]*/g, '');
                a.href = a.href.replace(/[&?]sort=[^&]*/g, '');
                a.href = a.href.replace(/[&?]per_page=[^&]*/g, '');
                a.href = a.href + sep + params.toString();
            }
        });
    }

    // Set inputs from current URL query so the UI reflects URL state on page reload
    function setInputsFromQuery() {
        const sp = new URLSearchParams(window.location.search);
        const model = sp.get('model');
        const sort = sp.get('sort');
        if (model) document.getElementById('modelSearch').value = model;
        if (sort) document.getElementById('sortVehicles').value = sort;
        // Re-check per-page
        const perPage = sp.get('per_page');
        if (perPage) {
            const el = document.getElementById('perPageSelect');
            if (el) el.value = perPage;
        }
    }

    // Hook: update pagination links when checkboxes/radios change in sidebar
    document.querySelectorAll('#sidebarFilters input[type="checkbox"], #sidebarFilters input[type="radio"]').forEach(inp => {
        inp.addEventListener('change', function () { updatePaginationLinksWithParams(); });
    });

    // run on load to set inputs and update pagination links accordingly
    window.addEventListener('load', function () { setInputsFromQuery(); updatePaginationLinksWithParams(); });
</script>
    <script>
    // Client-side filtering of vehicle cards by model name and description.
    function filterCardsOnPage() {
        const container = document.getElementById('vehicleListingsContainer');
        if (!container) return;
        const query = (document.getElementById('modelSearch')?.value || '').trim().toLowerCase();

        // Remove any previous no-results message
        const prev = document.getElementById('noResultsMessage');
        if (prev) prev.remove();

        const cards = container.querySelectorAll('article.card');
        if (!cards || cards.length === 0) return;

        // If query is empty, show all cards
        if (!query) {
            cards.forEach(c => { c.style.display = ''; });
            return;
        }

        let visibleCount = 0;
        const tokens = query.split(/\s+/).filter(t => t.length);

        cards.forEach(card => {
            // Collect searchable text: title, description, list text
            const title = (card.querySelector('.card__title')?.textContent || '').toLowerCase();
            const desc = (card.querySelector('.card__description')?.textContent || '').toLowerCase();
            const list = (card.querySelector('.card__list')?.textContent || '').toLowerCase();
            const combined = [title, desc, list].join(' ');

            // All tokens must be present
            const matches = tokens.every(tok => combined.indexOf(tok) !== -1);
            if (matches) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        if (visibleCount === 0) {
            const msg = document.createElement('div');
            msg.id = 'noResultsMessage';
            msg.className = 'no-results-message';
            msg.style.padding = '22px';
            msg.style.textAlign = 'center';
            msg.style.color = '#666';
            msg.textContent = 'No vehicles match your search.';
            // insert before pagination if present, else append
            const pag = container.querySelector('.pagination-nav');
            if (pag) pag.parentElement.insertBefore(msg, pag);
            else container.appendChild(msg);
        }
        // Update pagination links so they include the current params.
        updatePaginationLinksWithParams();
    }
    </script>
    <script>
    // Client-side sorting of vehicle cards by price, year, or mileage.
    function sortCardsOnPage() {
        const container = document.getElementById('vehicleListingsContainer');
        if (!container) return;
        const mainContent = container.querySelector('main.main-content') || container;
        const cardsNodeList = mainContent.querySelectorAll('article.card');
        if (!cardsNodeList || cardsNodeList.length === 0) return;

        const sortVal = (document.getElementById('sortVehicles')?.value || '').toLowerCase();
        if (!sortVal) return; // no sorting requested

        const cards = Array.from(cardsNodeList);

        const getNumeric = (card, key) => {
            const v = card.getAttribute(`data-${key}`) || card.dataset[key] || '';
            const num = Number(String(v).replace(/[^0-9.-]+/g, ''));
            return Number.isFinite(num) ? num : NaN;
        };

        // Choose comparator
        let cmp;
        switch (sortVal) {
            case 'price-low':
                cmp = (a,b) => (getNumeric(a,'price') || 0) - (getNumeric(b,'price') || 0);
                break;
            case 'price-high':
                cmp = (a,b) => (getNumeric(b,'price') || 0) - (getNumeric(a,'price') || 0);
                break;
            case 'year-new':
                cmp = (a,b) => (getNumeric(b,'year') || 0) - (getNumeric(a,'year') || 0);
                break;
            case 'year-old':
                cmp = (a,b) => (getNumeric(a,'year') || 0) - (getNumeric(b,'year') || 0);
                break;
            case 'mileage-low':
                cmp = (a,b) => (getNumeric(a,'mileage') || 0) - (getNumeric(b,'mileage') || 0);
                break;
            case 'mileage-high':
                cmp = (a,b) => (getNumeric(b,'mileage') || 0) - (getNumeric(a,'mileage') || 0);
                break;
            default:
                cmp = (a,b) => 0; // unknown: keep order
        }

        // Sort cards and reattach in order
        cards.sort(cmp);

        // Insert sorted cards back before pagination (if any)
        const pagination = mainContent.querySelector('.pagination-nav');
        const insertBeforeNode = pagination || null;
        cards.forEach(card => {
            if (insertBeforeNode) mainContent.insertBefore(card, insertBeforeNode);
            else mainContent.appendChild(card);
        });
        updatePaginationLinksWithParams();
    }
    </script>
@endpush
