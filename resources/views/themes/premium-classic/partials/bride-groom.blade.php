<style>
    section.hero {
        position: relative;
        height: 100dvh;
        overflow: hidden;
        background: #745578;

       
    }

    .bg-image {
        position: absolute;
        /* inset: 0; */

        width: 100%;
        height: 100%;
        bottom: 210px;

        object-fit: cover;

        opacity: .5;

        z-index: 0;
    }
    .rumah {
        position: absolute;
        /* bottom: ; */
        z-index: 1;
    }

    .tree-left,
    .tree-right,
    .tree-mid {
        position: absolute;
        z-index: 1;
    }

    

    .tree-left {
        width: 380px;

        left: -170px;
        bottom: 230px;

        transform: scaleX(-1) rotate(-20deg);
    }

    .tree-right {
        width: 380px;

        right: -170px;
        bottom: 230px;

        transform: rotate(-20deg);
    }

    .bunga-left{
        position: absolute;
        bottom: -130px;
        width: 300px;
        left: -120px;
        transform: scaleX(-1) rotate(-20deg);
        z-index: 3;
    }

    .bunga-right{
        position: absolute;
        bottom: -130px;
        width: 300px;
        right: -120px;
        transform: rotate(-20deg);
        z-index: 3;
    }
    .bunga-bottom{
        position: absolute;
        bottom: -300px;
    }
    .bunga-gif{
        position: absolute;
        bottom: -240px;
        z-index: 10;
    }
    .wayang-left{
        position: absolute;
        bottom: -140px;
        left: -150px;
        transform: scaleX(-1) rotate(-7deg);
        z-index: 2;
    }
    .wayang-right{
        position: absolute;
        bottom: -140px;
        right: -150px;
        transform: rotate(-7deg);
        z-index: 2;
    }
    .pohon-left{
        position: absolute;
        bottom: -10px;
        left: -80px;
        width: 300px;
        z-index: 1;
    }
    .pohon-right{
        position: absolute;
        bottom: -10px;
        right: -150px;
        width: 300px;
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 10;

        height: 100%;

        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        text-align: center;
        padding: 24px;
    }
    .arch-box {
        position: absolute;

        left: 50%;
        top: 120px;
        bottom: 0;

        width: 350px;

        transform: translateX(-50%);

        border-radius: 180px 180px 0 0;

        background: rgba(255,255,255,.8);

        border: 1px solid rgba(255,255,255,.35);

        box-shadow:
            0 10px 40px rgba(0,0,0,.12);

        z-index: 2;
    }
    .arch-box::before {
        content: "";

        position: absolute;
        inset: 0;

        border-radius: inherit;

        border: 10px solid #c084fc;

        clip-path: inset(0 50% 0 50%);

        animation: drawBorderCenter 4s ease forwards;
        animation-delay: 2s;
    }
    @keyframes drawBorderCenter {
        from {
            clip-path: inset(0 50% 0 50%);
        }

        to {
            clip-path: inset(0 0 0 0);
        }
    }

    /* ==================================
    HERO OPENING ANIMATION
    ================================== */

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeScale {
        from {
            opacity: 0;
            transform: scale(.9);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes archFade {
        from {
            opacity: 0;
            transform: translateX(-50%) scale(.95);
        }

        to {
            opacity: 1;
            transform: translateX(-50%) scale(1);
        }
    }

    /* ==================================
    INITIAL STATE
    ================================== */

    .arch-box,
    .rumah,
    .pohon-left,
    .pohon-right,
    .tree-left,
    .tree-right,
    .wayang-left,
    .wayang-right,
    .bunga-left,
    .bunga-right,
    .bunga-bottom,
    .bunga-gif,
    .hero-content {
        opacity: 0;
    }

    /* ==================================
    ARCH
    ================================== */

    .arch-box {
        animation:
            archFade 1.2s ease forwards;

        animation-delay: 2.6s;
    }

    /* ==================================
    POHON HITAM
    ================================== */

    .pohon-left,
    .pohon-right {
        animation:
            fadeUp 1s ease forwards;

        animation-delay: 1s;
    }

    /* ==================================
    TREE BESAR
    ================================== */

    .tree-left,
    .tree-right {
        animation:
            fadeUp 1.2s ease forwards;

        animation-delay: 1.4s;
    }

    /* ==================================
    RUMAH
    ================================== */

    .rumah {
        animation:
            fadeUp 1.2s ease forwards;

        animation-delay: 1.2s;
    }

    /* ==================================
    WAYANG
    ================================== */

    .wayang-left,
    .wayang-right {
        animation:
            fadeScale 1.2s ease forwards;

        animation-delay: 1.6s;
    }

    /* ==================================
    BUNGA
    ================================== */

    .bunga-left,
    .bunga-right,
    .bunga-bottom,
    .bunga-gif {
        animation:
            fadeScale 1.2s ease forwards;

        animation-delay: 1.8s;
    }

    /* ==================================
    CONTENT
    ================================== */

    .hero-content {
        animation:
            fadeUp 1.2s ease forwards;

        animation-delay: 4.5s;
    }
    
    
</style>

<section class="hero">

    {{-- Background --}}
    {{-- sementara dimatikan dulu --}}
    <img src="{{ asset('images/ungu/bg.png') }}" class="bg-image">
    <img src="{{ asset('images/ungu/rumah.png') }}" class="rumah">

    {{-- pohon hitam Kiri --}}
    <img
        src="{{ asset('images/ungu/pohon-black.png') }}"
        class="pohon-left"
        alt=""
    >
    {{-- pohon hitam Kanan --}}
    <img
        src="{{ asset('images/ungu/pohon-black.png') }}"
        class="pohon-right"
        alt=""
    >

    {{-- Tree Kiri --}}
    <img
        src="{{ asset('images/ungu/tree.png') }}"
        class="tree-left"
        alt=""
    >

    {{-- Tree Kanan --}}
    <img
        src="{{ asset('images/ungu/tree.png') }}"
        class="tree-right"
        alt=""
    >

    <div class="arch-box"></div>

  
    
    {{-- bunga kiri --}}
    <img
        src="{{ asset('images/ungu/bunga.png') }}"
        class="bunga-left"
        alt=""
    >
    
    {{-- wayang Kiri --}}
    <img
        src="{{ asset('images/ungu/wayang.png') }}"
        class="wayang-left"
        alt=""
    >
    {{-- wayang Kanan --}}
    <img
        src="{{ asset('images/ungu/wayang.png') }}"
        class="wayang-right"
        alt=""
    >
    {{-- bunga Kanan --}}
    <img
        src="{{ asset('images/ungu/bunga.png') }}"
        class="bunga-right"
        alt=""
    >
    {{-- bunga bawah --}}
    <img
        src="{{ asset('images/ungu/bunga-bottom.png') }}"
        class="bunga-bottom"
        alt=""
    >
    {{-- bunga gif --}}
    <img
        src="{{ asset('images/ungu/bunga.gif') }}"
        class="bunga-gif"
        alt=""
    >

    {{-- Content --}}
    <div class="hero-content">


            <p class="tracking-[0.3em] uppercase text-sm text-stone mb-4">
                The Wedding Of
            </p>

            <h1 class="text-5xl font-[Cinzel] text-stone leading-tight">
                {{ data_get($payload,'bride.nickname') }}
                <br>
                &
                <br>
                {{ data_get($payload,'groom.nickname') }}
            </h1>

            <p class="mt-6 text-stone" style="font-size: 22px">
                28 Juni 2026
            </p>

    </div>

</section>