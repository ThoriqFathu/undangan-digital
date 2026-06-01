<script>
function countdown() {
    return {
        days: 0,
        hours: 0,
        minutes: 0,
        seconds: 0,

        start() {

            const target = new Date(
                '{{ data_get($payload, "countdown_date") }}'
            ).getTime();

            setInterval(() => {

                const now = new Date().getTime();

                const distance = target - now;

                this.days = Math.floor(distance / (1000 * 60 * 60 * 24));

                this.hours = Math.floor(
                    (distance % (1000 * 60 * 60 * 24))
                    / (1000 * 60 * 60)
                );

                this.minutes = Math.floor(
                    (distance % (1000 * 60 * 60))
                    / (1000 * 60)
                );

                this.seconds = Math.floor(
                    (distance % (1000 * 60))
                    / 1000
                );

            }, 1000);
        }
    };
}
</script>