<style>
/* =========================
COVER CINEMATIC BLUE THEME
========================= */

section.cover {
    position: relative;
    min-height: 100dvh;
    overflow: hidden;

    background: #274578;
}

/* soft depth glow */
.cover::before {
    content: "";
    position: absolute;
    inset: 0;

    background:
        radial-gradient(circle at center,
            rgba(255,255,255,.10),
            transparent 60%);

    z-index: 0;
}

.cover::after {
    content: "";
    position: absolute;
    inset: 0;

    background: linear-gradient(
        to bottom,
        rgba(0,0,0,.15),
        rgba(0,0,0,.35)
    );

    z-index: 0;
}

/* =========================
ORNAMENT FLOAT
========================= */

.floral {
    position: absolute;
    opacity: .12;
    z-index: 1;
    animation: floatSlow 8s ease-in-out infinite;
}

@keyframes floatSlow {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-15px); }
}

/* =========================
CENTER CONTENT
========================= */

.cover-content {
    position: relative;
    z-index: 10;

    min-height: 100dvh;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    text-align: center;

    padding: 20px;
}

/* =========================
MONOGRAM CLEAN
========================= */

.monogram {
    position: relative;

    width: 120px;
    height: 120px;

    border-radius: 999px;

    border: 1px solid rgba(255,255,255,.25);

    display: flex;
    align-items: center;
    justify-content: center;

    background: rgba(255,255,255,.08);
    backdrop-filter: blur(10px);

    margin-bottom: 30px;
}

.monogram span {
    font-size: 42px;
    font-weight: 500;
    color: #fff;
}

.monogram::after {
    content: "";

    position: absolute;
    inset: -10px;

    border-radius: 999px;

    border: 1px solid rgba(255,255,255,.12);

    animation: pulse 3s ease-in-out infinite;
}

@keyframes pulse {
    0%,100% {
        transform: scale(.95);
        opacity: .4;
    }
    50% {
        transform: scale(1.05);
        opacity: .8;
    }
}

/* =========================
TEXT STYLE
========================= */

.cover-title {
    color: rgba(255,255,255,.75);

    font-size: 12px;
    letter-spacing: .35em;
    text-transform: uppercase;

    margin-bottom: 18px;
}

.cover-name {
    font-family: serif;

    font-size: 42px;
    line-height: 1.1;

    color: #fff;

    letter-spacing: -0.02em;
}

.cover-and {
    color: rgba(255,255,255,.6);
    font-size: 18px;
    margin: 10px 0;
}

/* =========================
GUEST BOX
========================= */

.guest {
    margin-top: 40px;
}

.guest p {
    color: rgba(255,255,255,.6);
    font-size: 13px;
}

.guest strong {
    color: #fff;
    font-size: 16px;
}

/* =========================
BUTTON
========================= */

.open-btn {
    margin-top: 40px;

    padding: 12px 22px;

    border-radius: 999px;

    background: rgba(255,255,255,.95);
    color: #274578;

    font-weight: 600;
    font-size: 13px;

    display: inline-flex;
    align-items: center;
    gap: 10px;

    box-shadow: 0 15px 30px rgba(0,0,0,.25);

    transition: .3s ease;
}

.open-btn:hover {
    transform: translateY(-3px) scale(1.02);
}

/* =========================
SCROLL INDICATOR
========================= */

.scroll {
    margin-top: 35px;
    color: rgba(255,255,255,.5);
    animation: bounce 1.8s infinite;
}

@keyframes bounce {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(8px); }
}
</style>

<section class="cover">

    <!-- ornaments (optional assets) -->
    <img src="{{ asset('images/ungu/bunga.png') }}" class="floral" style="top:-60px; left:-40px; width:220px;">
    <img src="{{ asset('images/ungu/bunga.png') }}" class="floral" style="bottom:-80px; right:-50px; width:260px; transform: rotate(180deg);">

    <div class="cover-content">

        <!-- MONOGRAM -->
        <div class="monogram">
            <span>
                {{ strtoupper(substr(data_get($payload,'bride.nickname'),0,1)) }}
                {{ strtoupper(substr(data_get($payload,'groom.nickname'),0,1)) }}
            </span>
        </div>

        <!-- TITLE -->
        <div class="cover-title">
            {{ data_get($payload, 'cover.title', 'The Wedding Of') }}
        </div>

        <!-- NAMES -->
        <div class="cover-name">
            {{ data_get($payload,'bride.nickname') }}
        </div>

        <div class="cover-and">&</div>

        <div class="cover-name">
            {{ data_get($payload,'groom.nickname') }}
        </div>

        <!-- GUEST -->
        <div class="guest">
            <p>Kepada Yth.</p>
            <strong>{{ request('to', 'Tamu Undangan') }}</strong>
        </div>

        <!-- BUTTON -->
        <button
            class="open-btn"
            @click="
                opened = true;
                setTimeout(() => {
                    document.getElementById('main-content')
                        ?.scrollIntoView({ behavior: 'smooth' });
                }, 500);
            "
        >
            Buka Undangan
        </button>

      

    </div>
</section>