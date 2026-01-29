<!DOCTYPE html>
<html>

<head>
    <title>Haikyuu Quiz</title>
    <link rel="stylesheet" href="/css/quiz.css">
    <link rel="stylesheet" href="{{ asset('css/audio.css') }}">
    <link rel="icon" type="image/png" href="/images/haikyuu-tab.png">

</head>

<body>
    <audio id="haikyuu-bgm" loop>
        <source src="{{ asset('audio/flyhigh.mp3') }}" type="audio/mpeg">
    </audio>
    <div id="music-toggle" class="music-btn">🎵 Play Music</div>
    <script src="{{ asset('js/audio.js') }}" defer></script>

    <div class="card">
        <h3>Question {{ $number }}</h3>
        <p><strong>{{ $question['question'] }}</strong></p>

        <form method="POST" action="/quiz">
            @csrf

            <div class="options">
                @foreach ($question['options'] as $option)
                    <label>
                        <input type="radio" name="answer" value="{{ $option['name'] }}" required>
                        <div class="option">
                            <img src="/images/{{ $option['image'] }}" alt="{{ $option['name'] }}">
                            <span>{{ $option['name'] }}</span>
                        </div>
                    </label>
                @endforeach
            </div>

            <button type="submit" class="btn">Next →</button>

        </form>
    </div>

</body>

<video autoplay muted loop playsinline class="bg-video">
    <source src="{{ asset('videos/kageyama.mp4') }}" type="video/mp4">
</video>

<audio id="option-sound">
    <source src="{{ asset('audio/select.mp3') }}" type="audio/mpeg">
</audio>

<script>
  const optionSound = document.getElementById('option-sound');

  document.querySelectorAll('.option').forEach(option => {
    option.addEventListener('click', () => {
      optionSound.currentTime = 0;
      optionSound.play();
    });
  });
</script>

</html>
