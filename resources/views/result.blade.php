@extends('layouts.app')

@section('title', 'Quiz Result')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/result.css') }}">
@endpush

@section('content')
<div class="result-container">
    <div class="result-card">
        <h1>🏐 Quiz Finished!</h1>
        
        <h2>Your Score: {{ $score }} / 5</h2>

        @if($score >= 4)
            <p>Amazing! You're a regular Little Giant!</p>
        @else
            <p>Nice try! Keep practicing your receives.</p>
        @endif

        <a href="{{ url('quiz/start') }}" class="retry-btn">🔁 Retry Quiz</a>
        <br><br>
        <a href="{{ url('/') }}" class="home-btn">🏠 Back to Home</a>
    </div>
</div>
@endsection
