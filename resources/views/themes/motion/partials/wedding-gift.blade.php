<style>
    /* =========================
   WEDDING GIFT
========================= */

.gift-section{

    padding:120px 24px;

    background:#496682;
}

.gift-header{

    text-align:center;

    max-width:700px;

    margin:0 auto 60px;
}

.gift-label{

    font-size:12px;

    letter-spacing:6px;

    color:#dbe9ff;

    margin-bottom:16px;
}

.gift-title{

    font-family:'Symphony', cursive;

    font-size:64px;

    font-weight:normal;

    color:white;
    margin: 0;
    line-height: 1;
}

.gift-description{

    color:#eef5ff;

    line-height:2;

    font-size:14px;

    opacity:.9;
}

.gift-list{

    max-width:700px;

    margin:0 auto;

    display:flex;
    flex-direction:column;

    gap:24px;
}

.gift-card{

    position:relative;

    overflow:hidden;

    padding:28px;

    border-radius:28px;

    background:
        linear-gradient(
            135deg,
            rgba(255,255,255,.15),
            rgba(255,255,255,.05)
        );

    border:
        1px solid rgba(255,255,255,.15);

    backdrop-filter:blur(18px);

    box-shadow:
        0 15px 40px rgba(0,0,0,.18);

    color:white;
}

/* efek glow */

.gift-card::before{

    content:'';

    position:absolute;

    top:-100px;
    right:-100px;

    width:220px;
    height:220px;

    border-radius:50%;

    background:
        rgba(255,255,255,.08);

    filter:blur(30px);
}

/* header kartu */

.gift-top{

    display:flex;

    justify-content:space-between;
    align-items:flex-start;

    margin-bottom:30px;
}

.gift-chip{

    width:50px;
    height:auto;
}

.gift-logo{

    height:30px;
    width:auto;

    object-fit:contain;
}

/* nomor rekening */

.gift-number{

    font-size:28px;

    font-weight:600;

    letter-spacing:3px;

    margin-bottom:20px;

    color:white;
}

/* nama */

.gift-name{

    color:#eef5ff;

    font-size:14px;

    letter-spacing:1px;

    margin-bottom:28px;
}

/* tombol */

.gift-copy-btn{

    width:100%;

    border:none;

    cursor:pointer;

    padding:14px;

    border-radius:999px;

    background:white;

    color:#496682;

    font-weight:600;

    transition:.3s;
}

.gift-copy-btn:hover{

    transform:translateY(-2px);
}
.gift-divider{
    width:140px;
    height:1px;

    background:
        rgba(255,255,255,.35);

    margin:0 auto 50px;
}
</style>
<section class="gift-section">

    <div class="gift-header">

        <div class="gift-label">
            WEDDING GIFT
        </div>

        <h2 class="gift-title gift-left">
            Wedding
        </h2>
        <h2 class="gift-title gift-right" style="margin-bottom: 24px;">
            Gift
        </h2>

        <div class="gift-divider"></div>

        <p class="gift-description">
            Doa restu Anda merupakan karunia yang sangat berarti bagi kami.
            Namun apabila memberi adalah ungkapan tanda kasih, Anda dapat
            memberikan hadiah secara cashless melalui rekening berikut.
        </p>

    </div>

    <div class="gift-list">

        <!-- BCA -->
        <div class="gift-card">

            <div class="gift-top">

                <img
                    src="{{ asset('images/motion/blue/chip-atm.png') }}"
                    class="gift-chip"
                >

                <img
                    src="{{ asset('images/motion/blue/bca.png') }}"
                    class="gift-logo"
                >

            </div>

            <div class="gift-number">
                1852 2140 95
            </div>

            <div class="gift-name">
                DWI AQILAH PRADITA
            </div>

            <button
                class="gift-copy-btn"
                onclick="copyRekening('1852214095')"
            >
                Salin Rekening
            </button>

        </div>

        <!-- MANDIRI -->
        <div class="gift-card">

            <div class="gift-top">

                <img
                    src="{{ asset('images/motion/blue/chip-atm.png') }}"
                    class="gift-chip"
                >

                <img
                    src="{{ asset('images/motion/blue/LOGO-MANDIRI.png') }}"
                    class="gift-logo"
                >

            </div>

            <div class="gift-number">
                1400019449116
            </div>

            <div class="gift-name">
                MOH. FATHUTHORIQ
            </div>

            <button
                class="gift-copy-btn"
                onclick="copyRekening('1400019449116')"
            >
                Salin Rekening
            </button>

        </div>

        <!-- BANK JATIM -->
        <div class="gift-card">

            <div class="gift-top">

                <img
                    src="{{ asset('images/motion/blue/chip-atm.png') }}"
                    class="gift-chip"
                >

                <img
                    src="{{ asset('images/motion/blue/bank-jatim.png') }}"
                    class="gift-logo"
                >

            </div>

            <div class="gift-number">
                0257 6697 26
            </div>

            <div class="gift-name">
                MUHAMMAD FATHUTHORIQ
            </div>

            <button
                class="gift-copy-btn"
                onclick="copyRekening('0257669726')"
            >
                Salin Rekening
            </button>

        </div>

    </div>

</section>

<script>
function copyRekening(number)
{
    navigator.clipboard.writeText(number);

    alert('Nomor rekening berhasil disalin');
}
</script>