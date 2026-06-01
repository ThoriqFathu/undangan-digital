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
    class="bg-neutral-50 overflow-x-hidden"
>
    <!-- 🌸 FLORAL GLOBAL LAYER -->
    <div class="pointer-events-none fixed inset-0 z-40 overflow-hidden">

        <!-- Soft vignette floral -->
        <div
            class="absolute inset-0 opacity-20 bg-cover"
            style="background-image: url('{{ asset('storage/images/floral-overlay.png') }}');"
        ></div>

        <!-- Floating decorative flowers -->
        <div class="floral float1"></div>
        <div class="floral float2"></div>
        <div class="floral float3"></div>

    </div>

    @include('themes.premium-classic.partials.cover')

   <style>
        .bunga {
            position: absolute;
            width: 180px;
            height: auto;
            z-index: 0;
            pointer-events: none;

            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s ease;
        }

        /* posisi kiri kanan */
        .bunga-kanan {
            right: 0;
            top: 50px;
        }

        .bunga-kiri {
            left: 0;
            top: 50px;
        }

        /* STATE SAAT ACTIVE (IN VIEWPORT) */
        .watch-decor.in-view .bunga {
            opacity: 1;
            transform: translateY(0);
        }
        </style>

    {{-- MAIN CONTENT --}}
    <main
        id="main-content"
        x-cloak
        x-show="opened"
        x-transition.opacity.duration.1000ms
        class="relative isolate overflow-hidden bg-[#F8F5F0]"
    >

        {{-- =========================
            1. BRIDE & GROOM SECTION
        ========================== --}}
        <section class="apple-section py-28 text-center relative isolate">

            {{-- 🌸 DECOR BUNGA (BELAKANG) --}}
            <img
                src="{{ asset('storage/images/tangkai-bunga-kanan.webp') }}"
                class="bunga bunga-kanan"
            >
            <img
                src="{{ asset('storage/images/tangkai-bunga-kiri.webp') }}"
                class="bunga bunga-kiri"

            >

            {{-- 📝 CONTENT (DEPAN) --}}
            <div class="max-w-3xl mx-auto px-6 relative z-10">

                <p class="uppercase tracking-[0.35em] text-stone-500 text-xs">
                    Bride & Groom
                </p>

                <h2 class="mt-6 text-3xl md:text-5xl font-[Cinzel] text-stone-800 leading-tight">
                    {{ data_get($payload,'bride.nickname') }}
                    <span class="text-stone-400">&</span>
                    {{ data_get($payload,'groom.nickname') }}
                </h2>

                <p class="mt-6 text-stone-500 leading-relaxed">
                    Dengan penuh cinta dan kasih, kami mengundang Anda untuk hadir di hari bahagia kami.
                </p>

            </div>

        </section>


        {{-- =========================
            2. EVENT
        ========================== --}}
        <section class="apple-section py-28 bg-white">

            <div class="max-w-5xl mx-auto px-6 grid md:grid-cols-2 gap-10">

                <div class="p-10 border border-stone-200 rounded-2xl shadow-sm hover:shadow-xl transition">

                    <h3 class="text-2xl font-[Cinzel] text-stone-800">
                        Akad Nikah
                    </h3>

                    <p class="mt-4 text-stone-500">
                        {{ data_get($payload,'event.akad.date') }}
                    </p>

                    <p class="text-stone-500">
                        {{ data_get($payload,'event.akad.time') }}
                    </p>

                </div>

                <div class="p-10 border border-stone-200 rounded-2xl shadow-sm hover:shadow-xl transition">

                    <h3 class="text-2xl font-[Cinzel] text-stone-800">
                        Resepsi
                    </h3>

                    <p class="mt-4 text-stone-500">
                        {{ data_get($payload,'event.resepsi.date') }}
                    </p>

                    <p class="text-stone-500">
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
                <h2 class="text-3xl font-[Cinzel] text-stone-800">Gallery</h2>
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

                <h2 class="text-3xl font-[Cinzel] text-stone-800 mb-12">
                    Our Love Story
                </h2>

                <div class="space-y-10">

                    @foreach(data_get($payload,'love_story') as $story)

                        <div>

                            <p class="text-stone-400 text-sm">
                                {{ $story['date'] }}
                            </p>

                            <h3 class="text-xl font-semibold text-stone-800 mt-2">
                                {{ $story['title'] }}
                            </h3>

                            <p class="text-stone-500 mt-2">
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

                <h2 class="text-3xl font-[Cinzel] text-stone-800 mb-10">
                    Wedding Gift
                </h2>

                @foreach(data_get($payload,'gift') as $gift)

                    <div class="p-8 border rounded-2xl bg-white shadow-sm">

                        <p class="font-semibold text-stone-800">
                            {{ $gift['bank'] }}
                        </p>

                        <p class="text-stone-500 mt-2">
                            {{ $gift['account_number'] }}
                        </p>

                        <p class="text-stone-500">
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

                <h2 class="text-3xl font-[Cinzel] text-stone-800 mb-6">
                    RSVP
                </h2>

                <p class="text-stone-500 mb-10">
                    Konfirmasi kehadiran Anda di hari bahagia kami.
                </p>

                <div class="p-10 border rounded-2xl text-stone-400">
                    Form RSVP (coming soon)
                </div>

            </div>

        </section>

        {{-- =========================
            7. WISHES
        ========================== --}}
        <section class="apple-section py-28">

            <div class="max-w-3xl mx-auto px-6 text-center">

                <h2 class="text-3xl font-[Cinzel] text-stone-800 mb-10">
                    Wishes
                </h2>

                <div class="space-y-6 text-left">

                    @foreach(data_get($payload,'wishes',[]) as $wish)

                        <div class="p-6 bg-white border rounded-xl">

                            <p class="font-semibold text-stone-800">
                                {{ $wish['name'] ?? 'Tamu' }}
                            </p>

                            <p class="text-stone-500 mt-2">
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
        <footer class="apple-section py-20 text-center text-stone-500">

            <p class="font-[Cinzel] text-xl text-stone-800">
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

            const sections = document.querySelectorAll('.watch-decor');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {

                    if (entry.isIntersecting) {
                        entry.target.classList.add('in-view');
                    } else {
                        entry.target.classList.remove('in-view');
                    }

                });
            }, {
                threshold: 0.3
            });

            sections.forEach(sec => observer.observe(sec));
        });
        </script>
</body>
</html>