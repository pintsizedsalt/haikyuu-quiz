<!DOCTYPE html>
<html>
<head>
    <title>Haikyuu Quiz</title>
    <link rel="stylesheet" href="/css/quiz.css">
</head>
<body>

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

        <div class="container-button">
            <div class="hover bt-1"></div>
            <div class="hover bt-2"></div>
            <div class="hover bt-3"></div>
            <div class="hover bt-4"></div>
            <div class="hover bt-5"></div>
            <div class="hover bt-6"></div>
        <button type="submit"></button>
        </div>

    </form>
</div>

</body>
</html>
