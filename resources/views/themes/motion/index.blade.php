<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html,
body{
    overflow-x:hidden;
    background:#496682;
    font-family:sans-serif;
}
@font-face{
    font-family:'Symphony';
    src:url('/fonts/Symphony-Regular.ttf') format('truetype');
    font-weight:normal;
    font-style:normal;
}
#invitation-cover{
    position:fixed;
    inset:0;

    z-index:99999;

    display:flex;
    justify-content:center;
    align-items:center;

    overflow:hidden;

    background:#496682;
}

.cover-overlay{
    position:absolute;
    inset:0;

    background:
        radial-gradient(
            circle at center,
            #6f95bc 0%,
            #496682 50%,
            #32485d 100%
        );
}

.cover-content{
    position:relative;
    z-index:2;

    width:min(90%,500px);

    text-align:center;
    color:white;

    transform:translateX(-20px);
}

.cover-label{
    letter-spacing:6px;
    font-size:12px;

    margin-bottom:20px;

    opacity:.8;
}

.cover-title{
    font-family:'Symphony', cursive;

    font-size:70px;
    font-weight:normal;

    line-height:1.2;

    margin-bottom:20px;
}

.cover-date{
    margin-bottom:40px;

    font-size:18px;
}

.guest-box{
    padding:16px;

    margin-bottom:40px;

    border:1px solid rgba(255,255,255,.2);

    border-radius:20px;

    background:
        rgba(255,255,255,.08);
}

#openInvitation{
    border:none;

    cursor:pointer;

    padding:16px 36px;

    border-radius:999px;

    font-size:16px;

    color:#496682;

    background:white;

    transition:.3s;
}

#openInvitation:hover{
    transform:translateY(-3px);
}
#invitation-content{
    visibility:hidden;
}
#journey{
    position:relative;
    height:100vh;
    overflow:hidden;
}

/* =========================
   SCENE
========================= */

.scene{
    position:absolute;
    inset:0;
    z-index:1;
}

.world{
    position:relative;
    width:100%;
    height:100vh;
    transform-origin:center center;
}

.world img{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    object-fit:cover;
}

/* =========================
   OPENING TEXT
========================= */

.scene-text{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);

    z-index:10;

    color:rgb(0, 48, 204);
    font-size:40px;
    font-weight:bold;

    opacity:0;
}

.scene-text-bride{
    position:absolute;

    left:50%;
    top:50%;

    transform:translate(-50%, -50%);

    z-index:15;

    width:min(90%, 500px);

    text-align:center;

    opacity:0;
}
.scene-text-groom{
    position:absolute;

    left:50%;
    top:50%;

    transform:translate(-50%, -50%);

    z-index:15;

    width:min(90%, 500px);

    text-align:center;

    opacity:0;
}
.bride-name,
.groom-name{
    font-family:'Symphony', cursive;

    color:rgb(0, 81, 255);

    font-size:20px;
    font-weight:600;

    line-height:1;

    margin-bottom:16px;
}

.asap{
    position:absolute;

    left:50%;

    width:370px;

    transform:
        translate(-50%, -50%)
        scale(1.2);

    opacity:1;

    pointer-events:none;
}

.bride-card{
    position: absolute;
    top: -160px;
    z-index:2;
    transform:translateY(100px);
}




.bride-parent{
    color:rgb(45, 66, 251);

    font-size:12px;
    line-height:1.8;
    font-style: italic;
    opacity:.8;
}
.groom-card{
    position: absolute;
    top: -160px;
    z-index:2;
    transform:translateY(100px);
}




.groom-parent{
    color:rgb(45, 66, 251);
    font-style: italic;
    font-size:12px;
    line-height:1.8;

    opacity:.8;
}

/* =========================
   EVENT COVER
========================= */

.event-cover{
    position:absolute;
    inset:0;

    z-index:20;

    overflow:hidden;

    display:flex;
    align-items:center;
    justify-content:center;

    background:
        radial-gradient(
            circle at center,
            #6f95bc 0%,
            #496682 45%,
            #334b63 100%
        );
}

/* =========================
   GLOW
========================= */

.event-glow{
    position:absolute;

    width:700px;
    height:700px;

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(255,255,255,.25),
            transparent 70%
        );

    filter:blur(70px);

    animation:glowFloat 6s ease-in-out infinite;
}

