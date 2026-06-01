<style>
/* =========================
PREMIUM DECOR SYSTEM
========================= */

.bunga {
    position: absolute;
    width: 300px;
    height: auto;
    z-index: 2;
    pointer-events: none;

    opacity: 0;
    transform: translateY(30px) scale(0.98);
    transition: opacity 1.2s ease, transform 1.2s ease;

    filter: drop-shadow(0 10px 20px rgba(0,0,0,0.08));
}

/* kiri & kanan positioning lebih natural */
.bunga-kiri {
    left: -40px;
    top: 40px;
}

.bunga-kanan {
    right: -40px;
    top: 40px;
}

/* masuk viewport */
.watch-decor.in-view .bunga {
    opacity: 1;
    transform: translateY(0) scale(1);
}

/* subtle floating movement */
.watch-decor.in-view .bunga-kiri {
    animation: floatLeft 6s ease-in-out infinite;
}

.watch-decor.in-view .bunga-kanan {
    animation: floatRight 7s ease-in-out infinite;
}

@keyframes floatLeft {
    0%,100% { transform: translateY(0) translateX(0); }
    50% { transform: translateY(-12px) translateX(6px); }
}

@keyframes floatRight {
    0%,100% { transform: translateY(0) translateX(0); }
    50% { transform: translateY(-14px) translateX(-6px); }
}

/* =========================
BIRD CINEMATIC LAYER
========================= */

.burung-bg {
    position: fixed;
    top: 12%;
    left: -200px;

    width: 460px;
    height: auto;

    z-index: 2;
    pointer-events: none;

    opacity: 0.55;
    filter: blur(0.2px) drop-shadow(0 10px 20px rgba(0,0,0,0.08));

    animation: flyCinematic 18s linear infinite;
}

@keyframes flyCinematic {
    0% {
        transform: translateX(0) translateY(0) scale(0.95);
    }
    50% {
        transform: translateX(60vw) translateY(-20px) scale(1);
    }
    100% {
        transform: translateX(120vw) translateY(0) scale(0.95);
    }
}

@keyframes fadeSoft {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade {
    animation: fadeSoft 0.8s ease both;
}

/* =========================
GLASS CARD ENHANCEMENT
========================= */

.glass-card {
    background: rgba(255,255,255,0.65);
    backdrop-filter: blur(14px);
    border: 1px solid rgba(255,255,255,0.4);
    box-shadow: 0 20px 50px rgba(0,0,0,0.08);
}

.arch-shape {
    width: 420px;
    height: 520px;

    background: rgba(7, 57, 114, 0.75);
    backdrop-filter: blur(14px);

    border: 1px solid rgba(200, 200, 200, 0.35);
    box-shadow: 0 30px 80px rgba(0,0,0,0.08);

    /* 🕌 bentuk pintu masjid (arch) */
    border-radius: 260px 260px 40px 40px;

    position: relative;

    /* soft glow */
    filter: drop-shadow(0 20px 40px rgba(0,0,0,0.08));
}

/* optional: inner glow biar premium */
.arch-shape::before {
    content: "";
    position: absolute;
    inset: 12px;

    border-radius: 240px 240px 30px 30px;

    background: linear-gradient(
        to bottom,
        rgba(255,255,255,0.9),
        rgba(245,245,245,0.6)
    );
}

.countdown-arch {
    background: rgba(255,255,255,0.75);
    backdrop-filter: blur(14px);

    border: 1px solid rgba(255,255,255,0.5);

    border-radius: 50px 50px 18px 18px;

    box-shadow:
        0 10px 30px rgba(0,0,0,.08),
        inset 0 1px 0 rgba(255,255,255,.8);

    overflow: hidden;

    position: relative;
}

.countdown-arch::before {
    content: "";
    position: absolute;
    inset: 8px;

    border-radius: 42px 42px 12px 12px;

    border: 1px solid rgba(11,45,74,.08);
}

.save-date-btn {
    position: relative;
    overflow: hidden;

    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;

    padding: 14px 32px;

    background: rgba(7, 57, 114, 0.92);

    color: white;

    border-radius: 999px;

    border: 1px solid rgba(214,178,94,.25);

    box-shadow:
        0 10px 30px rgba(7,57,114,.25),
        inset 0 1px 0 rgba(255,255,255,.15);

    letter-spacing: .25em;
    text-transform: uppercase;
    font-size: 13px;

    transition: all .35s ease;

    animation:
        buttonFloat 4s ease-in-out infinite,
        buttonGlow 5s ease-in-out infinite;
}

/* Shine effect */
.save-date-btn::before {
    content: "";

    position: absolute;

    top: 0;
    left: -120%;

    width: 60%;
    height: 100%;

    background:
        linear-gradient(
            120deg,
            transparent,
            rgba(255,255,255,.45),
            transparent
        );

    transform: skewX(-25deg);

    animation: buttonShine 6s linear infinite;
}

.save-date-btn:hover {
    transform: translateY(-4px) scale(1.03);

    box-shadow:
        0 20px 45px rgba(7,57,114,.35),
        0 0 25px rgba(214,178,94,.15);
}

/* Floating */
@keyframes buttonFloat {
    0%,100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-5px);
    }
}

