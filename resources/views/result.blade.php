<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
    <link rel="stylesheet" href="/css/result.css">
    <link rel="stylesheet" href="{{ asset('css/audio.css') }}">

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
    <a href="/quiz">🔁 Retry</a>
</div>

</body>
</html>