@keyframes glowFloat{

    0%{
        transform:
            translateY(0)
            scale(1);
    }

    50%{
        transform:
            translateY(-30px)
            scale(1.1);
    }

    100%{
        transform:
            translateY(0)
            scale(1);
    }

}

/* =========================
   FRAME
========================= */

.event-frame{
    position:relative;
    z-index:2;

    width:min(90%, 620px);

    text-align:center;

    padding:70px 50px;

    border-radius:36px;

    border:1px solid rgba(255,255,255,.15);

    background:
        rgba(255,255,255,.08);

    backdrop-filter:blur(20px);

    box-shadow:
        0 20px 60px rgba(0,0,0,.25);
}

/* =========================
   LABEL
========================= */

.event-label{
    color:#dcecff;

    font-size:12px;

    letter-spacing:6px;

    text-transform:uppercase;

    margin-bottom:24px;
}

/* =========================
   TITLE
========================= */

.event-title{
    color:white;

    font-size:72px;

    font-weight:300;

    line-height:1;

    margin-bottom:20px;
}

/* =========================
   DATE
========================= */

.event-date{
    color:white;

    font-size:20px;

    margin-bottom:32px;
}

/* =========================
   DIVIDER
========================= */

.event-divider{
    width:140px;
    height:1px;

    margin:0 auto 32px;

    background:
        rgba(255,255,255,.4);
}

/* =========================
   TIME
========================= */

.event-time{
    color:white;

    font-size:22px;

    margin-bottom:20px;
}

/* =========================
   PLACE
========================= */

.event-place{
    color:white;

    font-size:20px;

    font-weight:600;

    margin-bottom:16px;
}

/* =========================
   ADDRESS
========================= */

.event-address{
    color:#e6eef8;

    line-height:2;

    font-size:16px;

    margin-bottom:40px;
}

/* =========================
   BUTTON
========================= */

.maps-btn{
    display:inline-flex;

    align-items:center;
    justify-content:center;

    gap:8px;

    padding:14px 34px;

    border-radius:999px;

    text-decoration:none;

    color:white;

    border:1px solid rgba(255,255,255,.25);

    background:
        rgba(255,255,255,.08);

    backdrop-filter:blur(10px);

    transition:.3s;
}

.maps-btn:hover{

    transform:
        translateY(-4px);

    background:
        rgba(255,255,255,.16);

    box-shadow:
        0 10px 25px rgba(0,0,0,.25);
}


</style>
</head>
<body>
<audio
    id="bgMusic"
    loop
>
    <source
        src="{{ asset('audio/wedding.mp3') }}"
        type="audio/mpeg"
    >
</audio>
<div id="invitation-cover">

    <div class="cover-overlay"></div>

    <div class="cover-content">

        <div class="cover-label">
            THE WEDDING OF
        </div>

        <h1 class="cover-title">
            Dwi Aqilah <br>
            & <br>
            Fathuthoriq
        </h1>

        <div class="cover-date">
            28 Juni 2026
        </div>

        <div class="guest-box">
            Kepada Yth.
            <strong>{{ request('to') ?? 'Tamu Undangan' }}</strong>
        </div>

        <button id="openInvitation">
            💌 Buka Undangan
        </button>

    </div>

</div>


<div class="scene-text-bride">

    <img
        src="{{ asset('images/motion/blue/asap.png') }}"
        class="asap"
        alt=""
    >

    <div class="bride-card">

        <h2 class="bride-name">
            Dwi Aqilah Pradita, S.Kom
        </h2>

        <p class="bride-parent">
            Putri kedua dari<br>
            Bapak Didik & Ibu Sri Hartati
        </p>

    </div>

</div>
<div class="scene-text-groom">

    <img
        src="{{ asset('images/motion/blue/asap.png') }}"
        class="asap"
        alt=""
    >

    <div class="groom-card">

        <h2 class="groom-name">
            Muhammad Fathuthoriq , S.Kom
        </h2>

        <p class="groom-parent">
            Putra ketiga dari<br>
            Bapak Heru Amidarma & Ibu Asmawati <br> (Almh)
        </p>

    </div>

</div>

