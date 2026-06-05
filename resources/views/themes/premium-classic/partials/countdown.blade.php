<style>
.countdown-item{
    opacity:0;
    transform:translateY(20px);
    animation:countdownReveal .8s ease forwards;
}

.countdown-item:nth-child(1){ animation-delay:.15s; }
.countdown-item:nth-child(2){ animation-delay:.30s; }
.countdown-item:nth-child(3){ animation-delay:.45s; }
.countdown-item:nth-child(4){ animation-delay:.60s; }

@keyframes countdownReveal{
    from{
        opacity:0;
        transform:translateY(20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

.countdown-arch{
    position:relative;

    min-height:82px;

    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;

    padding:12px 8px;

    border-radius:38px 38px 10px 10px;

    background:
        linear-gradient(
            180deg,
            rgba(255,255,255,.98),
            rgba(243,247,255,.95)
        );

    border:1px solid rgba(38,104,202,.12);

    box-shadow:
        0 6px 18px rgba(11,45,74,.08);

    overflow:hidden;

    transition:.3s ease;
}

.countdown-arch::before{
    content:"";

    position:absolute;

    top:0;
    left:12px;
    right:12px;

    height:2px;

    border-radius:999px;

    background:linear-gradient(
        90deg,
        transparent,
        #2668CA,
        #7EA7E6,
        #2668CA,
        transparent
    );
}

.countdown-arch:hover{
    transform:translateY(-3px);

    box-shadow:
        0 12px 24px rgba(11,45,74,.12);
}

.countdown-number{
    color:#0B2D4A;
    font-size:26px;
    font-weight:700;
    line-height:1;
}

.countdown-label{
    margin-top:4px;

    font-size:9px;

    text-transform:uppercase;

    letter-spacing:.15em;

    color:#64748b;
}
.save-date-btn{
    background: #274578;
    color: #fff;

    padding: 10px 18px;

    border-radius: 999px;

    font-size: 12px;
    letter-spacing: .08em;
    text-transform: uppercase;

    font-weight: 600;

    box-shadow:
        0 10px 20px rgba(39,69,120,.25);

    transition: all .3s ease;

    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.save-date-btn:hover{
    transform: translateY(-2px);

    box-shadow:
        0 14px 28px rgba(39,69,120,.35);

    background: #1f3a63;
}
</style>
{{-- COUNTDOWN --}}
<div class="max-w-sm mx-auto">

    <div
        x-data="countdown()"
        x-init="start()"
        class="grid grid-cols-4 gap-2"
    >

        <template
            x-for="item in [
                { key: 'days', label: 'Hari' },
                { key: 'hours', label: 'Jam' },
                { key: 'minutes', label: 'Menit' },
                { key: 'seconds', label: 'Detik' }
            ]"
            :key="item.key"
        >

            <div class="relative group countdown-item">

                {{-- Glow --}}
                <div
                    class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500 blur-xl"
                    style="
                        background:
                        radial-gradient(
                            circle,
                            rgba(38,104,202,.15),
                            transparent 70%
                        );
                    "
                ></div>

                {{-- Arch --}}
                <div class="countdown-arch">

                    <div
                        class="countdown-number"
                        x-text="
                            item.key === 'days' ? days :
                            item.key === 'hours' ? hours :
                            item.key === 'minutes' ? minutes :
                            seconds
                        "
                    ></div>

                    <div class="countdown-label">
                        <span x-text="item.label"></span>
                    </div>

                </div>

            </div>

        </template>

    </div>

    {{-- SAVE THE DATE --}}
    <div class="mt-8 flex justify-center">

        <a
            href="{{ $googleCalendarUrl }}"
            target="_blank"
            class="save-date-btn"
        >
            Save The Date
        </a>

    </div>

</div>