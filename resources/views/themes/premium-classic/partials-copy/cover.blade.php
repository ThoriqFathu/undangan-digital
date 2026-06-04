<section
    x-data
    class="relative min-h-screen overflow-hidden bg-[#f1eff0]"
    x-transition:leave="transition ease-in duration-700"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-105"
>

    <!-- 🌊 Depth Layer (biar cinematic & mahal) -->
    <div class="absolute inset-0 bg-gradient-radial from-transparent via-[#f1eff0]/40 to-[#f1eff0]"></div>
    <div class="absolute inset-0 bg-black/5"></div>

    {{-- Ornamen kiri atas --}}
    <div class="absolute top-0 left-0 w-64 h-64 opacity-10 animate-float-slow">
        <svg viewBox="0 0 200 200" fill="currentColor">
            <path d="M50 20C80 60 90 120 40 180"/>
            <path d="M80 40C120 80 120 140 90 190"/>
        </svg>
    </div>

    {{-- Ornamen kanan bawah --}}
    <div class="absolute bottom-0 right-0 w-64 h-64 opacity-10 rotate-180 animate-float-slow">
        <svg viewBox="0 0 200 200" fill="currentColor">
            <path d="M50 20C80 60 90 120 40 180"/>
            <path d="M80 40C120 80 120 140 90 190"/>
        </svg>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex items-center justify-center px-6">

        <div class="text-center max-w-xl">

            {{-- MONOGRAM --}}
            <div class="relative inline-flex items-center justify-center opacity-0 fade-premium">

                {{-- Outer Ring --}}
                <div class="w-36 h-36 rounded-full border border-gray-300 flex items-center justify-center">

                    {{-- Inner Ring --}}
                    <div class="w-28 h-28 rounded-full border border-gray-200 flex items-center justify-center bg-white/60 backdrop-blur-sm">

                        <div class="relative -translate-x-2">

                            <span class="text-6xl font-cormorant text-gray-700">
                                {{ strtoupper(substr(data_get($payload,'bride.nickname'),0,1)) }}
                            </span>

                            <span class="absolute -right-6 top-6 text-4xl font-cormorant text-gray-500">
                                {{ strtoupper(substr(data_get($payload,'groom.nickname'),0,1)) }}
                            </span>

                        </div>

                    </div>

                </div>

                {{-- Ornament --}}
                <div class="absolute -left-8 text-gray-300 text-3xl">✦</div>
                <div class="absolute -right-8 text-gray-300 text-3xl">✦</div>

            </div>

            {{-- TITLE --}}
            <p class="mt-10 uppercase tracking-[0.4em] text-gray-500 text-sm opacity-0 fade-premium"
               style="animation-delay: 0.2s;">
                {{ data_get($payload, 'cover.title') }}
            </p>

            {{-- NAMES --}}
            <div class="mt-8 opacity-0 fade-premium"
                 style="animation-delay: 0.5s;">

                <h1 class="font-brilon text-[2.1rem] md:text-[1rem] lg:text-[2rem] xl:text-[3rem] leading-none tracking-[-0.04em] text-gray-800">

                    {{ data_get($payload, 'bride.nickname') }}

                    <span class="mx-2 text-gray-400 font-light">&</span>

                    {{ data_get($payload, 'groom.nickname') }}

                </h1>

            </div>

            {{-- GUEST --}}
            <div class="mt-12 opacity-0 fade-premium"
                 style="animation-delay: 0.9s;">

                <p class="text-gray-500">
                    Kepada Yth.
                </p>

                <p class="font-semibold text-lg mt-2">
                    {{ request('to', 'Tamu Undangan') }}
                </p>

            </div>

            {{-- BUTTON --}}
            <button
                class="mt-10 inline-flex items-center gap-3 px-8 py-4 rounded-full bg-gray-800 text-white shadow-xl hover:scale-105 transition duration-300 opacity-0 fade-premium"
                style="animation-delay: 1.2s;"
                @click="
                    opened = true;

                    setTimeout(() => {
                        document.getElementById('main-content')
                            ?.scrollIntoView({ behavior: 'smooth' });
                    }, 500);
                "
            >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>

                <span>Buka Undangan</span>
            </button>

            {{-- SCROLL --}}
            <div class="mt-12 animate-bounce text-gray-400">
                ↓
            </div>

        </div>
    </div>

</section>