<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function about()
    {
        $name = 'Salahaldin Hameed';
        $index = 'index'; $about = 'about'; $contact = 'contact'; $post = 'post';
        return view('about')->with(compact([
            'name', 'index', 'about', 'contact', 'post'
        ]));
    }
}
