@extends('layouts.app')

@section('title', 'Welcome')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endpush

@section('content')
<div class="welcome-page">

    <video autoplay muted loop class="bg-video">
        <source src="{{ asset('videos/haikyuuloop.mp4') }}" type="video/mp4">
    </video>

    <div class="overlay"></div>

    <div class="content">
        <h1>Welcome to my Haikyuu Quiz!</h1>
        <p>Let’s have fun and see if you really know Haikyuu!</p>

        <button class="star-btn"
            onclick="window.open('https://github.com/yourusername', '_blank')">
            Follow me on GitHub
        </button>

        <button class="star-btn"
            onclick="window.location.href='{{ url('quiz/start') }}'">
            Start Quiz
        </button>
    </div>

</div>
@endsection
