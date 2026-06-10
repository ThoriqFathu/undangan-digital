<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@400;700&display=swap" rel="stylesheet">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
/>


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

.mobile-wrapper{
    width:100%;
    max-width:430px;
    min-height:100vh;

    margin:0 auto;

    position:relative;

    background:#496682;

    overflow:hidden;
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

    /* transform:translateX(-20px); */
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

    background:rgba(255,255,255,.08);

    text-align:center;
}

.guest-label{
    font-size:14px;

    opacity:.8;

    margin-bottom:8px;

    letter-spacing:1px;
}

.guest-name{
    font-size:22px;

    font-weight:600;

    line-height:1.4;
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

/* .world img{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    object-fit:cover;
} */
.bg,
.gate-back,
.gate-mid,
.gate-front{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    object-fit:cover;
}
.asap{
    position:absolute;

    left:50%;
    width:420px;
    top: -20px;
    transform:
        translate(-50%, -50%)
        scale(1.3);

    /* opacity:.35; */


    pointer-events:none;
}

.couple{
    position:absolute;
    inset:0;
    width:100%;
    height:100%;
    transform: translateX(4px) translateY(-128px) scale(0.28);
    object-fit:contain;
    /* object-position:center bottom; */
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
    font-family: "Lobster Two", cursive;

    font-size:24px;
    font-weight:normal;

    color:#163d63;

    line-height:1.2;

    margin-bottom:14px;

    text-shadow:
        0 1px 0 rgba(255,255,255,.5),
        0 4px 12px rgba(0,0,0,.15);
}


.bride-card,
.groom-card{
    position: absolute;
    top: -160px;
    z-index:2;
    transform:translateY(100px);
}

.bride-parent,
.groom-parent{
    color:#274f77;

    font-size:12px;

    line-height:1.8;

    font-style:italic;

    letter-spacing:.5px;
}

.person-label{
    position:relative;

    display:inline-block;

    margin-bottom:26px;

    color:rgba(3, 11, 37, 0.85);

    font-size:10px;

    letter-spacing:5px;

    text-transform:uppercase;

    font-weight:500;
}
.person-label::before{
    content:"✦";

    position:absolute;

    left:50%;
    bottom:-16px;

    transform:translateX(-50%);

    font-size:10px;

    color:rgba(3, 11, 37, 0.85);

    z-index:2;
}

.person-label::after{
    content:"";

    position:absolute;

    left:50%;
    bottom:-10px;

    transform:translateX(-50%);

    width:100px;
    height:1px;

    background:
        linear-gradient(
            to right,
            transparent,
            rgba(3, 11, 37, 0.85),
            transparent
        );
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

    border:1px solid rgba(255,255,255,.35);

    background:
        radial-gradient(
            circle at center,
            rgba(255,255,255,.35) 0%,
            rgba(255,255,255,.22) 45%,
            rgba(255,255,255,.15) 100%
        );

    backdrop-filter:blur(12px);
    -webkit-backdrop-filter:blur(12px);

    box-shadow:
        0 20px 60px rgba(0,0,0,.25),
        inset 0 1px 1px rgba(255,255,255,.5);
}

/* =========================
   SHINE EFFECT
========================= */

.event-frame::before{
    content:"";

    position:absolute;
    inset:0;

    border-radius:inherit;

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.35),
            transparent 35%,
            transparent 65%,
            rgba(255,255,255,.08)
        );

    pointer-events:none;
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

.welcome-mat{
    position:absolute;
    bottom:40px;
    left:50%;
    transform:translateX(-50%);
    width:320px;
    text-align:center;
    pointer-events:none;

    perspective: 1000px;
    perspective-origin: center bottom;
}
.welcome-board{
    position: absolute;
    left: 50%;

    transform:
        translateX(-50%)
        translateY(-300px)
        rotateX(25deg)
        scaleY(0.75);

    transform-origin: bottom center;

    padding:18px 24px;

    border-radius:20px;

    background: rgba(255,255,255,.08);

    backdrop-filter: blur(10px);

    border: 1px solid rgba(255,255,255,.15);

    box-shadow: 0 12px 40px rgba(0,0,0,.25);

    /* 🔥 INI YANG MEMBUAT TRAPESIUM SIMETRIS */
    clip-path: polygon(
        18% 0%,
        82% 0%,
        100% 100%,
        0% 100%
    );
}

.welcome-label{

    font-size:10px;

    letter-spacing:4px;

    text-transform:uppercase;

    color:rgba(255,255,255,.75);

    margin-bottom:10px;
}

