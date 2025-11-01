@extends('layouts.app')

@section('content')

<!--=================================
 inner-intro -->

<section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
    <div class="text-center row intro-title">
      <div class="col-md-6 text-md-start d-inline-block">
        <h1 class="text-white">vehicle listings </h1>
      </div>
      <div class="col-md-6 text-md-end float-end">
        <ul class="page-breadcrumb">
          <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
          <li><span>listings</span> </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
product-listing  -->

<section class="product-listing page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4">
        <div class="listing-sidebar">
          <div class="widget">
            <div class="widget-search">
              <h5>Advanced Search</h5>
              <ul class="list-style -none">
                <li><i class="fa fa-star"> </i> Results Found <span class="float-end">({{ count($vehicles) }})</span></li>
              </ul>
            </div>
            <div class="clearfix">
              <!-- filter (sidebar) -->
              <form id="filterForm" method="GET" action="/listings-filter">
                <ul class="list-group">
                  <!--year-->
                  <li class="list-group-item">
                    <a href="#">Year</a>
                    <ul>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" name="allYears" id="allYears"
                            {{ request()->has('allYears') ? 'checked' : '' }}>
                          <label class="form-check-label" for="allYears">
                            All Years
                          </label>
                        </div>
                      </li>
                      @foreach ($years as $year)
                      <li>
                        <div class="form-check">
                          <input class="form-check-input year-checkbox"
                            type="checkbox"
                            name="year[]"
                            value="{{ $year->name }}"
                            id="chk-{{$year->name}}"
                            {{ in_array($year->name, (array) request()->input('year')) ? 'checked' : '' }}>
                          <label class="form-check-label" for="chk-{{$year->name}}">
                            {{$year->name}}
                          </label>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  <!--condition-->
                  <li class="list-group-item">
                    <a href="#">Condition</a>
                    <ul>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" name="allConditions" id="allConditions"
                            {{ request()->has('allConditions') ? 'checked' : '' }}>
                          <label class="form-check-label" for="allConditions">
                            All Conditions
                          </label>
                        </div>
                      </li>
                      @foreach ($conditions as $condition)
                      <li>
                        <div class="form-check">
                          <input class="form-check-input condition-checkbox"
                            type="checkbox"
                            name="condition[]"
                            value="{{ $condition->name }}"
                            id="chk-{{$condition->name}}"
                            {{ in_array($condition->name, (array) request()->input('condition')) ? 'checked' : '' }}>
                          <label class="form-check-label" for="chk-{{$condition->name}}">
                            {{$condition->name}}
                          </label>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  <!--body-->
                  <li class="list-group-item">
                    <a href="#">Body</a>
                    <ul>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="allBodies" name="allBodies"
                            {{ request()->has('allBodies') ? 'checked' : '' }}>
                          <label class="form-check-label" for="allBodies">
                            All Body Styles
                          </label>
                        </div>
                      </li>
                      @foreach ($bodies as $body)
                      <li>
                        <div class="form-check">
                          <input class="form-check-input body-checkbox"
                            type="checkbox"
                            name="body[]"
                            value="{{ $body->name }}"
                            id="chk-{{$body->name}}"
                            {{ in_array($body->name, (array) request()->input('body')) ? 'checked' : '' }}>
                          <label class="form-check-label" for="chk-{{$body->name}}">
                            {{$body->name}}
                          </label>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  <!--make-->
                  <li class="list-group-item">
                    <a href="#">Make</a>
                    <ul>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" name="allMakes" id="allMakes"
                            {{ request()->has('allMakes') ? 'checked' : '' }}>
                          <label class="form-check-label" for="allMakes">
                            All Makes
                          </label>
                        </div>
                      </li>
                      @foreach ($makes as $make)
                      <li>
                        <div class="form-check">
                          <input class="form-check-input make-checkbox"
                            type="checkbox"
                            name="make[]"
                            value="{{ $make->name }}"
                            id="chk-{{$make->name}}"
                            {{ in_array($make->name, (array) request()->input('make')) ? 'checked' : '' }}>
                          <label class="form-check-label" for="chk-{{$make->name}}">
                            {{$make->name}}
                          </label>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  <!--transmission-->
                  <li class="list-group-item">
                    <a href="#">Transmission</a>
                    <ul>
                      <li>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="allTransmissions" name="allTransmissions"
                            {{ request()->has('allTransmissions') ? 'checked' : '' }}>
                          <label class="form-check-label" for="allTransmissions">
                            All Transmissions
                          </label>
                        </div>
                      </li>
                      @foreach ($transmissions as $transmission)
                      <li>
                        <div class="form-check">
                          <input class="form-check-input transmission-checkbox"
                            type="checkbox"
                            name="transmission[]"
                            value="{{ $transmission->name }}"
                            id="chk-{{$transmission->name}}"
                            {{ in_array($transmission->name, (array) request()->input('transmission')) ? 'checked' : '' }}>
                          <label class="form-check-label" for="chk-{{$transmission->name}}">
                            {{$transmission->name}}
                          </label>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  <!--ext color-->
                  <li class="list-group-item">
                    <a href="#">Exterior Color</a>
                    <ul>
                      @foreach ($colors as $color)
                      <li>
                        <div class="form-check">
                          <input class="form-check-input"
                            type="checkbox"
                            name="exterior_color[]"
                            value="{{ $color->name }}"
                            id="chk-ext-{{$color->name}}"
                            {{ in_array($color->name, (array) request()->input('exterior_color')) ? 'checked' : '' }}>
                          <label class="form-check-label" for="chk-ext-{{$color->name}}">
                            {{$color->name}}
                          </label>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  <!--int color-->
                  <li class="list-group-item">
                    <a href="#">Interior Color</a>
                    <ul>
                      @foreach ($colors as $color)
                      <li>
                        <div class="form-check">
                          <input class="form-check-input"
                            type="checkbox"
                            name="interior_color[]"
                            value="{{ $color->name }}"
                            id="chk-int-{{$color->name}}"
                            {{ in_array($color->name, (array) request()->input('interior_color')) ? 'checked' : '' }}>
                          <label class="form-check-label" for="chk-int-{{$color->name}}">
                            {{$color->name}}
                          </label>
                        </div>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  <li class="list-group-item">
                    <button class="button w-100">
                      Filter
                    </button>
                  </li>
                </ul>
              </form>
            </div>
          </div>
          <!--banner (hidden)-->
          <div class="hidden widget-banner">
            <img class="img-fluid center-block" src="assets/images/banner.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-8">
        <form id="topFilterForm" method="GET" action="{{ url('/listings-top-filter') }}">
          <!-- top filter grid -->
          <div class="sorting-options-main">
            <div class="row">
              <!--price range-->
              <div class="col-lg-4">
                <div class="price-slide">
                  <div class="price">
                    <label class="mb-2" for="amount">Price Range (Rs.)</label>
                    <input type="text" id="amount" name="price_range" class="amount w-100" value="0 - 40,000,000,000" />
                    <div id="slider-range"></div>
                  </div>
                </div>
              </div>

              <!--model search-->
              <div class="col-lg-4">
                <div class="price-search">
                  <span class="mb-2">Model search</span>
                  <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="search" name="search" class="form-control placeholder" placeholder="Search by model name">
                  </div>
                </div>
              </div>

              <!--sort-->
              <div class="col-lg-4">
                <div class="price-search">
                  <span class="mb-2">Sort Vehicles</span>
                  <select name="sort" class="m-0 h-100">
                    <option value="">Sort by</option>
                    <option value="price_asc">Price: Lowest first</option>
                    <option value="price_desc">Price: Highest first</option>
                    <option value="name_asc">Product Name: A to Z</option>
                    <option value="name_desc">Product Name: Z to A</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row sorting-options">
              <!--items per page-->
              <div class="col-lg-3">
                <div class="price-search">
                  <span class="mb-2 d-lg-none">Items Displayed</span>
                  <select name="per_page">
                    <option value="9">Show</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>

              <!--view toggle buttons-->
              <div class="text-center col-lg-6">
                <div class="change-view-button">
                  <a href="#" class="view-toggle active" data-view="grid"><i class="fa fa-th"></i></a>
                  <a href="#" class="view-toggle" data-view="list"><i class="fa fa-list-ul"></i></a>
                </div>
              </div>

              <div class="col-lg-3">
                <button type="submit" class="button w-100">Filter</button>
              </div>
            </div>
          </div>
        </form>

        <!-- filtering results -->
        <div id="vehicleResults">
          @include('public-site.partials.vehicle-results', ['vehicles' => $vehicles])
        </div>

      </div>
    </div>
  </div>