<div id="invitation-content">
    <div id="journey">

        <!-- SCENE -->
        <section class="scene">

            <div class="world">

                <img src="{{ asset('images/motion/blue/2.webp') }}" class="bg">
                <img src="{{ asset('images/motion/blue/3.webp') }}" class="couple">
                <img src="{{ asset('images/motion/blue/5.webp') }}" class="gate-back">
                <img src="{{ asset('images/motion/blue/6.webp') }}" class="gate-mid">
                <img src="{{ asset('images/motion/blue/7.webp') }}" class="gate-front">

            </div>

        </section>

        <!-- EVENT COVER -->

        <section class="event-cover">

            <div class="event-glow"></div>

            <div class="event-frame">

                <div class="event-label">
                    WEDDING RECEPTION
                </div>

        

                <div class="event-date">
                    Minggu, 28 Juni 2026
                </div>

                <div class="event-divider"></div>

                <div class="event-time">
                    10:00 - 13:00 WIB
                </div>

                <div class="event-place">
                    Kediaman Mempelai Wanita
                </div>

                <div class="event-address">
                    Jl. Yakurt Blok ED No.29<br>
                    Perumahan Taman Gili<br>
                    Kamal, Bangkalan
                </div>

                <a
                    href="https://maps.google.com"
                    target="_blank"
                    class="maps-btn"
                >
                    📍 Lihat Lokasi
                </a>

            </div>

        </section>

    </div>
</div>

<!-- LOVE STORY -->
@include('themes.motion.partials.love-story')
@include('themes.motion.partials.wedding-gift')
@include('themes.motion.partials.wishes')
@include('themes.motion.partials.thank-you')


<script>

gsap.registerPlugin(ScrollTrigger);

/* EVENT MULAI DARI BAWAH */

gsap.set(".event-cover", {
    yPercent:100
});

const tl = gsap.timeline({
    scrollTrigger:{
        trigger:"#journey",
        start:"top top",
        end:"+=2500",
        scrub:1,
        pin:true,
        pinSpacing:true
    }
});

/* =========================
   SCENE
========================= */

tl.to(".world", {
    scale:3.5,
    y:400
}, 0);

tl.to(".gate-front", {
    scale:12,
    opacity:0
}, 0);

tl.to(".gate-mid", {
    scale:8,
    y:1050,
    opacity:0
}, 0);

tl.to(".gate-back", {
    scale:5,
    y:1050,
    opacity:0
}, 0);

tl.to(".bg", {
    scale:2,
    y:() => window.innerHeight * 0.3
}, 0);

tl.to(".couple", {
    scale:2.6,
    x:() => -window.innerWidth * 0.18,
    y:() => window.innerHeight * 0.46,
    ease:"none"
}, 0);
tl.fromTo(".scene-text-bride",
{
    opacity:0,
    y:0
},
{
    opacity:1,
    x: 100,
    y:1100
},
0.2);
tl.to(".scene-text-bride",
{
    opacity:0,
    y:-100
},
0.56);
tl.fromTo(".scene-text-groom",
{
    opacity:0,
    y:0
},
{
    opacity:1,
    x: -20,
    y:1500
},
0.56);

tl.to(".couple", {
    x:() => window.innerWidth * 0.14
}, 0.6);

tl.to(".bg", {
    scale:1,
    y:0,
    ease:"none"
}, 1);

tl.to(".couple", {
    scale:1.4,
    x:0,
    y:40,
    ease:"none"
}, 1);

/* =========================
   OPENING TEXT
========================= */

tl.fromTo(".scene-text",
{
    opacity:0,
    y:50
},
{
    opacity:1,
    y:800
},
0.1);



/* =========================
   EVENT SECTION NAIK
========================= */

tl.to(".event-cover", {
    yPercent:0,
    ease:"none"
}, 1.15);

/* =========================
   EVENT CARD APPEAR
========================= */

tl.from(".event-card", {
    opacity:0,
    scale:0.85,
    y:120
}, 1.35);

</script>

<script>
document.body.style.overflow = "hidden";

document
    .getElementById("openInvitation")
    .addEventListener("click", () => {

        document.body.style.overflow = "";

        const cover = document.getElementById("invitation-cover");
        
        gsap.to(cover, {
            opacity: 0,
            duration: 1,
            onComplete() {

                cover.remove();

                // tampilkan konten
                document.getElementById("invitation-content")
                    .style.visibility = "visible";

                // refresh trigger
                ScrollTrigger.refresh();

                // auto scroll sedikit agar trigger langsung hidup
                window.scrollTo({
                    top: 10,
                    behavior: "smooth"
                });
            }
        });

        // autoplay musik
        const music = document.getElementById("bgMusic");

        if (music) {
            music.play().catch(() => {});
        }
    });
</script>
</body>
</html>