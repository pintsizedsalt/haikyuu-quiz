<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private $questions = [
    [
        'question' => 'Guess who is my favorite Haikyuu character?',
        'options' => [
            ['name' => 'Hinata', 'image' => 'hinata.jpg'],
            ['name' => 'Kageyama', 'image' => 'kageyama.jpg'],
            ['name' => 'Oikawa', 'image' => 'oikawa.jpg'],
            ['name' => 'Kuroo', 'image' => 'kuroo.jpg'],
        ],
        'answer' => 'Kuroo'
    ],
    [
        'question' => 'Who is the captain of Karasuno?',
        'options' => [
            ['name' => 'Daichi', 'image' => 'daichi.jpg'],
            ['name' => 'Asahi', 'image' => 'asahi.jpg'],
            ['name' => 'Sugawara', 'image' => 'sugawara.jpg'],
            ['name' => 'Tanaka', 'image' => 'tanaka.jpg'],
        ],
        'answer' => 'Daichi'
    ],
    [
        'question' => 'Who is Karasuno’s setter?',
        'options' => [
            ['name' => 'Hinata', 'image' => 'hinata.jpg'],
            ['name' => 'Kageyama', 'image' => 'kageyama.jpg'],
            ['name' => 'Nishinoya', 'image' => 'nishinoya.jpg'],
            ['name' => 'Tsukishima', 'image' => 'tsukishima.jpg'],
        ],
        'answer' => 'Kageyama'
    ],
    [
        'question' => 'What team did Karasuno beat in the Spring Tournament?',
        'options' => [
            ['name' => 'Shiratorizawa', 'image' => 'shiratorizawa.jpg'],
            ['name' => 'Inarizaki', 'image' => 'inarizaki.jpg'],
            ['name' => 'Nekoma', 'image' => 'nekoma.jpg'],
            ['name' => 'Date Tech', 'image' => 'datetech.jpg'],
        ],
        'answer' => 'Inarizaki'
    ],
    [
        'question' => 'Who is the libero of Nekoma?',
        'options' => [
            ['name' => 'Yaku', 'image' => 'yaku.jpg'],
            ['name' => 'Kenma', 'image' => 'kenma.jpg'],
            ['name' => 'Lev', 'image' => 'lev.jpg'],
            ['name' => 'Kuroo', 'image' => 'kuroo.jpg'],
        ],
        'answer' => 'Yaku'
    ],
];

    public function start()
    {
        session()->flush();

        session([
            'index' => 0,
            'score' => 0
        ]);

        return view('quiz', [
            'question' => $this->questions[0],
            'number' => 1
        ]);
    }

    public function next(Request $request)
    {
        $index = session('index');
        $score = session('score');

        if ($request->answer === $this->questions[$index]['answer']) {
            $score++;
        }

        $index++;

        session([
            'index' => $index,
            'score' => $score
        ]);

        if ($index >= count($this->questions)) {
            return redirect('/quiz/result');
        }

        return view('quiz', [
            'question' => $this->questions[$index],
            'number' => $index + 1
        ]);
    }

    public function result()
    {
        return view('result', [
            'score' => session('score')
        ]);
    }
}
