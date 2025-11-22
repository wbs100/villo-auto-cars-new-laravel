<!-- SCRIPTS -->
<script src="{{ asset('NewAssts/js/jquery-migrate-1.2.1.js') }}"></script>
<script src="{{ asset('NewAssts/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('NewAssts/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('NewAssts/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('NewAssts/js/waypoints.min.js') }}"></script>
<script src="{{ asset('NewAssts/plugins/prettyphoto/js/jquery.prettyPhoto.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="{{ asset('NewAssts/plugins/jelect/jquery.jelect.js') }}"></script>

<!-- HOME SLIDER -->
<script src="{{ asset('NewAssts/plugins/sliderpro/js/jquery.sliderPro.min.js') }}"></script>
<script src="{{ asset('NewAssts/plugins/nouislider/jquery.nouislider.all.min.js') }}"></script>
<script src="{{ asset('NewAssts/plugins/flexslider/jquery.flexslider.js') }}"></script>

<!-- THEME -->
<script src="{{ asset('NewAssts/js/cssua.min.js') }}"></script>
<script src="{{ asset('NewAssts/js/wow.min.js') }}"></script>
<script src="{{ asset('NewAssts/js/custom.js') }}"></script>

<!-- swiper CDN -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Main Swiper is initialized in ui-interactions.js -->

<!-- Hidden element to pass server-side price min/max to JS without embedding Blade in JS -->
<div id="priceRangeData" data-min="{{ floor($minPrice ?? 0) }}" data-max="{{ ceil($maxPrice ?? 0) }}" style="display:none"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Price range logic moved to public/NewAssts/js/custom.js for central management -->

<script src="{{ asset('NewAssts/js/ui-interactions.js') }}"></script>
<script src="{{ asset('NewAssts/js/vehicle-import.js') }}"></script>

@stack('scripts')