.welcome-name{

    font-family:'Symphony', cursive;

    font-size:50px;

    line-height:1.1;

    color:white;

    text-shadow:
        0 4px 12px rgba(0,0,0,.25);
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

<div class="mobile-wrapper">
    
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
    <div class="guest-label">
        Kepada Yth.
    </div>

    <div class="guest-name">
        {{ request('to') ?? 'Tamu Undangan' }}
    </div>
</div>

            <button id="openInvitation">
                <i class="fa-solid fa-envelope-open"></i>
                Buka Undangan
            </button>

        </div>

    </div>


   

    <div id="invitation-content">
        <div id="journey">
            <div class="welcome-mat">

                <div class="welcome-board">

                    <div class="welcome-label">
                        The Wedding Of
                    </div>

                    <div class="welcome-name">
                        Aqila & Thoriq
                    </div>

                </div>

            </div>
            <div class="scene-text-bride">

                <img
                    src="{{ asset('images/motion/blue/asap.png') }}"
                    class="asap"
                    alt=""
                >

                <div class="bride-card">

                    <div class="person-label">
                        THE BRIDE
                    </div>

                    <h2 class="bride-name">
                        Dwi Aqilah Pradita, S.Kom
                    </h2>

                    <p class="bride-parent">
                        Putri kedua dari<br>
                        Bapak Drs. Didik & Ibu Sri Hartati, S.Pd
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

                    <div class="person-label">
                        THE GROOM
                    </div>

                    <h2 class="groom-name">
                        Muhammad Fathuthoriq, S.Kom
                    </h2>

                    <p class="groom-parent">
                        Putra ketiga dari<br>
                        Bapak Heru Amidarma & Ibu Asmawati <br> (Almh)
                    </p>

                </div>

            </div>

            <!-- SCENE -->
            <section class="scene">

                <div class="world">

                    <img src="{{ asset('images/motion/blue/2.webp') }}" class="bg">
                    <img src="{{ asset('images/motion/blue/couple.webp') }}" class="couple">
                    <img src="{{ asset('images/motion/blue/5.webp') }}" class="gate-back">
                    <img src="{{ asset('images/motion/blue/6.webp') }}" class="gate-mid">
                    <img src="{{ asset('images/motion/blue/7.webp') }}" class="gate-front">

                </div>

            </section>

            <!-- EVENT COVER -->

            <section class="event-cover">

                <div class="event-glow"></div>

                <div class="event-frame">

                    <div class="event-label event-item">
                        WEDDING RECEPTION
                    </div>

                    <div class="event-date event-item">
                        Minggu, 28 Juni 2026
                    </div>

                    <div class="event-divider event-item"></div>

                    <div class="event-time event-item">
                        10:00 - 13:00 WIB
                    </div>

                    <div class="event-place event-item">
                        Kediaman Mempelai Wanita
                    </div>

                    <div class="event-address event-item">
                        Jl. Yakurt Blok ED No.29<br>
                        Perumahan Taman Gili<br>
                        Kamal, Bangkalan
                    </div>

                    <a
                        href="https://goo.gl/maps/veqp3GxN8kJW5Pxu7?g_st=ac"
                        target="_blank"
                        class="maps-btn event-item"
                    >
                        <i class="fa-solid fa-location-dot"></i>
                        Lihat Lokasi
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
</div>

<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>
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
        end:"+=2000",
        scrub:1,
        pin:true,
        pinSpacing:true,
      
    }
});

/* =========================
   SCENE
========================= */
/* =========================
   HANGING TITLE
========================= */

tl.to(".world", {
    scale:3.5,
    y:400
}, 0);
tl.to(".welcome-mat", {

    y:0,
    opacity:0,

    ease:"none"

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
    scale:1.34,
    x:() => -window.innerWidth * 0.18,
    y:70,
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
    y:250
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
    scale: 0.9,
    opacity:1,
    x: -20,
    y:10
},
0.76);
tl.to(".scene-text-groom",
{
    opacity:0,
    y:-100
},
1.09);

tl.to(".couple", {
    x:95,
}, 0.6);

tl.to(".bg", {
    scale:1,
    y:0,
    ease:"none"
}, 1);

tl.to(".couple", {
    scale:0.6,
    x:8,
    y:-120,
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
}, 0.3);

</script>

<script>

document.body.style.overflow = "hidden";

document
    .getElementById("openInvitation")
    .addEventListener("click", () => {

        document.body.style.overflow = "";

        const cover = document.getElementById("invitation-cover");

        gsap.to(cover, {

            opacity:0,
            duration:1,

            onComplete() {

                cover.remove();

                document
                    .getElementById("invitation-content")
                    .style.visibility = "visible";

             
                ScrollTrigger.refresh();

                window.scrollTo({
                    top:10,
                    behavior:"smooth"
                });

            }
        });

        const music = document.getElementById("bgMusic");

        if (music) {
            music.play().catch(() => {});
        }

    });

