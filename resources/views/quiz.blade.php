@extends('layouts.app')

@section('title', 'Quiz')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@endpush

@section('content')
    <div class="card">
        <h3>Question {{ $number }}</h3>
        <p><strong>{{ $question['question'] }}</strong></p>

        <form method="POST" action="{{ url('/quiz') }}">
            @csrf

            <div class="options">
                @foreach ($question['options'] as $option)
                    <label>
                        <input type="radio" name="answer" value="{{ $option['name'] }}" required>
                        <div class="option">
                            <img src="{{ asset('images/' . $option['image']) }}" alt="{{ $option['name'] }}">
                            <span>{{ $option['name'] }}</span>
                        </div>
                    </label>
                @endforeach
            </div>

            <button type="submit">Next ➡️</button>
        </form>
    </div>
@endsection