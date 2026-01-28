<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Haikyuu Quiz')</title>
    <link rel="stylesheet" href="{{ asset('css/audio.css') }}">
    @stack('styles')
</head>

<body>

    <!-- 🎵 GLOBAL MUSIC -->
    <audio id="haikyuu-bgm" loop>
        <source src="{{ asset('audio/flyhigh.mp3') }}" type="audio/mpeg">
    </audio>

    <button id="music-toggle" class="music-btn">🎵 Play Music</button>
    <script src="{{ asset('js/audio.js') }}" defer></script>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="logo">Haikyuu Quiz</div>
        <nav>
            <a href="/">Home</a>
            <a href="/quiz">Quiz</a>
            <!-- <a href="/about">About</a> -->
        </nav>
    </header>

    <!-- PAGE CONTENT -->
    @yield('content')

</body>

</html>