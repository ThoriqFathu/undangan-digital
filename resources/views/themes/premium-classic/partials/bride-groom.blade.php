<style>
/* =========================
SECTION BASE
========================= */
.sd-section {
    position: relative;
    padding: 100px 20px;
    background: linear-gradient(180deg, #f6f3ff 0%, #ffffff 100%);
    overflow: hidden;
}

/* glow */
.sd-section::before {
    content: "";
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(39,69,120,0.15), transparent 60%);
    top: -200px;
    left: 50%;
    transform: translateX(-50%);
    filter: blur(40px);
}

/* =========================
TEXT
========================= */
.sd-title {
    text-align: center;
    font-size: 26px;
    font-weight: 600;
    color: #274578;
    letter-spacing: 2px;
}

.sd-subtitle {
    text-align: center;
    max-width: 650px;
    margin: 10px auto 50px;
    font-size: 14px;
    color: #555;
    line-height: 1.8;
}

/* =========================
ARCH BOX
========================= */
.sd-arch {
    position: relative;

    background-size: cover;           /* biar penuh */
    background-position: center;      /* fokus tengah */
    background-repeat: no-repeat;

    border-radius: 200px 200px 0 0;
    border: 1px solid rgba(39,69,120,0.15);

    padding: 70px 25px 90px;
    box-shadow: 0 20px 60px rgba(0,0,0,0.08);

    overflow: hidden;
}

/* supaya teks tidak ketabrak background */
.sd-arch::before {
    content: "";
    position: absolute;
    inset: 0;

    background: rgba(255,255,255,0.55); /* overlay putih soft */
    z-index: 0;
}

/* =========================
PEOPLE
========================= */
.sd-people {
    display: flex;
    top: 40px;
    flex-direction: column;
    gap: 30px;
    text-align: center;
    position: relative;
    z-index: 2;
}

.sd-person {
    padding: 10px;
}

.sd-name {
    font-family: "Lobster Two", cursive;
    font-size: 18px;
    font-weight: 700;
    color: #274578;
    letter-spacing: 0.5px;
}

.sd-desc {
    font-family: "Inter", sans-serif;
    font-size: 10px;
    color: #555;
    line-height: 1.7;
}

.sd-ig {
    font-family: "Inter", sans-serif;
}

/* divider */
.sd-divider {
    display: flex;
    justify-content: center;
    font-size: 20px;
    color: #274578;
    opacity: 0.6;
}

/* =========================
ANIMATION
========================= */
@keyframes sdFadeUp {
    from {
        opacity: 0;
        transform: translateY(40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* =========================
SCROLL ANIMATION BASE
========================= */
.sd-animate {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s ease;
    will-change: transform, opacity;
}

.sd-animate.show {
    opacity: 1;
    transform: translateY(0);
}

/* stagger delay */
.sd-delay-1 { transition-delay: 0.1s; }
.sd-delay-2 { transition-delay: 0.2s; }
.sd-delay-3 { transition-delay: 0.3s; }
.sd-delay-4 { transition-delay: 0.4s; }

</style>
<section class="sd-section">

    <div class="sd-title sd-animate sd-delay-1">Our Special Day</div>

    <p class="sd-subtitle sd-animate sd-delay-2">
        Tanpa mengurangi rasa hormat, kami mengundang Bapak/Ibu/Saudara/i serta kerabat sekalian
        untuk menghadiri acara pernikahan kami:
    </p>

    <div class="sd-wrapper">

        <div class="sd-arch" style="background-image: url('{{ asset('images/biru/bg-cover1.png') }}');">

            <div class="sd-people">

                <!-- Bride -->
                <div class="sd-person sd-animate sd-delay-1">
                    <h2 class="sd-name">Dwi Aqilah Pradita, S.Kom</h2>
                    <p class="sd-desc">
                        Putri kedua dari<br>
                        Bapak Drs. Didik & Ibu Sri Hartati, S.Pd
                    </p>

                    <a class="sd-ig" href="https://instagram.com/dwaqlhprdt" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>

                <div class="sd-divider sd-animate sd-delay-3">&</div>

                <!-- Groom -->
                <div class="sd-person sd-animate sd-delay-2">
                    <h2 class="sd-name">Muhammad Fathuthoriq, S.Kom</h2>
                    <p class="sd-desc">
                        Putra ketiga dari<br>
                        Bapak Heru Amidarma & Ibu Asmawati (Almh)
                    </p>

                   <a class="sd-ig" href="https://instagram.com/ThoriqFathu" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>

            </div>

        </div>
    </div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const elements = document.querySelectorAll(".sd-animate");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            } else {
                // ini bikin animasi HILANG saat scroll keluar
                entry.target.classList.remove("show");
            }

        });
    }, {
        threshold: 0.2
    });

    elements.forEach(el => observer.observe(el));

});
</script>

