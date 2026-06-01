<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        {{ data_get($payload, 'cover.groom_name') }}
        &
        {{ data_get($payload, 'cover.bride_name') }}
    </title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&display=swap" rel="stylesheet">
    
</head>
<body
    x-data="{ opened: false }"
    class="overflow-x-hidden" style="background-color:#f1eff0;"
>
    <!-- 🌸 FLORAL GLOBAL LAYER -->
    <div class="pointer-events-none fixed inset-0 z-40 overflow-hidden">

        <!-- Soft vignette floral -->
        <div
            class="absolute inset-0 opacity-20 bg-cover"
            style="background-image: url('{{ asset('storage/images/overlay.png') }}');"
        ></div>


    </div>

    @include('themes.premium-classic.partials.cover')

   <style>
    .bunga {
        position: absolute;
        width: 280px;
        height: auto;
        z-index: 0;
        pointer-events: none;

        opacity: 0;
        transition: opacity 0.8s ease, transform 0.8s ease;
        will-change: transform;
    }

    /* posisi awal */
    .bunga-kiri {
        left: 0;
        top: 50px;
        transform: translateX(-80px);
    }

    .bunga-kanan {
        right: 0;
        top: 50px;
        transform: translateX(80px);
    }

    /* masuk viewport */
    .watch-decor.in-view .bunga-kiri,
    .watch-decor.in-view .bunga-kanan {
        opacity: 1;
        transform: translateX(0);
    }
    </style>
    <style>
    .burung-bg {
        position: fixed;   /* 🔥 kunci utama */
        top: 10%;
        left: -120px;

        width: 420px;
        height: auto;

        z-index: 5; /* di atas background, di bawah content */
        pointer-events: none;

        opacity: 0.8;

        /* biar smooth */
        will-change: transform;
    }
    .burung-bg {
        animation: flyFixed 12s linear infinite;
    }


    .burung {
        position: absolute;
        width: 420px;
        height: auto;

        top: 20px;
        left: -120px; /* start dari luar layar */

        z-index: 2;
        pointer-events: none;

        opacity: 0;

        /* smooth entrance */
        transition: opacity 1s ease;
    }

    /* saat section aktif */
    .watch-decor.in-view .burung {
        opacity: 1;
        animation: flyAcross 8s linear infinite;
    }

    /* gerakan terbang */
    @keyframes flyAcross {
        0% {
            transform: translateX(0) translateY(0);
        }
        25% {
            transform: translateX(25vw) translateY(-10px);
        }
        50% {
            transform: translateX(50vw) translateY(5px);
        }
        75% {
            transform: translateX(75vw) translateY(-8px);
        }
        100% {
            transform: translateX(110vw) translateY(0);
        }
    }
    </style>
     <img
        src="{{ asset('storage/images/burung.gif') }}"
        class="burung-bg"
        
    >
    {{-- MAIN CONTENT --}}
    <main
        id="main-content"
        x-cloak
        x-show="opened"
        x-transition.opacity.duration.1000ms
        class="relative isolate overflow-hidden bg-[#f1eff0]"
    >

        {{-- =========================
            1. BRIDE & GROOM SECTION
        ========================== --}}
        <section class="apple-section py-28 text-center relative isolate watch-decor">

            {{-- 🌸 DECOR BUNGA (BELAKANG) --}}
           
            <img
                src="{{ asset('storage/images/tangkai-bunga-kanan.png') }}"
                class="bunga bunga-kanan"
            >
            <img
                src="{{ asset('storage/images/tangkai-bunga-kiri.png') }}"
                class="bunga bunga-kiri"

            >

            {{-- 📝 CONTENT (DEPAN) --}}
            <div class="max-w-3xl mx-auto px-6 relative z-10">

                <p class="uppercase tracking-[0.35em] text-gray-500 text-xs">
                    Bride & Groom
                </p>

                <h2 class="mt-6 text-3xl md:text-5xl font-[Cinzel] text-gray-800 leading-tight">
                    {{ data_get($payload,'bride.nickname') }}
                    <span class="text-gray-400">&</span>
                    {{ data_get($payload,'groom.nickname') }}
                </h2>

                <p class="mt-6 text-gray-500 leading-relaxed">
                    Dengan penuh cinta dan kasih, kami mengundang Anda untuk hadir di hari bahagia kami.
                </p>

            </div>

        </section>

        @include('themes.premium-classic.partials.countdown')


        {{-- =========================
            2. EVENT
        ========================== --}}
        <section class="apple-section py-28 bg-white">

            <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-10">

                <div class="p-10 border border-gray-200 rounded-2xl shadow-sm hover:shadow-xl transition">

                    <h3 class="text-2xl font-[Cinzel] text-gray-800">
                        Akad Nikah
                    </h3>

                    <p class="mt-4 text-gray-500">
                        {{ data_get($payload,'event.akad.date') }}
                    </p>

                    <p class="text-gray-500">
                        {{ data_get($payload,'event.akad.time') }}
                    </p>

                </div>

                <div class="p-10 border border-gray-200 rounded-2xl shadow-sm hover:shadow-xl transition">

                    <h3 class="text-2xl font-[Cinzel] text-gray-800">
                        Resepsi
                    </h3>

                    <p class="mt-4 text-gray-500">
                        {{ data_get($payload,'event.resepsi.date') }}
                    </p>

                    <p class="text-gray-500">
                        {{ data_get($payload,'event.resepsi.time') }}
                    </p>

                </div>

            </div>

        </section>

        {{-- =========================
            3. GALLERY (PARALLAX READY)
        ========================== --}}
        <section class="apple-section py-28">

            <div class="text-center mb-12">
                <h2 class="text-3xl font-[Cinzel] text-gray-800">Gallery</h2>
            </div>

            <div class="overflow-hidden rounded-xl aspect-[4/5]">

                @foreach(data_get($payload,'gallery') as $img)
                   <img
                                src="{{ asset('storage/'.$img['image']) }}"
                                class="w-full h-full object-cover object-center transition duration-700 hover:scale-105"
                            >
                @endforeach

            </div>

        </section>

        {{-- =========================
            4. LOVE STORY
        ========================== --}}
        <section class="apple-section py-28 bg-white">

            <div class="max-w-3xl mx-auto px-6 text-center">

                <h2 class="text-3xl font-[Cinzel] text-gray-800 mb-12">
                    Our Love Story
                </h2>

                <div class="space-y-10">

                    @foreach(data_get($payload,'love_story') as $story)

                        <div>

                            <p class="text-gray-400 text-sm">
                                {{ $story['date'] }}
                            </p>

                            <h3 class="text-xl font-semibold text-gray-800 mt-2">
                                {{ $story['title'] }}
                            </h3>

                            <p class="text-gray-500 mt-2">
                                {{ $story['description'] }}
                            </p>

                        </div>

                    @endforeach

                </div>

            </div>

        </section>

        {{-- =========================
            5. GIFT
        ========================== --}}
        <section class="apple-section py-28">

            <div class="max-w-3xl mx-auto px-6 text-center">

                <h2 class="text-3xl font-[Cinzel] text-gray-800 mb-10">
                    Wedding Gift
                </h2>

                @foreach(data_get($payload,'gift') as $gift)

                    <div class="p-8 border rounded-2xl bg-white shadow-sm">

                        <p class="font-semibold text-gray-800">
                            {{ $gift['bank'] }}
                        </p>

                        <p class="text-gray-500 mt-2">
                            {{ $gift['account_number'] }}
                        </p>

                        <p class="text-gray-500">
                            {{ $gift['account_name'] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </section>

        {{-- =========================
            6. RSVP
        ========================== --}}
        <section class="apple-section py-28 bg-white">

            <div class="max-w-3xl mx-auto px-6 text-center">

                <h2 class="text-3xl font-[Cinzel] text-gray-800 mb-6">
                    RSVP
                </h2>

                <p class="text-gray-500 mb-10">
                    Konfirmasi kehadiran Anda di hari bahagia kami.
                </p>

                <div class="p-10 border rounded-2xl text-gray-400">
                    Form RSVP (coming soon)
                </div>

            </div>

        </section>

        {{-- =========================
            7. WISHES
        ========================== --}}
        <section class="apple-section py-28">

            <div class="max-w-3xl mx-auto px-6 text-center">

                <h2 class="text-3xl font-[Cinzel] text-gray-800 mb-10">
                    Wishes
                </h2>

                <div class="space-y-6 text-left">

                    @foreach(data_get($payload,'wishes',[]) as $wish)

                        <div class="p-6 bg-white border rounded-xl">

                            <p class="font-semibold text-gray-800">
                                {{ $wish['name'] ?? 'Tamu' }}
                            </p>

                            <p class="text-gray-500 mt-2">
                                {{ $wish['message'] ?? '' }}
                            </p>

                        </div>

                    @endforeach

                </div>

            </div>

        </section>

        {{-- =========================
            8. FOOTER
        ========================== --}}
        <footer class="apple-section py-20 text-center text-gray-500">

            <p class="font-[Cinzel] text-xl text-gray-800">
                {{ data_get($payload,'bride.nickname') }}
                &
                {{ data_get($payload,'groom.nickname') }}
            </p>

            <p class="mt-4 text-sm">
                Wedding Invitation © {{ date('Y') }}
            </p>

        </footer>

    </main>

    @include('themes.premium-classic.scripts.countdown')

   
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
</body>
</html>