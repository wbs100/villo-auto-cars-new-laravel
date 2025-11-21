// Services page JS - statistics counters and small interactive helpers
(function () {
    function animateCounters(counters) {
        counters.forEach(counter => {
            const raw = counter.getAttribute('data-target') || counter.textContent;
            const target = parseInt(String(raw).replace(/,/g, '').replace(/[^0-9]/g, ''), 10) || 0;
            let start = 0;
            const duration = 2000; // ms
            const startTimestamp = null;
            const step = (timestamp, startTimestampRef = { val: null }) => {
                if (!startTimestampRef.val) startTimestampRef.val = timestamp;
                const progress = Math.min((timestamp - startTimestampRef.val) / duration, 1);
                const eased = progress * (2 - progress); // easeOutQuad
                const value = Math.floor(eased * (target - start) + start);
                counter.textContent = value.toLocaleString();
                if (progress < 1) {
                    window.requestAnimationFrame((t) => step(t, startTimestampRef));
                } else {
                    counter.textContent = target.toLocaleString();
                }
            };
            window.requestAnimationFrame(step);
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        const statsSection = document.querySelector('.statistics-section');
        const counters = document.querySelectorAll('.stat-number');
        if (!statsSection || !counters || counters.length === 0) return;

        let started = false;
        if ('IntersectionObserver' in window) {
            const io = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !started) {
                        started = true;
                        animateCounters(Array.from(counters));
                        obs.unobserve(statsSection);
                    }
                });
            }, { threshold: 0.3 });
            io.observe(statsSection);
        } else {
            // fallback
            animateCounters(Array.from(counters));
        }
    });
})();
