<!DOCTYPE html>
<html>

<head>
    <title>Haikyuu Quiz</title>
    <link rel="stylesheet" href="/css/welcome.css">
    <link rel="stylesheet" href="/css/audio.css">
    <link rel="icon" type="image/png" href="/images/haikyuu-tab.png">
</head>

<body>
    <audio id="haikyuu-bgm" loop preload="auto">
        <source src="{{ asset('audio/flyhigh.mp3') }}" type="audio/mpeg">
    </audio>
    <div id="music-toggle" class="music-btn">🎵 Play Music</div>
    <script src="{{ asset('js/audio.js') }}" defer></script>

    <header class="navbar">
        <div class="logo"><img src="/images/haikyuu-logo.png" alt="Haikyuu Logo">
            <span>Quiz</span>
        </div>
        <nav class="nav-links">
            <a href="#">Home</a>
            <a href="#">Quiz</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
        </nav>
        <div class="auth-links">
            <a href="#">Login</a>
            <a href="#">Sign Up</a>
        </div>
    </header>

    <div class="welcome-page">

        <video autoplay muted loop class="bg-video">
            <source src="/videos/haikyuuloop.mp4" type="video/mp4">
        </video>
        <script src="{{ asset('js/audio.js') }}"></script>


        <div class="overlay"></div>

        <div class="content">
            <h1>Welcome to my Haikyuu Quiz!</h1>
            <p>Let’s have fun and see if you really know Haikyuu!</p>

            <button class="star-btn" onclick="window.open('https://github.com/pintsizedsalt', '_blank')">
                Follow me on GitHub

                <!-- STAR SVGs (same as above) -->
                <div class="star-1">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="star-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="star-3">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="star-4">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="star-5">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="star-6">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

            </button>

            <button class="star-btn" onclick="window.location.href='{{ url('quiz') }}'">
                Start Quiz

                <!-- STAR SVGs -->
                <div class="star-1">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="star-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="star-3">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="star-4">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="star-5">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="star-6">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
                        style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                        viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Layer_x0020_1">
                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                            <path class="fil0"
                                d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z">
                            </path>
                        </g>
                    </svg>
                </div>

            </button>
        </div>
    </div>

    </div>
</body>

</html>