/* Glow pulse */
@keyframes buttonGlow {
    0%,100% {
        box-shadow:
            0 10px 30px rgba(7,57,114,.25),
            0 0 0 rgba(214,178,94,0);
    }

    50% {
        box-shadow:
            0 15px 40px rgba(7,57,114,.35),
            0 0 25px rgba(214,178,94,.18);
    }
}

/* Light sweep */
@keyframes buttonShine {
    0% {
        left: -120%;
    }

    100% {
        left: 180%;
    }
}

.save-date-btn svg {
    width: 18px;
    height: 18px;
}

@keyframes archFloat {
    0%,100% {
        transform: translateY(0px) scale(1);
    }
    50% {
        transform: translateY(-10px) scale(1.015);
    }
}

.arch-shape {
    animation: archFloat 8s ease-in-out infinite;
}
.arch-shape,
.arch-content {
    opacity: 0;
    transform: translateY(30px);
    transition:
        opacity 1.4s ease,
        transform 1.4s ease;
}

.watch-decor.in-view .arch-shape,
.watch-decor.in-view .arch-content {
    opacity: 1;
    transform: translateY(0);
}

.arch-text {
    opacity: 0;
    transform: translateY(20px);
}

.watch-decor.in-view .arch-text {
    animation: revealUp .9s ease forwards;
}

.watch-decor.in-view .delay-1 {
    animation-delay: .3s;
}

.watch-decor.in-view .delay-2 {
    animation-delay: .7s;
}

.watch-decor.in-view .delay-3 {
    animation-delay: 1.1s;
}

@keyframes revealUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.arch-shape::after {
    content: "";
    position: absolute;

    top: -30%;
    left: -150%;

    width: 80px;
    height: 160%;

    background:
        linear-gradient(
            90deg,
            transparent,
            rgba(255,255,255,.28),
            transparent
        );

    transform: rotate(20deg);

    animation: archShine 8s linear infinite;
}

@keyframes archShine {
    0% {
        left: -150%;
    }
    100% {
        left: 220%;
    }
}
.countdown-item {
    opacity: 0;
    transform: translateY(30px);
}

.watch-decor.in-view .countdown-item {
    animation: countdownReveal .8s ease forwards;
}

.watch-decor.in-view .countdown-item:nth-child(1) {
    animation-delay: .2s;
}

.watch-decor.in-view .countdown-item:nth-child(2) {
    animation-delay: .4s;
}

.watch-decor.in-view .countdown-item:nth-child(3) {
    animation-delay: .6s;
}

.watch-decor.in-view .countdown-item:nth-child(4) {
    animation-delay: .8s;
}

@keyframes countdownReveal {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes countdownFloat {
    0%,100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-6px);
    }
}

.watch-decor.in-view .countdown-item:nth-child(1) .countdown-arch {
    animation: countdownFloat 4s ease-in-out infinite;
}

.watch-decor.in-view .countdown-item:nth-child(2) .countdown-arch {
    animation: countdownFloat 4s ease-in-out .5s infinite;
}

.watch-decor.in-view .countdown-item:nth-child(3) .countdown-arch {
    animation: countdownFloat 4s ease-in-out 1s infinite;
}

.watch-decor.in-view .countdown-item:nth-child(4) .countdown-arch {
    animation: countdownFloat 4s ease-in-out 1.5s infinite;
}
.countdown-number {
    position: relative;
    z-index: 2;
}

.countdown-number::after {
    content: "";

    position: absolute;
    inset: -12px;

    border-radius: 999px;

    background:
        radial-gradient(
            circle,
            rgba(214,178,94,.18),
            transparent 70%
        );

    animation: pulseGold 3s ease-in-out infinite;

    z-index: -1;
}

@keyframes pulseGold {
    0%,100%{
        opacity:.3;
        transform:scale(.9);
    }
    50%{
        opacity:.8;
        transform:scale(1.2);
    }
}
.countdown-arch:hover {
    transform:
        translateY(-8px)
        scale(1.05);

    box-shadow:
        0 25px 50px rgba(0,0,0,.12),
        0 0 30px rgba(214,178,94,.18);
}
</style>

