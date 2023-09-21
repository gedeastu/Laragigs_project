<?php


use App\Models\Datas;
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
        'Datas' => Datas::all()
    ]);
});

// Route::get('/{Slug}', function($Slug){
//     $Datas = [
//         [
//             'Title' => 'Joke Father',
//             'Slug' => 'joke-father',
//             'Desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolores distinctio veritatis ullam. Inventore repellat explicabo nisi, nobis corporis hic fugiat ipsa velit perferendis error quibusdam et ab distinctio sit!'
//         ],
//         [
//             'Title' => 'Joke People',
//             'Slug' => 'joke-people',
//             'Desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolores distinctio veritatis ullam. Inventore repellat explicabo nisi, nobis corporis hic fugiat ipsa velit perferendis error quibusdam et ab distinctio sit!'
//         ],
//         [
//             'Title' => 'Joke Friends',
//             'Slug' => 'joke-friends',
//             'Desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolores distinctio veritatis ullam. Inventore repellat explicabo nisi, nobis corporis hic fugiat ipsa velit perferendis error quibusdam et ab distinctio sit!'
//         ],
//         [
//             'Title' => 'Joke Mother',
//             'Slug' => 'joke-mother',
//             'Desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dolores distinctio veritatis ullam. Inventore repellat explicabo nisi, nobis corporis hic fugiat ipsa velit perferendis error quibusdam et ab distinctio sit!'
//         ],
//     ];
//     $Datas_item = [];
//     foreach($Datas as $Data){
//       if ($Data['Slug'] === $Slug) {
//             $Datas_item = $Data;
//       }
//     };
//     return view('Data',[
//         'Title' => 'Data Item',
//         'Datas' => $Datas_item,
//     ]);
// });

Route::get('/about', function () {
    return view('About',[
        'Title' => 'About',
        'username' => 'Gede Astu Nugraha',
        'email' => 'gede.astu@gmail.com',
        'image' => 'myPict-transformed.png'
    ]);
});

Route::get('/portfolios', function () {
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

Route::get('portfolios/{Slug}',function($Slug){
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
