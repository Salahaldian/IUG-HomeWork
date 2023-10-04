<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function contact()
    {
        $name = 'Salahaldin Hameed';
        $index = 'index'; $about = 'about'; $contact = 'contact'; $post = 'post';
        return view('contact')->with(compact([
            'name', 'index', 'about', 'contact', 'post'
        ]));
    }
}
