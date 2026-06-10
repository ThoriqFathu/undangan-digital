<style>
/* =========================
   WISHES
========================= */

.wishes-section{
    padding:120px 24px;
    background:#496682;
}

.wishes-header{
    text-align:center;
    max-width:700px;
    margin:0 auto 60px;
}

.wishes-label{
    font-size:12px;
    letter-spacing:6px;
    color:#dbe9ff;
    margin-bottom:16px;
}

.wishes-title{
    font-family:'Symphony', cursive;
    font-size:64px;
    font-weight:normal;
    color:white;
    margin-bottom:24px;
}

.wishes-description{
    color:#eef5ff;
    line-height:2;
    font-size:14px;
    opacity:.9;
}

/* =========================
   FORM
========================= */

.wishes-form{
    max-width:700px;
    margin:0 auto 50px;

    padding:30px;

    border-radius:28px;

    background:rgba(255,255,255,.08);

    border:1px solid rgba(255,255,255,.15);

    backdrop-filter:blur(16px);
}

.form-group{
    margin-bottom:18px;
}

.form-input,
.form-textarea,
.form-select{
    width:100%;

    border:none;
    outline:none;

    padding:14px 18px;

    border-radius:16px;

    background:rgba(255,255,255,.12);

    color:white;
}

.form-input::placeholder,
.form-textarea::placeholder{
    color:rgba(255,255,255,.65);
}

.form-textarea{
    min-height:120px;
    resize:none;
}

.submit-btn{
    border:none;

    cursor:pointer;

    padding:14px 32px;

    border-radius:999px;

    background:white;

    color:#496682;

    font-weight:600;

    transition:.3s;
}

.submit-btn:hover{
    transform:translateY(-3px);
}

/* =========================
   LIST WISHES
========================= */

.wishes-list{
    max-width:700px;
    margin:0 auto;

    display:flex;
    flex-direction:column;
    gap:20px;
}

.wish-card{
    padding:24px;

    border-radius:24px;

    background:rgba(255,255,255,.08);

    border:1px solid rgba(255,255,255,.15);

    backdrop-filter:blur(16px);
}

.wish-header{
    display:flex;
    justify-content:space-between;
    align-items:center;

    margin-bottom:12px;
}

.wish-name{
    color:white;
    font-weight:600;
}

.wish-attendance{
    font-size:12px;
    padding:6px 12px;
    border-radius:999px;
}

.hadir{
    background:#6ecf9d;
    color:#173c2c;
}

.tidak-hadir{
    background:#ffb4b4;
    color:#5e1d1d;
}

.wish-message{
    color:#eef5ff;
    line-height:1.8;
    font-size:14px;
}

.wish-date{
    margin-top:12px;

    font-size:12px;

    color:rgba(255,255,255,.6);
}
</style>

<section class="wishes-section">

    <div class="wishes-header">

        <div class="wishes-label">
            WISHES & RSVP
        </div>

        <h2 class="wishes-title wishes-left" style="margin: 0;">
            Ucapan &
        </h2>
        <h2 class="wishes-title wishes-right" style="margin-bottom: 24px;">
            Doa
        </h2>

        <p class="wishes-description">
            Berikan doa terbaik dan konfirmasi kehadiran Anda
            untuk hari bahagia kami.
        </p>

    </div>

    <!-- FORM -->

    <div class="wishes-form">

        <form
            method="POST"
            action="{{ route('invitation.wishes.store') }}"
        >
            @csrf

            <input
                type="hidden"
                name="invitation_id"
                value="{{ $invitation->id }}"
            >

            <div class="form-group">
                <input
                    type="text"
                    name="name"
                    class="form-input"
                    placeholder="Nama Anda"
                    value="{{ request('to', 'Tamu Undangan') }}"
                    readonly
                    required
                >
            </div>

            <div class="form-group">

                <select
                    name="attendance"
                    class="form-select"
                    required
                >
                    <option value="">
                        Konfirmasi Kehadiran
                    </option>

                    <option value="yes">
                        Hadir
                    </option>

                    <option value="no">
                        Tidak Hadir
                    </option>

                </select>

            </div>

      

            <div class="form-group">

                <textarea
                    name="message"
                    class="form-textarea"
                    placeholder="Tulis ucapan dan doa..."
                    required
                ></textarea>

            </div>

            <button
                type="submit"
                class="submit-btn"
            >
                Kirim Ucapan
            </button>

        </form>

    </div>

    <!-- DUMMY LIST -->

    <div class="wishes-list">

        @forelse($wishes as $wish)

            @php
                $rsvp = $rsvps[$wish->name] ?? null;
            @endphp

            <div class="wish-card">

                <div class="wish-header">

                    <div class="wish-name">
                        {{ $wish->name }}
                    </div>

                    @if($rsvp)

                        <div class="wish-attendance {{ $rsvp->attendance === 'yes' ? 'hadir' : 'tidak-hadir' }}">

                            {{ $rsvp->attendance === 'yes'
                                ? 'Hadir'
                                : 'Tidak Hadir'
                            }}

                        </div>

                    @endif

                </div>

                <div class="wish-message">
                    {{ $wish->message }}
                </div>

                <div class="wish-date">
                    {{ $wish->created_at->translatedFormat('d F Y • H:i') }}
                </div>

            </div>

        @empty

            <div class="wish-card">

                <div class="wish-message">
                    Jadilah yang pertama memberikan ucapan 😊
                </div>

            </div>

        @endforelse

    </div>

</section>