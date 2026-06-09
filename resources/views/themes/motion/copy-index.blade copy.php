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

    <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3/dist/ScrollTrigger.min.js"></script>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            overflow-x:hidden;
            background:#fff;
        }

        #motion-story{
            position:relative;
            height:800vh; /* 8 frame */
        }

        .motion-pin{
            position:relative;
            width:100%;
            height:100vh;
            overflow:hidden;
        }

        .frame-image{
            position:absolute;
            inset:0;

            width:100%;
            height:100%;

            object-fit:cover;

            opacity:0;

            will-change:opacity;
        }

        .frame-image:first-child{
            opacity:1;
        }
        .frame5-text{
            position:absolute;
            top:20%;
            left:50%;

            transform:translateX(-50%);

            z-index:100;

            font-size:48px;
            color:rgb(17,12,12);

            white-space:nowrap;
        }

        .frame5-text span{
            display:inline-block;
            opacity:0;
            transform:translateY(20px);
        }
    </style>
</head>

<body>

<section id="motion-story">

    <div class="motion-pin">

        @for ($i = 2; $i <= 9; $i++)
            <img
                src="{{ asset("images/motion/$i.png") }}"
                class="frame-image"
                alt="Frame {{ $i }}"
            >
        @endfor
        <div class="frame5-text">
        <span>T</span>
        <span>h</span>
        <span>e</span>
        <span>&nbsp;</span>
        <span>W</span>
        <span>e</span>
        <span>d</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
        <span>&nbsp;</span>
        <span>O</span>
        <span>f</span>
    </div>

    </div>
    

</section>

<script>

document.addEventListener("DOMContentLoaded", () => {

    gsap.registerPlugin(ScrollTrigger);

    const frames = gsap.utils.toArray(".frame-image");

    // preload gambar
    frames.forEach(img => {
        const preload = new Image();
        preload.src = img.src;
    });

    const tl = gsap.timeline({
        scrollTrigger:{
            trigger:"#motion-story",
            start:"top top",
            end:"+=7000",
            scrub:1,
            pin:".motion-pin"
        }
    });

    frames.forEach((frame, index) => {

    if (index === 0) return;

    // default
    let fromVars = {
        opacity: 0,
        yPercent: 10
    };

    // frame 4 -> frame 5
    if (index === 3) {

        gsap.set(frame, {
            opacity: 0,
            scale: 1.15,
            xPercent: 5
        });

        tl.to(frames[index - 1], {
            opacity: 0,
            scale: 0.92,
            xPercent: -5,
            duration: 1
        });

        tl.to(frame, {
            opacity: 1,
            scale: 1,
            xPercent: 0,
            duration: 1
        }, "<");

        tl.to(".frame5-text span", {
            opacity: 1,
            y: 0,
            stagger: 0.05,
            duration: 0.2
        }, "<0.3");

        return;
    }
    if (index === 4) { // frame 5 -> frame 6

        tl.to(".frame5-text span", {
            opacity: 0,
            y: -20,
            stagger: 0.02,
            duration: 0.2
        });

    }

    gsap.set(frame, fromVars);

    tl.to(frames[index - 1], {
        opacity: 0,
        duration: 1
    });

    tl.to(frame, {
        opacity: 1,
        xPercent: 0,
        yPercent: 0,
        duration: 1
    }, "<");

});

});
</script>

</body>
</html>