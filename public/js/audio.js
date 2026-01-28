const bgm = document.getElementById('haikyuu-bgm');
const toggleBtn = document.getElementById('music-toggle');

bgm.volume = 0.5;

// 1. Restore the time position
const savedTime = localStorage.getItem('bgm_time');
if (savedTime) {
    bgm.currentTime = parseFloat(savedTime);
}

// 2. Check if it was playing before refresh
const wasPlaying = localStorage.getItem('bgm_playing') === 'true';

if (wasPlaying) {
    // Try to play immediately
    bgm.play().then(() => {
        toggleBtn.innerText = "🔇 Pause Music";
    }).catch(() => {
        // Browser blocked autoplay. Wait for the user to click anywhere to start.
        toggleBtn.innerText = "🎵 Resume Music";
        const unlock = () => {
            bgm.play();
            toggleBtn.innerText = "🔇 Pause Music";
            document.removeEventListener('click', unlock);
        };
        document.addEventListener('click', unlock);
    });
}

// 3. Toggle button logic
toggleBtn.addEventListener('click', (e) => {
    e.stopPropagation(); // Prevents the 'unlock' event from firing twice
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

// 4. Save progress (increased interval to 1s for better performance)
setInterval(() => {
    if (!bgm.paused) {
        localStorage.setItem('bgm_time', bgm.currentTime);
    }
}, 1000);