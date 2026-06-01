import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

/* =========================
   APPLE SCROLL REVEAL
========================= */
document.addEventListener('DOMContentLoaded', () => {

    const sections = document.querySelectorAll('.apple-section');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            }
        });
    }, {
        threshold: 0.15
    });

    sections.forEach(sec => observer.observe(sec));
});


/* =========================
   SMOOTH PARALLAX ENGINE (FIXED)
   - NO ROTATE
   - RAF OPTIMIZED
   - NO JITTER
========================= */

let scrollY = 0;
let ticking = false;

window.addEventListener('scroll', () => {
    scrollY = window.scrollY;

    if (!ticking) {
        window.requestAnimationFrame(updateParallax);
        ticking = true;
    }
});

function updateParallax() {
    document.querySelectorAll('[data-parallax]').forEach(el => {
        const speed = parseFloat(el.dataset.parallax || 0);

        const y = scrollY * speed;

        // IMPORTANT: only translate3d (NO rotate, NO scale)
        el.style.transform = `translate3d(0, ${y}px, 0)`;
    });

    ticking = false;
}


/* =========================
   FALLING PETALS (OPTIMIZED)
========================= */

function createPetal() {
    const petal = document.createElement('div');
    petal.classList.add('petal');

    petal.style.left = Math.random() * window.innerWidth + 'px';
    petal.style.animationDuration = (5 + Math.random() * 5) + 's';
    petal.style.opacity = Math.random();

    document.body.appendChild(petal);

    setTimeout(() => {
        petal.remove();
    }, 10000);
}

// spawn interval (lightweight + safe)
setInterval(() => {
    if (document.visibilityState === 'visible') {
        createPetal();
    }
}, 900);