<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\IndexPageController;
use App\Http\Controllers\PostPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [IndexPageController::class, 'index']);
// Route::get('index', function () {
//     $name = 'Salahaldin Hameed';
//     $section = 'Web Developer';
//     $index = 'index'; $about = 'about'; $contact = 'contact'; $post = 'post';
//     $post1 = (object)[
//         'title' => 'Man must explore, and this is exploration at its greatest',
//         'subtitle' => 'Problems look mighty small from 150 miles up',
//         'meta' => 'September 24, 2022',
//     ];
//     $post2 = (object)[
//         'title' => 'I believe every human has a finite number of heartbeats. I don’t intend to waste any of mine.',
//         'subtitle' => '',
//         'meta' => 'September 18, 2022',
//     ];
//     $post3 = (object)[
//         'title' => 'Science has not yet mastered prophecy',
//         'subtitle' => 'We predict too much for the next year and yet far too little for the next ten.',
//         'meta' => 'August 24, 2022',
//     ];
//     $post4 = (object)[
//         'title' => 'Failure is not an option',
//         'subtitle' => 'Many say exploration is part of our destiny, but it’s actually our duty to future generations.',
//         'meta' => 'July 8, 2022',
//     ];
//     $posts = [$post1,$post2,$post3,$post4];
//     return view('index',[
//         'name' => $name, 'section' => $section,
//         'index' => $index, 'about' => $about, 'contact' => $contact, 'post' => $post,
//         'posts' => $posts,
//     ]);
// });

Route::get('about', [AboutPageController::class, 'about']);
// Route::get('about', function () {
//     $name = 'Salahaldin Hameed';
//     $index = 'index'; $about = 'about'; $contact = 'contact'; $post = 'post';
//     return view('about', [
//         'name' => $name,
//         'index' => $index, 'about' => $about, 'contact' => $contact, 'post' => $post
//     ]);
// });

Route::get('post', [PostPageController::class, 'post']);
// Route::get('post', function () {
//     $name = 'Salahaldin Hameed';
//     $index = 'index'; $about = 'about'; $contact = 'contact'; $post = 'post';
//     return view('post', [
//         'name' => $name,
//         'index' => $index, 'about' => $about, 'contact' => $contact, 'post' => $post
//     ]);
// });

Route::get('contact', [ContactPageController::class, 'contact']);
// Route::get('contact', function () {
//     $name = 'Salahaldin Hameed';
//     $index = 'index'; $about = 'about'; $contact = 'contact'; $post = 'post';
//     return view('contact', [
//         'name' => $name,
//         'index' => $index, 'about' => $about, 'contact' => $contact, 'post' => $post
//     ]);
// });
