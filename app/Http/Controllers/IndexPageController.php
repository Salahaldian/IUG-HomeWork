<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    public function index()
    {
        $name = 'Salahaldin Hameed';
        $section = 'Web Developer';
        $index = 'index'; $about = 'about'; $contact = 'contact'; $post = 'post';
        $post1 = (object)[
            'title' => 'Man must explore, and this is exploration at its greatest',
            'subtitle' => 'Problems look mighty small from 150 miles up',
            'meta' => 'September 24, 2022',
            'comments' => [
                (object)[
                    'text' => 'This is the first comment on the post.',
                    'user' => 'User1',
                ],
                (object)[
                    'text' => 'Another comment on the post.',
                    'user' => 'User2',
                ],
            ],
        ];
        $post2 = (object)[
            'title' => 'I believe every human has a finite number of heartbeats. I don’t intend to waste any of mine.',
            'subtitle' => '',
            'meta' => 'September 18, 2022',
        ];
        $post3 = (object)[
            'title' => 'Science has not yet mastered prophecy',
            'subtitle' => 'We predict too much for the next year and yet far too little for the next ten.',
            'meta' => 'August 24, 2022',
        ];
        $post4 = (object)[
            'title' => 'Failure is not an option',
            'subtitle' => 'Many say exploration is part of our destiny, but it’s actually our duty to future generations.',
            'meta' => 'July 8, 2022',
        ];
        $posts = [$post1,$post2,$post3,$post4];
        // $posts = [];
        return view('index')->with(compact([
            'name', 'section', 'index', 'about', 'contact', 'post', 'posts'
        ]));
    }
}
