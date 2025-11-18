// Gallery Filter & Lightbox Functionality - safe guards included
(function () {
    // Get elements
    const filterBtns = document.querySelectorAll('.gallery-filters ul li a');
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightboxModal = document.getElementById('lightboxModal');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const closeBtn = document.querySelector('.lightbox-close');
    const prevBtn = document.querySelector('.lightbox-prev');
    const nextBtn = document.querySelector('.lightbox-next');

    // If no gallery items, nothing to do
    if (!galleryItems || galleryItems.length === 0) return;

    // Convert NodeList to array for easier handling
    const itemsArray = Array.from(galleryItems);
    let currentIndex = 0;
    let visibleItems = itemsArray.slice();

    // Update visible items based on current filter
    function updateVisibleItems() { visibleItems = itemsArray.filter(item => item.style.display !== 'none'); }

    // Guarded: filter buttons
    if (filterBtns && filterBtns.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelectorAll('.gallery-filters ul li').forEach(li => li.classList.remove('active'));
                this.parentElement.classList.add('active');
                const filterValue = this.getAttribute('data-filter');
                itemsArray.forEach(item => {
                    if (filterValue === 'all') {
                        item.style.display = 'block';
                        setTimeout(() => { item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 10);
                    } else {
                        const category = item.getAttribute('data-category');
                        if (category === filterValue) {
                            item.style.display = 'block';
                            setTimeout(() => { item.style.opacity = '1'; item.style.transform = 'scale(1)'; }, 10);
                        } else {
                            item.style.opacity = '0'; item.style.transform = 'scale(0.8)';
                            setTimeout(() => { item.style.display = 'none'; }, 300);
                        }
                    }
                });
                updateVisibleItems();
            });
        });
    }

    // Lightbox functions - guarded
    function showLightbox() {
        if (!visibleItems || visibleItems.length === 0) return;
        const img = visibleItems[currentIndex].querySelector('img');
        const caption = visibleItems[currentIndex].querySelector('.gallery-caption');
        let imgSrc = img?.src || '';
        lightboxImg && (lightboxImg.src = imgSrc);
        lightboxCaption && (lightboxCaption.innerHTML = caption ? caption.innerHTML : '');
        if (lightboxModal) { lightboxModal.style.display = 'block'; document.body.style.overflow = 'hidden'; }
    }

    function closeLightbox() { if (lightboxModal) { lightboxModal.style.display = 'none'; document.body.style.overflow = 'auto'; } }

    // Open lightbox on item click
    itemsArray.forEach((item, index) => {
        item.addEventListener('click', function () {
            updateVisibleItems();
            currentIndex = visibleItems.indexOf(this);
            if (currentIndex === -1) currentIndex = 0;
            showLightbox();
        });
    });

    // Close/prev/next handlers
    if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
    if (lightboxModal) {
        lightboxModal.addEventListener('click', function (e) { if (e.target === lightboxModal) closeLightbox(); });
    }
    if (prevBtn) prevBtn.addEventListener('click', function (e) { e.stopPropagation(); currentIndex = (currentIndex - 1 + visibleItems.length) % visibleItems.length; showLightbox(); });
    if (nextBtn) nextBtn.addEventListener('click', function (e) { e.stopPropagation(); currentIndex = (currentIndex + 1) % visibleItems.length; showLightbox(); });

    // Keyboard navigation
    document.addEventListener('keydown', function (e) {
        if (lightboxModal && lightboxModal.style.display === 'block') {
            if (e.key === 'Escape') closeLightbox();
            else if (e.key === 'ArrowLeft') { currentIndex = (currentIndex - 1 + visibleItems.length) % visibleItems.length; showLightbox(); }
            else if (e.key === 'ArrowRight') { currentIndex = (currentIndex + 1) % visibleItems.length; showLightbox(); }
        }
    });

    // Init visible items
    updateVisibleItems();
})();
