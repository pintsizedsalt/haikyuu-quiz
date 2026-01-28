const bgm = document.getElementById('haikyuu-bgm');
const toggleBtn = document.getElementById('music-toggle');

bgm.volume = 0.5;

// Restore time only
bgm.currentTime = parseFloat(localStorage.getItem('bgm_time')) || 0;

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

// Save progress
setInterval(() => {
    localStorage.setItem('bgm_time', bgm.currentTime);
}, 500);