<section class="apple-section py-32 text-center relative isolate watch-decor overflow-hidden">

    {{-- 🌸 DECOR --}}
    <img src="{{ asset('storage/images/tangkai-bunga-kanan.png') }}"
        class="bunga bunga-kanan">

    <img src="{{ asset('storage/images/tangkai-bunga-kiri.png') }}"
        class="bunga bunga-kiri">


    <section class="relative py-32 text-center overflow-hidden watch-decor">

        {{-- 🕌 ARCH BACKGROUND --}}
        <div class="absolute inset-0 flex justify-center items-center z-0">
            <div class="arch-shape arch-animate"></div>
        </div>

        {{-- CONTENT --}}
        <div class="content-layer arch-content max-w-3xl mx-auto px-6 relative z-10">

            <p class="arch-text delay-1 uppercase tracking-[0.5em] text-gray-800 text-xs">
                The Wedding of
            </p>

            <h2 class="arch-text delay-2 mt-8 text-3xl md:text-6xl font-[Cinzel] text-gray-800 leading-tight">
                {{ data_get($payload,'bride.nickname') }}
                <span class="text-gray-400">&</span>
                {{ data_get($payload,'groom.nickname') }}
            </h2>

            <p class="arch-text delay-3 mt-6 text-gray-500 text-sm tracking-wide">
                {{ \Carbon\Carbon::parse(data_get($payload,'countdown_date'))->translatedFormat('l, d F Y') }}
            </p>

        </div>

        {{-- COUNTDOWN --}}
        <div class="max-w-5xl mx-auto mt-20 px-4 relative z-10">

            <div
                x-data="countdown()"
                x-init="start()"
                class="grid grid-cols-4 gap-3 md:gap-6 max-w-4xl mx-auto"
            >

                <template x-for="item in [
                    { key: 'days', label: 'Hari' },
                    { key: 'hours', label: 'Jam' },
                    { key: 'minutes', label: 'Menit' },
                    { key: 'seconds', label: 'Detik' }
                ]">

                    <div class="relative group countdown-item">

                        {{-- Glow --}}
                        <div
                            class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition duration-500 blur-xl"
                            style="
                                background:
                                radial-gradient(
                                    circle,
                                    rgba(11,45,74,.35) 0%,
                                    rgba(38,104,202,.12) 40%,
                                    transparent 70%
                                );
                            ">
                        </div>

                        {{-- Card --}}
                        <div
                            class="relative countdown-arch py-6 md:py-8 px-2 md:px-4 text-center
                            border border-white/40
                            transition-all duration-500
                            group-hover:scale-[1.05]"
                        >

                            {{-- Ornament --}}
                            <div
                                class="absolute left-1/2 -top-2 -translate-x-1/2
                                w-8 h-8 rounded-full
                                bg-white/80 border border-white/60
                                shadow-md">
                            </div>

                            {{-- Number --}}
                            <div
                                class="countdown-number text-2xl md:text-5xl font-bold text-gray-800 tracking-tight"
                                x-text="
                                    item.key === 'days' ? days :
                                    item.key === 'hours' ? hours :
                                    item.key === 'minutes' ? minutes :
                                    seconds
                                "
                            ></div>

                            {{-- Label --}}
                            <div
                                class="mt-2 text-[10px] md:text-[11px]
                                uppercase tracking-[0.3em]
                                text-gray-400"
                            >
                                <span x-text="item.label"></span>
                            </div>

                        </div>

                    </div>

                </template>

            </div>

            {{-- SAVE THE DATE --}}
            <div class="mt-12 flex justify-center">

                <a
                    href="{{ $googleCalendarUrl }}"
                    target="_blank"
                    class="save-date-btn"
                >
                    Save The Date
                </a>

            </div>

        </div>

    </section>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {

    /* =========================
       INTERSECTION (FADE IN/OUT)
    ========================== */
    const sections = document.querySelectorAll('.watch-decor');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('in-view');
            } else {
                entry.target.classList.remove('in-view');
            }
        });
    }, { threshold: 0.3 });

    sections.forEach(sec => observer.observe(sec));


    /* =========================
       CURTAIN + WIND SYSTEM
    ========================== */
    let scrollY = 0;
    let windTime = 0;

    window.addEventListener('scroll', () => {
        scrollY = window.scrollY;
    });

    function animate() {
        windTime += 0.02;

        const wind = Math.sin(windTime) * 4; // efek angin halus

        sections.forEach(section => {

            const rect = section.getBoundingClientRect();

            const isVisible = rect.top < window.innerHeight && rect.bottom > 0;
            if (!isVisible) return;

            const left = section.querySelector('.bunga-kiri');
            const right = section.querySelector('.bunga-kanan');

            if (!left || !right) return;

            /* =========================
               CURTAIN EFFECT (SCROLL)
            ========================== */
            const move = scrollY * 0.15;

            /* =========================
               SCALE (SUBTLE)
            ========================== */
            const scale = Math.min(1 + scrollY * 0.00002, 1.08);

            /* =========================
               FINAL TRANSFORM
            ========================== */
            left.style.transform = `
                translateX(${-80 - move + wind}px)
                scale(${scale})
            `;

            right.style.transform = `
                translateX(${80 + move - wind}px)
                scale(${scale})
            `;
        });

        requestAnimationFrame(animate);
    }

    animate();
});
</script>