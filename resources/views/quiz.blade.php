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

        <button type="submit">Next ➡️</button>
    </form>
</div>

</body>
</html>