</section>

<!--=================================
product-listing  -->

<script>
  // for ajax filtering
  document.addEventListener('DOMContentLoaded', function() {
    const handleAjaxForm = (formId) => {
      const form = document.getElementById(formId);
      form.addEventListener('submit', function(e) {
        e.preventDefault();

        const url = form.getAttribute('action');
        const formData = new FormData(form);
        const query = new URLSearchParams(formData).toString();

        fetch(`${url}?${query}`, {
            headers: {
              'X-Requested-With': 'XMLHttpRequest'
            }
          })
          .then(res => res.text())
          .then(html => {
            // Replace listings section with new content
            document.getElementById('vehicleResults').innerHTML = html;
          })
          .catch(err => console.error('AJAX form error:', err));
      });
    };

    handleAjaxForm('filterForm');
    handleAjaxForm('topFilterForm');
  });

  // for ajax view mode toggling (grid/list cards)
  document.querySelectorAll('.view-toggle').forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();

      const view = this.dataset.view;

      // Send to server
      fetch("{{ route('set.view.mode') }}", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({
          view_mode: view
        })
      });

      // Toggle active class
      document.querySelectorAll('.view-toggle').forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      // Toggle view containers
      if (view === 'grid') {
        document.getElementById('gridView').classList.remove('d-none');
        document.getElementById('listView').classList.add('d-none');
      } else {
        document.getElementById('listView').classList.remove('d-none');
        document.getElementById('gridView').classList.add('d-none');
      }
    });
  });

  // for checkbox filtering (in filter sidebar)
  document.addEventListener("DOMContentLoaded", function() {
    const allBodiesCheckbox = document.getElementById("allBodies");
    const bodyCheckboxes = document.querySelectorAll(".body-checkbox");

    const allTransmissionsCheckbox = document.getElementById("allTransmissions");
    const transmissionCheckboxes = document.querySelectorAll(".transmission-checkbox");

    const allYearsCheckbox = document.getElementById("allYears");
    const yearCheckboxes = document.querySelectorAll(".year-checkbox");

    const allConditionsCheckbox = document.getElementById("allConditions");
    const conditionCheckboxes = document.querySelectorAll(".condition-checkbox");

    const allMakesCheckbox = document.getElementById("allMakes");
    const makeCheckboxes = document.querySelectorAll(".make-checkbox");

    // Toggle individual body checkboxes
    allBodiesCheckbox?.addEventListener("change", function() {
      bodyCheckboxes.forEach(cb => cb.checked = false);
    });

    // Uncheck "All Bodies" if any specific body is checked
    bodyCheckboxes.forEach(cb => {
      cb.addEventListener("change", function() {
        if (this.checked) allBodiesCheckbox.checked = false;
      });
    });

    // Toggle individual transmission checkboxes
    allTransmissionsCheckbox?.addEventListener("change", function() {
      transmissionCheckboxes.forEach(cb2 => cb2.checked = false);
    });

    // Uncheck "All Transmissions" if any specific transmission is checked
    transmissionCheckboxes.forEach(cb2 => {
      cb2.addEventListener("change", function() {
        if (this.checked) allTransmissionsCheckbox.checked = false;
      });
    });

    /* ==== */

    // Toggle individual year checkboxes
    allYearsCheckbox?.addEventListener("change", function() {
      yearCheckboxes.forEach(cb => cb.checked = false);
    });

    // Uncheck "All Years" if any specific year is checked
    yearCheckboxes.forEach(cb => {
      cb.addEventListener("change", function() {
        if (this.checked) allYearsCheckbox.checked = false;
      });
    });

    // Toggle individual condition checkboxes
    allConditionsCheckbox?.addEventListener("change", function() {
      conditionCheckboxes.forEach(cb => cb.checked = false);
    });

    // Uncheck "All Conditions" if any specific condition is checked
    conditionCheckboxes.forEach(cb => {
      cb.addEventListener("change", function() {
        if (this.checked) allConditionsCheckbox.checked = false;
      });
    });

    // Toggle individual make checkboxes
    allMakesCheckbox?.addEventListener("change", function() {
      makeCheckboxes.forEach(cb => cb.checked = false);
    });

    // Uncheck "All Models" if any specific make is checked
    makeCheckboxes.forEach(cb => {
      cb.addEventListener("change", function() {
        if (this.checked) allMakesCheckbox.checked = false;
      });
    });
  });
</script>


@endsection