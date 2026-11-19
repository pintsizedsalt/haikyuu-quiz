<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/welcome.quiz');
});

use App\Http\Controllers\QuizController;

Route::get('/welcome.quiz', function () {
    return view('welcome-quiz');
});

Route::get('/quiz', [QuizController::class, 'start']);
Route::post('/quiz', [QuizController::class, 'next']);
Route::get('/quiz/result', [QuizController::class, 'result']);
