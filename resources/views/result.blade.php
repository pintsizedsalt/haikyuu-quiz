<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
    <link rel="stylesheet" href="/css/result.css">
    <link rel="stylesheet" href="{{ asset('css/audio.css') }}">
    <link rel="icon" type="image/png" href="/images/haikyuu-tab.png">

</head>
<body>

    <audio id="haikyuu-bgm" loop>
        <source src="{{ asset('audio/flyhigh.mp3') }}" type="audio/mpeg">
    </audio>

    <div id="music-toggle" class="music-btn">🎵 Play Music</div>
    <script src="{{ asset('js/audio.js') }}" defer></script>

<div class="result">
    <h1>🏐 Quiz Finished!</h1>
    <h2>Your Score: {{ $score }} / 5</h2>

    <div class="actions">

    <a href="/quiz" class="cube-link">
        <div class="scene">
            <div class="cube retry">
                <span class="side top">
                    <img src="{{ asset('icons/refresh.svg') }}" class="cube-icon">
                    <span>Again?</span>
                </span>
                <span class="side front">
                    <img src="{{ asset('icons/refresh.svg') }}" class="cube-icon">
                    <span>Retry</span>
                </span>
            </div>
        </div>
    </a>

    <a href="/welcome.quiz" class="cube-link">
        <div class="scene">
            <div class="cube home">
                <span class="side top">
                    <img src="{{ asset('icons/home.svg') }}" class="cube-icon">
                    <span>Go Back</span>
                </span>
                <span class="side front">
                    <img src="{{ asset('icons/home.svg') }}" class="cube-icon">
                    <span>Home</span>
                </span>
            </div>
        </div>
    </a>

    </div>

</div>

</body>

<video autoplay muted loop class="bg-video">
    <source src="{{ asset('videos/haikyuu.mp4') }}" type="video/mp4">
</video>

</html>
