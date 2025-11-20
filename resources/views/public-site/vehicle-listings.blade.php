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

    function setView(view) {
        fetch("{{ route('set.view.mode') }}", {
            method: 'POST', headers: {'Content-Type':'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            body: JSON.stringify({view_mode: view})
        }).then(response => {
            // reload page to apply new view mode
            window.location.reload();
        }).catch(err => { console.error(err); });
    }

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
        applyFilters();
    }
    // Press Enter on search to apply filters
    document.getElementById('modelSearch')?.addEventListener('keydown', function (e) {
        if (e.key === 'Enter') { e.preventDefault(); applyFilters(); }
    });
    // Change sort to apply quickly
    document.getElementById('sortVehicles')?.addEventListener('change', function () { applyFilters(); });
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
        if (available > 220) {
            aside.style.maxHeight = available + 'px';
            aside.style.overflowY = 'auto';
        } else {
            aside.style.maxHeight = '';
            aside.style.overflowY = '';
        }
    }
    window.addEventListener('load', adjustSidebarHeight);
    window.addEventListener('resize', function () { setTimeout(adjustSidebarHeight, 120); });
</script>
@endpush
