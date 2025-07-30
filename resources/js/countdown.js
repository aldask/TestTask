function formatTime(secondsLeft) {
    const h = Math.floor(secondsLeft / 3600);
    const m = Math.floor((secondsLeft % 3600) / 60);
    const sec = secondsLeft % 60;
    return `${h}:${m}:${sec}`;
}

export function countdown() {
    let seconds = Math.floor(Math.random() * 24 * 3600);

    return {
        time: "",
        start() {
            this.time = formatTime(seconds);
            this.interval = setInterval(() => {
                if (seconds <= 0) return clearInterval(this.interval);
                seconds--;
                this.time = formatTime(seconds);
            }, 1000);
        },
    };
}
