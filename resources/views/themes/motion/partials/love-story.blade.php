<style>
    /* =========================
   LOVE STORY
========================= */

.love-story-content{
    position:relative;

    min-height:100vh;

    padding:120px 24px;

    background:
        linear-gradient(
            to bottom,
            #496682 0%,
            #5a7aa1 100%
        );

    overflow:hidden;
}

/* cahaya background */

.love-story-content::before{
    content:"";

    position:absolute;

    width:700px;
    height:700px;

    left:50%;
    top:80px;

    transform:translateX(-50%);

    border-radius:50%;

    background:
        radial-gradient(
            circle,
            rgba(255,255,255,.12),
            transparent 70%
        );

    filter:blur(40px);

    pointer-events:none;
}

.love-story-container{
    position:relative;

    max-width:900px;

    margin:auto;

    z-index:2;
}

/* =========================
   HEADING
========================= */

.love-story-badge{
    text-align:center;

    color:#d9e8ff;

    letter-spacing:6px;

    font-size:12px;

    text-transform:uppercase;

    margin-bottom:18px;
}

.love-story-title{
    text-align:center;

    font-family:'Great Vibes', cursive;

    font-size:82px;

    font-weight:400;

    color:white;

    margin-bottom:24px;
}

.love-story-divider{
    width:140px;
    height:1px;

    background:
        rgba(255,255,255,.35);

    margin:0 auto 50px;
}

/* =========================
   STORY CARD
========================= */

.story-card{
    background:
        rgba(255,255,255,.08);

    border:
        1px solid rgba(255,255,255,.12);

    border-radius:32px;

    backdrop-filter:blur(16px);

    padding:50px;

    box-shadow:
        0 20px 60px rgba(0,0,0,.12);
}

.story-card p{
    color:#eef5ff;

    font-size:14px;

    line-height:2.1;

    margin-bottom:32px;
    font-style: italic;
}

.story-card p:last-child{
    margin-bottom:0;
}
</style>
<section class="love-story-content">

    <div class="love-story-container">

        <div class="love-story-badge">
            OUR STORY
        </div>

        <h2 class="love-story-title">
            Love Story
        </h2>

        <div class="love-story-divider"></div>

        <div class="story-card">

            <p>
                Perjalanan kami dimulai saat pertama kali bertemu di bangku SMA.
                Berawal dari pertemanan dan kebersamaan selama masa sekolah,
                kami tumbuh mengenal satu sama lain dengan lebih baik dari waktu ke waktu.
            </p>

            <p>
                Takdir kembali mempertemukan kami di jenjang berikutnya.
                Kami melanjutkan pendidikan di universitas yang sama,
                bahkan berada di jurusan yang sama.
                Bertahun-tahun menjalani berbagai cerita, suka dan duka,
                membuat kami semakin yakin untuk melangkah bersama.
            </p>

            <p>
                Sembilan tahun telah kami lalui sejak pertemuan pertama itu.
                Sebuah perjalanan yang mengajarkan arti kesabaran,
                komitmen, dan kepercayaan.
                Hingga akhirnya, dengan penuh rasa syukur,
                kami memutuskan untuk mengikat janji suci dalam pernikahan.
            </p>

            <p>
                Kini, kami siap memulai babak baru sebagai pasangan suami istri
                dan berharap kebahagiaan ini dapat kami bagi bersama keluarga,
                sahabat, dan orang-orang terkasih.
            </p>

        </div>

    </div>

</section>