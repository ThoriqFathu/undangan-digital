<section class="py-20">
    <div class="max-w-5xl mx-auto text-center">

        <h2 class="text-3xl font-semibold mb-8">
            Menuju Hari Bahagia
        </h2>

        <div
            x-data="countdown()"
            x-init="start()"
            class="grid grid-cols-4 gap-4 max-w-2xl mx-auto"
        >
            <div class="bg-white rounded-2xl shadow p-6">
                <div class="text-4xl font-bold" x-text="days"></div>
                <div>Hari</div>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <div class="text-4xl font-bold" x-text="hours"></div>
                <div>Jam</div>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <div class="text-4xl font-bold" x-text="minutes"></div>
                <div>Menit</div>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <div class="text-4xl font-bold" x-text="seconds"></div>
                <div>Detik</div>
            </div>
        </div>

    </div>
</section>