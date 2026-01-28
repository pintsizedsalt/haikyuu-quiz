document.addEventListener('DOMContentLoaded', function () {
    const bgm = document.getElementById('haikyuu-bgm');
    const toggleBtn = document.getElementById('music-toggle');

    if (!bgm || !toggleBtn) return;

    bgm.volume = 0.5;

    // Restore previous state
    const savedTime = parseFloat(localStorage.getItem('bgm_time')) || 0;
    const wasPlaying = localStorage.getItem('bgm_playing') === 'true';

    // Wait until the audio is loaded
    bgm.addEventListener('loadedmetadata', () => {
        // Set the previous time
        bgm.currentTime = savedTime;

        // Resume playback if it was playing
        if (wasPlaying) {
            bgm.play().catch(() => {
                // Browser may block autoplay; unlock on first click
                const unlock = () => {
                    bgm.play();
                    document.removeEventListener('click', unlock);
                };
                document.addEventListener('click', unlock);
            });
            toggleBtn.innerText = "🔇 Pause Music";
        }
    });

    // Toggle button logic
    toggleBtn.addEventListener('click', () => {
        if (bgm.paused) {
            bgm.play();
            localStorage.setItem('bgm_playing', 'true');
            toggleBtn.innerText = "🔇 Pause Music";
        } else {
            bgm.pause();
            localStorage.setItem('bgm_playing', 'false');
            toggleBtn.innerText = "🎵 Play Music";
        }
    });

    // Save current time and state every 500ms
    setInterval(() => {
        localStorage.setItem('bgm_time', bgm.currentTime);
        localStorage.setItem('bgm_playing', !bgm.paused);
    }, 500);

    // Save state before page unload
    window.addEventListener('beforeunload', () => {
        localStorage.setItem('bgm_time', bgm.currentTime);
        localStorage.setItem('bgm_playing', !bgm.paused);
    });
});
