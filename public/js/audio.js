(function () {
    const bgm = document.getElementById('haikyuu-bgm');
    const toggleBtn = document.getElementById('music-toggle');

    if (!bgm || !toggleBtn) return;

    bgm.volume = 0.5;

    const KEY_TIME = 'bgm_time';
    const KEY_PLAYING = 'bgm_playing';

    // Sync button text with actual playback state (ground truth)
    function updateButton() {
        toggleBtn.innerText = bgm.paused ? "🎵 Play Music" : "🔇 Pause Music";
    }

    // Save playback state before navigating away (survives page reloads)
    function saveState() {
        sessionStorage.setItem(KEY_TIME, bgm.currentTime);
        sessionStorage.setItem(KEY_PLAYING, bgm.paused ? 'false' : 'true');
    }

    // Restore playback state from sessionStorage
    function restoreState() {
        const savedTime = sessionStorage.getItem(KEY_TIME);
        if (savedTime) {
            bgm.currentTime = parseFloat(savedTime);
        }
        return sessionStorage.getItem(KEY_PLAYING) === 'true';
    }

    // Try to autoplay (browsers may block without a user gesture)
    function tryPlay() {
        bgm.play().then(() => {
            updateButton();
            sessionStorage.setItem(KEY_PLAYING, 'true');
        }).catch(() => {
            // Autoplay blocked; button reflects the real paused state
            updateButton();
            const unlock = () => {
                bgm.play().then(() => {
                    updateButton();
                    sessionStorage.setItem(KEY_PLAYING, 'true');
                });
                document.removeEventListener('click', unlock);
            };
            document.addEventListener('click', unlock);
        });
    }

    const wasPlaying = restoreState();
    if (wasPlaying) {
        tryPlay();
    } else {
        updateButton();
    }

    // Save state before page unloads (form submission = navigation)
    window.addEventListener('pagehide', saveState);
    window.addEventListener('beforeunload', saveState);

    // Toggle button logic
    toggleBtn.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevents the 'unlock' event from firing twice
        if (bgm.paused) {
            bgm.play().then(() => {
                updateButton();
                sessionStorage.setItem(KEY_PLAYING, 'true');
            });
        } else {
            bgm.pause();
            updateButton();
            sessionStorage.setItem(KEY_PLAYING, 'false');
        }
    });

    // Periodic backup save (every 1s)
    setInterval(() => {
        sessionStorage.setItem(KEY_TIME, bgm.currentTime);
        sessionStorage.setItem(KEY_PLAYING, bgm.paused ? 'false' : 'true');
    }, 1000);
})();