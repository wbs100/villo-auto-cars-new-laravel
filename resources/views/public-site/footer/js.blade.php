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
<script>
	const swiper = new Swiper('.mySwiper', {
		slidesPerView: 1,
		spaceBetween: 30,
		loop: true,
		autoplay: { delay: 3500, disableOnInteraction: false },
		navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
		breakpoints: {
			640: { slidesPerView: 1, spaceBetween: 3 },
			768: { slidesPerView: 2, spaceBetween: 3 },
			1024: { slidesPerView: 3, spaceBetween: 3 }
		}
	});
</script>

<!-- Hidden element to pass server-side price min/max to JS without embedding Blade in JS -->
<div id="priceRangeData" data-min="{{ floor($minPrice ?? 0) }}" data-max="{{ ceil($maxPrice ?? 0) }}" style="display:none"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
	const minGap = 10000;
	const priceRangeData = document.getElementById('priceRangeData');
	const min = priceRangeData ? (parseInt(priceRangeData.dataset.min) || 0) : 0;
	const max = priceRangeData ? (parseInt(priceRangeData.dataset.max) || 0) : 0;
	const priceMin = document.getElementById('priceMin');
	const priceMax = document.getElementById('priceMax');
	const priceRangeDisplay = document.getElementById('priceRangeDisplay');
	const sliderRange = document.getElementById('sliderRange');

	// Ensure elements exist on the current page before attaching listeners
	if (priceMin && priceMax && priceRangeDisplay && sliderRange) {
		function formatPrice(val) { return 'Rs. ' + Number(val).toLocaleString(); }

		function updateSliderRange() {
			const minVal = parseInt(priceMin.value);
			const maxVal = parseInt(priceMax.value);
			const rangeWidth = (max - min) > 0 ? (max - min) : 1;
			const percentMin = ((minVal - min) / rangeWidth) * 100;
			const percentMax = ((maxVal - min) / rangeWidth) * 100;
			sliderRange.style.left = percentMin + '%';
			sliderRange.style.width = (percentMax - percentMin) + '%';
		}

		function updatePriceRange(e) {
			let minVal = parseInt(priceMin.value);
			let maxVal = parseInt(priceMax.value);
			if (maxVal - minVal < minGap) {
				if (e && e.target === priceMin) {
					priceMin.value = maxVal - minGap; minVal = maxVal - minGap; }
				else { priceMax.value = minVal + minGap; maxVal = minVal + minGap; }
			}
			priceRangeDisplay.textContent = formatPrice(priceMin.value) + ' - ' + formatPrice(priceMax.value);
			updateSliderRange();
		}
		priceMin.addEventListener('input', updatePriceRange);
		priceMax.addEventListener('input', updatePriceRange);
		updateSliderRange();
	}

// Adjust the sidebar price slider (noUiSlider) to use dynamic values
if (typeof noUiSlider !== 'undefined' && document.getElementById('slider-price')) {
	(function () {
		const sliderEl = document.getElementById('slider-price');
		try {
			if (sliderEl && sliderEl.noUiSlider) {
				sliderEl.noUiSlider.updateOptions({
					start: [min, max],
					range: { 'min': min, 'max': max },
					step: 1000
				});
			} else {
				$("#slider-price").noUiSlider({
					start: [min, max],
					step: 1000,
					connect: true,
					range: { 'min': min, 'max': max },
					format: wNumb({ decimals: 0, prefix: 'Rs.' })
				});
				$('#slider-price').Link('lower').to($('#slider-price_min'));
				$('#slider-price').Link('upper').to($('#slider-price_max'));
			}
			// Ensure the text inputs reflect the values
			$('#slider-price_min').val(min);
			$('#slider-price_max').val(max);
		} catch (err) {
			console.warn('Could not initialize price slider with dynamic range', err);
		}
	})();
}
</script>

<script>
	// Filter tabs
	document.querySelectorAll(".filter-tab").forEach((tab) => {
		tab.addEventListener("click", function () {
			document.querySelectorAll(".filter-tab").forEach((t) => t.classList.remove("active"));
			this.classList.add("active");
		});
	});
</script>

<script>
	document.getElementById('vehicleImportForm')?.addEventListener('submit', function (e) {
		e.preventDefault();
		const formData = new FormData(this); const data = {};
		for (let [key, value] of formData.entries()) { data[key] = value; }
		if (!data.name || !data.phone || !data.email || !data.brand || !data.condition) { alert('Please fill in all required fields.'); return; }
		const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
		if (!emailRegex.test(data.email)) { alert('Please enter a valid email address.'); return; }
		const subject = `Vehicle Import Inquiry - ${data.brand} ${data.model || ''}`.trim();
		const body = `Dear Villo Auto Cars Team,\n\nI am interested in importing a vehicle with the following specifications:\n\nCustomer Details:\n- Name: ${data.name}\n- Phone: ${data.phone}\n- Email: ${data.email}\n\nVehicle Requirements:\n- Brand: ${data.brand}\n- Model: ${data.model || 'Not specified'}\n- Year: ${data.year || 'Not specified'}\n- Condition: ${data.condition}\n- Mileage Preference: ${data.mileage || 'Not specified'}\n\nAdditional Requirements:\n${data.message || 'No additional requirements mentioned.'}\n\nPlease contact me to discuss this import inquiry further.\n\nBest regards,\n${data.name}`;
		const mailtoLink = `mailto:villoauto@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
		window.location.href = mailtoLink;
	});
</script>

<script>
	// Hover/visibility logic for image actions
	document.querySelectorAll(".car-image-wrapper .image-actions").forEach((el) => { el.style.display = "none"; });
	document.querySelectorAll(".car-image.secondary").forEach((img) => {
		img.addEventListener("mouseenter", function () { const actions = this.parentElement.querySelector('.image-actions'); if (actions) actions.style.display = 'block'; });
		img.addEventListener("mouseleave", function () { const actions = this.parentElement.querySelector('.image-actions'); if (actions) actions.style.display = 'none'; });
	});
	document.querySelectorAll('.car-image.primary').forEach((img) => { img.addEventListener('mouseenter', function () { const actions = this.parentElement.querySelector('.image-actions'); if (actions) actions.style.display = 'none'; }); });
</script>

<script>
	// Initialize all logo swipers
	const logoSwipers = document.querySelectorAll('.logo-swiper');
	logoSwipers.forEach((swiperElement, index) => {
		new Swiper(swiperElement, {
			slidesPerView: 2, spaceBetween: 30, loop: true, autoplay: { delay: 0, disableOnInteraction: false },
			speed: 3000 + (index * 1000), freeMode: true, freeModeMomentum: false, allowTouchMove: false, cssMode: false,
			breakpoints: {
				320: { slidesPerView: 2, spaceBetween: 20 },
				480: { slidesPerView: 3, spaceBetween: 25 },
				640: { slidesPerView: 4, spaceBetween: 30 },
				768: { slidesPerView: 5, spaceBetween: 40 },
				1024: { slidesPerView: 6, spaceBetween: 50 },
				1200: { slidesPerView: 7, spaceBetween: 60 }
			}
		});
	});
</script>

@stack('scripts')