</script>
<script>
    gsap.registerPlugin(ScrollTrigger);

    function animateOnScroll(selector, options = {}) {
        const {
            from = {},
            to = {},
            start = "top 85%",
            toggleActions = "play reverse play reverse"
        } = options;

        gsap.utils.toArray(selector).forEach((element) => {
            gsap.fromTo(
                element,
                from,
                {
                    duration: 1,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: element,
                        start,
                        toggleActions
                    },
                    ...to
                }
            );
        });
    }

    // =====================
    // PRESET ANIMATIONS
    // =====================
    function typing(selector, speed = 50) {

        gsap.utils.toArray(selector).forEach((element) => {

            const originalText = element.textContent;

            element.dataset.text = originalText;
            element.textContent = "";

            ScrollTrigger.create({
                trigger: element,
                start: "top 85%",

                onEnter: () => {

                    let i = 0;

                    const timer = setInterval(() => {

                        element.textContent =
                            originalText.substring(0, i + 1);

                        i++;

                        if (i >= originalText.length) {
                            clearInterval(timer);
                        }

                    }, speed);

                },

                onLeaveBack: () => {
                    element.textContent = "";
                }
            });

        });

    }

    function fadeIn(selector) {
        animateOnScroll(selector, {
            from: { opacity: 0 },
            to: { opacity: 1 }
        });
    }

    function blurIn(selector) {
        animateOnScroll(selector, {
            from: {
                opacity: 0,
                filter: "blur(8px)"
            },
            to: {
                opacity: 1,
                filter: "blur(0px)"
            }
        });
    }

    function slideUp(selector) {
        animateOnScroll(selector, {
            from: {
                opacity: 0,
                y: 80
            },
            to: {
                opacity: 1,
                y: 0
            }
        });
    }

    function slideDown(selector) {
        animateOnScroll(selector, {
            from: {
                opacity: 0,
                y: -80
            },
            to: {
                opacity: 1,
                y: 0
            }
        });
    }

    function slideLeft(selector) {
        animateOnScroll(selector, {
            from: {
                opacity: 0,
                x: 80
            },
            to: {
                opacity: 1,
                x: 0
            }
        });
    }

    function slideRight(selector) {
        animateOnScroll(selector, {
            from: {
                opacity: 0,
                x: -80
            },
            to: {
                opacity: 1,
                x: 0
            }
        });
    }

    function zoomIn(selector) {
        animateOnScroll(selector, {
            from: {
                opacity: 0,
                scale: 0.5
            },
            to: {
                opacity: 1,
                scale: 1
            }
        });
    }

    function flipY(selector) {
        animateOnScroll(selector, {
            from: {
                opacity: 0,
                rotationY: -180,
                transformPerspective: 1000
            },
            to: {
                opacity: 1,
                rotationY: 0
            }
        });
    }

    function flipX(selector) {
        animateOnScroll(selector, {
            from: {
                opacity: 0,
                rotationX: 90,
                transformPerspective: 1000
            },
            to: {
                opacity: 1,
                rotationX: 0,
                ease: "back.out(1.7)"
            }
        });
    }

    function rotateIn(selector) {
        animateOnScroll(selector, {
            from: {
                opacity: 0,
                rotation: -180,
                scale: 0.5
            },
            to: {
                opacity: 1,
                rotation: 0,
                scale: 1
            }
        });
    }

    function bounceIn(selector) {
        animateOnScroll(selector, {
            from: {
                opacity: 0,
                scale: 0.3
            },
            to: {
                opacity: 1,
                scale: 1,
                ease: "back.out(2)"
            }
        });
    }

    // =====================
    // USAGE
    // =====================


    fadeIn(".love-story-badge");
    slideRight(".love-left");
    slideLeft(".story-right");
    fadeIn(".love-story-divider");

    blurIn(".story-card p");

    flipY(".story-card");

    slideDown(".gift-label");
    slideRight(".gift-left");
    slideLeft(".gift-right");
    fadeIn(".gift-devider");
    blurIn(".gift-description");
    flipY(".gift-card");
    

    slideDown(".wishes-label");
    slideRight(".wishes-left");
    slideLeft(".wishes-right");
    blurIn(".wishes-description");
    fadeIn(".wishes-form");
    flipY(".wish-card");

    blurIn('.thankyou-text');
    slideDown('.thankyou-label');
    slideDown('.thankyou-title');
    bounceIn('.thankyou-couple');
    // contoh lain:
    // slideUp(".gallery-item");
    // slideLeft(".timeline-card");
    // zoomIn(".hero-image");
    // bounceIn(".btn-rsvp");

</script>
</body>
</html>