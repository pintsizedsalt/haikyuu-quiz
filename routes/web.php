<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

// 1. Landing Page Redirect
Route::get('/', function () {
    return redirect('/haikyuu.quiz');
});

// 2. The Welcome Page
Route::get('/haikyuu.quiz', [QuizController::class, 'view']);

// 1. Result page (Specific GET route)
Route::get('/quiz/result', [QuizController::class, 'result']);

// 2. Start page (Specific GET route)
Route::get('/quiz/start', [QuizController::class, 'start']);

// 3. Process answer (POST route)
Route::post('/quiz', [QuizController::class, 'next']);

// 4. Safety Redirect (Add this!)
// If anyone accidentally tries to GET /quiz, send them to the start.
Route::get('/quiz', function () {
    return redirect('/quiz/start');
});