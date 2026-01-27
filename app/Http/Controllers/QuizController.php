<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private $questions = [
        [
            'question' => 'What is Hinata Shoyo’s position?',
            'options' => [
                ['name' => 'Setter', 'image' => 'setter.jpg'],
                ['name' => 'Middle Blocker', 'image' => 'middle_blocker.jpg'],
                ['name' => 'Libero', 'image' => 'libero.jpg'],
                ['name' => 'Ace', 'image' => 'ace.jpg'],
            ],
            'answer' => 'Middle Blocker'
        ],
        [
            'question' => 'Which school is known as the "Cats"?',
            'options' => [
                ['name' => 'Aoba Johsai', 'image' => 'aoba.jpg'],
                ['name' => 'Fukurodani', 'image' => 'fukurodani.jpg'],
                ['name' => 'Nekoma', 'image' => 'nekoma.jpg'],
                ['name' => 'Shiratorizawa', 'image' => 'shiratorizawa.jpg'],
            ],
            'answer' => 'Nekoma'
        ],
        [
            'question' => 'What is the name of Karasuno’s Libero?',
            'options' => [
                ['name' => 'Tanaka', 'image' => 'tanaka.jpg'],
                ['name' => 'Ennoshita', 'image' => 'ennoshita.jpg'],
                ['name' => 'Nishinoya', 'image' => 'nishinoya.jpg'],
                ['name' => 'Yamaguchi', 'image' => 'yamaguchi.jpg'],
            ],
            'answer' => 'Nishinoya'
        ],
        [
            'question' => 'Who is the "Grand King" of Aoba Johsai?',
            'options' => [
                ['name' => 'Oikawa', 'image' => 'oikawa.jpg'],
                ['name' => 'Iwaizumi', 'image' => 'iwaizumi.jpg'],
                ['name' => 'Kindaichi', 'image' => 'kindaichi.jpg'],
                ['name' => 'Kunimi', 'image' => 'kunimi.jpg'],
            ],
            'answer' => 'Oikawa'
        ],
        [
            'question' => 'What animal represents Karasuno?',
            'options' => [
                ['name' => 'Owl', 'image' => 'owl.jpg'],
                ['name' => 'Crow', 'image' => 'crow.jpg'],
                ['name' => 'Cat', 'image' => 'cat.jpg'],
                ['name' => 'Eagle', 'image' => 'eagle.jpg'],
            ],
            'answer' => 'Crow'
        ],
    ];

    public function view()
    {
        return view('welcome-quiz');
    }

    // Matches Route::get('/quiz/start', ...)
    public function start()
    {
        // Use forget to avoid clearing CSRF tokens or login sessions
        session()->forget(['index', 'score']);

        session([
            'index' => 0,
            'score' => 0
        ]);

        return view('quiz', [
            'question' => $this->questions[0],
            'number' => 1
        ]);
    }

    // Matches Route::post('/quiz', ...)
    public function next(Request $request)
    {
        $index = session('index', 0);
        $score = session('score', 0);

        // Check answer
        if ($request->answer === $this->questions[$index]['answer']) {
            $score++;
        }

        $index++;

        // Update session
        session([
            'index' => $index,
            'score' => $score
        ]);

        // If finished, redirect to the result route
        if ($index >= count($this->questions)) {
            return redirect('/quiz/result');
        }

        // Otherwise, show the next question
        return view('quiz', [
            'question' => $this->questions[$index],
            'number' => $index + 1
        ]);
    }

    // Matches Route::get('/quiz/result', ...)
    public function result()
    {
        return view('result', [
            'score' => session('score', 0),
            'total' => count($this->questions)
        ]);
    }
}