<?php

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
    return view('Home',[
        'Title' => 'Home',
        'Name' => 'User',
    ]);
});

Route::get('/about', function () {
    return view('About',[
        'Title' => 'About',
        'username' => 'Gede Astu Nugraha',
        'email' => 'gede.astu@gmail.com',
        'image' => 'myPict-transformed.png'
    ]);
});

Route::get('/portfolio', function () {
    $username = "Gede Astu Nugraha";
    $portfolios = [
        [
          "Title" => "Build with Angga (Clone)",
          "Slug" => "build-with-angga-clone",
          "Developher" => $username,
          "Technology" => "React, Next JS, Framer Motion, Swiper, JSON Server",
          "Desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa at, dignissimos itaque sapiente totam deleniti ab aliquam nulla praesentium vero explicabo eius quia voluptate. Vel obcaecati consequatur, molestias quis hic fuga quibusdam architecto eligendi, sequi nam totam facere deleniti temporibus delectus harum rerum alias neque adipisci ab. Distinctio, quam!"
        ],
        [
          "Title" => "Pijar Music",
          "Slug" => "pijar-music",
          "Developher" => $username,
          "Technology" => "React, Next JS, Framer Motion, Swiper, JSON Server",
          "Desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa at, dignissimos itaque sapiente totam deleniti ab aliquam nulla praesentium vero explicabo eius quia voluptate. Vel obcaecati consequatur, molestias quis hic fuga quibusdam architecto eligendi, sequi nam totam facere deleniti temporibus delectus harum rerum alias neque adipisci ab. Distinctio, quam!"
        ],
        [
          "Title" => "Dental Medical",
          "Slug" => "dental-medical",
          "Developher" => $username,
          "Technology" => "React, Next JS, Framer Motion, Swiper, JSON Server",
          "Desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa at, dignissimos itaque sapiente totam deleniti ab aliquam nulla praesentium vero explicabo eius quia voluptate. Vel obcaecati consequatur, molestias quis hic fuga quibusdam architecto eligendi, sequi nam totam facere deleniti temporibus delectus harum rerum alias neque adipisci ab. Distinctio, quam!"
        ],
    ];
    return view('Portfolios',[
        'Title' => 'Portfolio',
        'Portfolios' => $portfolios
    ]);
});

Route::get('Portfolios/{Slug}',function($Slug){
    $username = "Gede Astu Nugraha";
    $portfolios = [
        [
          "Title" => "Build with Angga (Clone)",
          "Slug" => "build-with-angga-clone",
          "Developher" => $username,
          "Technology" => "React, Next JS, Framer Motion, Swiper, JSON Server",
          "Desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa at, dignissimos itaque sapiente totam deleniti ab aliquam nulla praesentium vero explicabo eius quia voluptate. Vel obcaecati consequatur, molestias quis hic fuga quibusdam architecto eligendi, sequi nam totam facere deleniti temporibus delectus harum rerum alias neque adipisci ab. Distinctio, quam!"
        ],
        [
          "Title" => "Pijar Music",
          "Slug" => "pijar-music",
          "Developher" => $username,
          "Technology" => "React, Next JS, Framer Motion, Swiper, JSON Server",
          "Desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa at, dignissimos itaque sapiente totam deleniti ab aliquam nulla praesentium vero explicabo eius quia voluptate. Vel obcaecati consequatur, molestias quis hic fuga quibusdam architecto eligendi, sequi nam totam facere deleniti temporibus delectus harum rerum alias neque adipisci ab. Distinctio, quam!"
        ],
        [
          "Title" => "Dental Medical",
          "Slug" => "dental-medical",
          "Developher" => $username,
          "Technology" => "React, Next JS, Framer Motion, Swiper, JSON Server",
          "Desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa at, dignissimos itaque sapiente totam deleniti ab aliquam nulla praesentium vero explicabo eius quia voluptate. Vel obcaecati consequatur, molestias quis hic fuga quibusdam architecto eligendi, sequi nam totam facere deleniti temporibus delectus harum rerum alias neque adipisci ab. Distinctio, quam!"
        ],
    ];
    $portfolio_item = [];
    foreach($portfolios as $portfolio){
        if($portfolio["Slug"] === $Slug ){
            $portfolio_item = $portfolio;
        }
    };
    return view('Portfolio',[
        'Title' => 'Portfolio Item',
        'Portfolio' => $portfolio_item,
    ]);
});
