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
    width:100%;
    /* min-height:100vh; */
    overflow-x:hidden;
    background:#b07439;
}

#journey{
    height:100vh;
}

.scene{
    position:relative;
    top:0;
    width:100%;
    height:100vh;
    overflow:hidden;
}
.world{
    position:relative;
    top: -10px;
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
.scene-text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 40px;
    color: rgb(238, 4, 4);
    opacity: 0;
    z-index: 10;
}
/* .love-story{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: #496682;
    z-index: 100;
} */
/* .scene-overlay{
    position:absolute;
    inset:0;
    background:#138dff;
    opacity:0;
    pointer-events:none;
    z-index:999;
} */
</style>
</head>
<body>
<div class="scene-text">Our Journey Begins</div>
<div id="journey" >
    <section class="scene" style="background-color: #496682">

        <div class="world">
            <img src="{{ asset('images/motion/blue/2.webp') }}" class="bg">
            <img src="{{ asset('images/motion/blue/3.webp') }}" class="couple">
            <img src="{{ asset('images/motion/blue/5.webp') }}" class="gate-back">
            <img src="{{ asset('images/motion/blue/6.webp') }}" class="gate-mid">
            <img src="{{ asset('images/motion/blue/7.webp') }}" class="gate-front">
        </div>  
        {{-- <div class="scene-overlay"></div> --}}

    </section>
    <section class="love-story" style="background-color: #496682; min-height: 100vh;">
        <h1>Love Story</h1>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, non dignissimos officia itaque adipisci eum eveniet reiciendis reprehenderit minus molestias facere iure ipsa qui quaerat, perferendis rem, nam vel fugit.
            Inventore molestias enim laudantium, velit iste nemo exercitationem impedit illo eveniet a debitis iure labore, voluptate ea quo provident obcaecati aperiam fugiat. Sint quae in fugiat quaerat exercitationem reprehenderit porro?
            Cumque amet iure quis nostrum deleniti, officiis nesciunt totam dolore nisi dolorem nam sunt est aliquam iste. Iusto harum in vero unde quis quidem libero, reprehenderit incidunt, dolore cumque debitis.
            Qui nobis dolor modi esse nihil repellendus omnis, eaque consectetur eligendi iusto, quis, distinctio maiores aliquam? Iusto vero quod laboriosam laudantium. Consequuntur velit excepturi ipsum enim. Recusandae possimus debitis maxime?
        </p>
    </section>
    
    
</div>
 



<script>
gsap.registerPlugin(ScrollTrigger);

/* =========================
   1. SCENE TIMELINE (PIN)
========================= */
const tl = gsap.timeline({
    scrollTrigger: {
    trigger: "#journey",
    start: "top top",
    end: () => "+=" + window.innerHeight * 2,
    scrub: 1,
    pin: true,
    pinSpacing: true,   // ⬅️ INI HARUS TRUE
    invalidateOnRefresh: true
}
});

/* =========================
   ANIMASI SCENE
========================= */
tl.to(".world", {
    scale: 3.5,
    y: 400
}, 0);

tl.to(".gate-front", {
    scale: 12,
    opacity: 0
}, 0);

tl.to(".gate-mid", {
    scale: 8,
    y: 1050,
    opacity: 0
}, 0);

tl.to(".gate-back", {
    scale: 5,
    y: 1050,
    opacity: 0
}, 0);

// tl.to(".couple", {
//     scale: 2,
//     y: () => window.innerHeight * 0.3
// }, 0);
tl.to(".bg", {
    scale: 2,
    y: () => window.innerHeight * 0.3
}, 0);
tl.to(".couple", {
    scale: 2.6,
    x: () => -window.innerWidth * 0.18,
    y: () => window.innerHeight * 0.46,
    ease: "none"
}, 0);
tl.to(".couple", {
    x: () => window.innerWidth * 0.14
}, 0.6);
tl.to(".bg", {
    scale: 1,
    y: 0,
    ease: "none"
}, 1);

tl.to(".couple", {
    scale: 1.4,
    x: 0,
    y: 40,
    ease: "none"
}, 1);



tl.fromTo(".scene-text",
{
    opacity: 0,
    y: 50
},
{
    opacity: 1,
    y: 800,
    duration: 0.2
}, 0.1); // ⬅️ POSISI SCROLL




</script>
</body>
</html>