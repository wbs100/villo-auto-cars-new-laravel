@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const statsSection = document.querySelector('.statistics-section');
        const counters = document.querySelectorAll('.stat-number');
        let started = false;

        function animateCounters() {
            counters.forEach(counter => {
                const raw = counter.getAttribute('data-target') || counter.textContent;
                const target = parseInt(String(raw).replace(/,/g, '').replace(/[^0-9]/g, ''), 10) || 0;
                let frame = 0;
                const duration = 2000;
                const fps = 60;
                const totalFrames = Math.round((duration / 1000) * fps);
                const easeOutQuad = t => t * (2 - t);

                const ticker = setInterval(() => {
                    frame++;
                    const progress = easeOutQuad(frame / totalFrames);
                    const value = Math.round(target * progress);
                    counter.textContent = value;
                    if (frame >= totalFrames) { counter.textContent = target; clearInterval(ticker); }
                }, Math.round(1000 / fps));
            });
        }

        if (!statsSection || counters.length === 0) return;
        if ('IntersectionObserver' in window) {
            const io = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => { if (entry.isIntersecting && !started) { started = true; animateCounters(); obs.disconnect(); } });
            }, { threshold: 0.3 });
            io.observe(statsSection);
        } else { animateCounters(); }
    });
</script>
@endpush
