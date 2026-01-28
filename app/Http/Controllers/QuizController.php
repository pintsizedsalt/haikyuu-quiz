<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    private $questions = [
    [
        'question' => 'Guess who is my favorite Haikyuu character?',
        'options' => [
            ['name' => 'Tsukki', 'image' => 'tsukki.jpg'],
            ['name' => 'Atsumu', 'image' => 'atsumu.jpg'],
            ['name' => 'Akaashi', 'image' => 'akaashi.jpg'],
            ['name' => 'Yaku', 'image' => 'yaku.jpg'],
        ],
        'answer' => 'Yaku'
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
        'question' => 'Who is Inarizaki’s setter?',
        'options' => [
            ['name' => 'Atsumu', 'image' => 'atsumu.jpg'],
            ['name' => 'Kageyama', 'image' => 'kageyama.jpg'],
            ['name' => 'Shinsuke', 'image' => 'shinsuke.jpg'],
            ['name' => 'Osamu', 'image' => 'osamu.jpg'],
        ],
        'answer' => 'Atsumu'
    ],
    [
        'question' => 'Which team defeated Karasuno in the Spring Tournament?',
        'options' => [
            ['name' => 'Shiratorizawa', 'image' => 'shiratorizawa.jpg'],
            ['name' => 'Inarizaki', 'image' => 'inarizaki.jpg'],
            ['name' => 'Kamomedai', 'image' => 'kamomedai.jpg'],
            ['name' => 'Nekoma', 'image' => 'nekoma.jpg'],
        ],
        'answer' => 'Kamomedai'
    ],
    [
        'question' => 'Who is the ace of Kamomedai?',
        'options' => [
            ['name' => 'Sachirou', 'image' => 'sachirou.jpg'],
            ['name' => 'Hoshiumi', 'image' => 'hoshiumi.jpg'],
            ['name' => 'Oikawa', 'image' => 'oikawa.jpg'],
            ['name' => 'Kuroo', 'image' => 'kuroo.jpg'],
        ],
        'answer' => 'Hoshiumi'
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
