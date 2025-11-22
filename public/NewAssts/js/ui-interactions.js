(function () {
    // Filter tabs
    document.querySelectorAll(".filter-tab").forEach((tab) => {
        tab.addEventListener("click", function () {
            document.querySelectorAll(".filter-tab").forEach((t) => t.classList.remove("active"));
            this.classList.add("active");
        });
    });

    // Hover/visibility logic for image actions
    document.querySelectorAll(".car-image-wrapper .image-actions").forEach((el) => { el.style.display = "none"; });
    document.querySelectorAll(".car-image.secondary").forEach((img) => {
        img.addEventListener("mouseenter", function () { const actions = this.parentElement.querySelector('.image-actions'); if (actions) actions.style.display = 'block'; });
        img.addEventListener("mouseleave", function () { const actions = this.parentElement.querySelector('.image-actions'); if (actions) actions.style.display = 'none'; });
    });
    document.querySelectorAll('.car-image.primary').forEach((img) => { img.addEventListener('mouseenter', function () { const actions = this.parentElement.querySelector('.image-actions'); if (actions) actions.style.display = 'none'; }); });

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

    // Initialize main Swiper (if any)
    if (document.querySelector('.mySwiper')) {
        new Swiper('.mySwiper', {
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
    }
    // Add a showToast helper to display custom notifications
    window.showToast = function(type, title, message, duration = 3500) {
        let container = document.getElementById('app-toast-container');
        if (!container) {
            container = document.createElement('div');
            container.id = 'app-toast-container';
            container.className = 'app-toast-container';
            document.body.appendChild(container);
        }

        const toast = document.createElement('div');
        toast.className = `app-toast app-toast--${type}`;

        const icon = document.createElement('div');
        icon.className = 'app-toast__icon';
        icon.innerHTML = type === 'success' ? '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20 6L9 17l-5-5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>' : '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 9v4m0 4h.01M21 12A9 9 0 1 1 3 12a9 9 0 0 1 18 0z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>';

        const body = document.createElement('div');
        body.className = 'app-toast__body';
        const h = document.createElement('div'); h.className = 'app-toast__title'; h.innerText = title || (type === 'success' ? 'Success!' : 'Error!');
        const p = document.createElement('div'); p.className = 'app-toast__message'; p.innerText = message || '';
        body.appendChild(h); body.appendChild(p);

        const closeBtn = document.createElement('button');
        closeBtn.className = 'app-toast__close';
        closeBtn.innerHTML = '<svg width="12" height="12" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 6L6 14M6 6l8 8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
        closeBtn.addEventListener('click', () => { toast.classList.remove('app-toast--visible'); toast.addEventListener('transitionend', () => toast.remove()); });

        toast.appendChild(icon);
        toast.appendChild(body);
        toast.appendChild(closeBtn);

        container.appendChild(toast);
        // small delay to trigger transition
        setTimeout(() => toast.classList.add('app-toast--visible'), 10);
        // auto remove
        setTimeout(() => {
            if (toast.parentNode) {
                toast.classList.remove('app-toast--visible');
                toast.addEventListener('transitionend', () => toast.remove());
            }
        }, duration);
    };
})();
