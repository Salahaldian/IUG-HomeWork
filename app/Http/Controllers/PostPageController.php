<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostPageController extends Controller
{
    public function post()
    {
        $name = 'Salahaldin Hameed';
        $index = 'index'; $about = 'about'; $contact = 'contact'; $post = 'post';
        return view('post')->with(compact([
            'name', 'index', 'about', 'contact', 'post'
        ]));
    }
}
