<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Ignasio Yossa",
        "email" => "yossa123@gmail.com",
        "image" => "yossa.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog",
        "posts" => post::all()
    ]);
});

Route::get('/dashboard', [UserController::class, 'index']);

//halaman single post
Route::get('blog/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Ignasio",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab corrupti accusamus officia. Illo corporis itaque, libero doloribus atque voluptatem sunt. Incidunt natus amet saepe, recusandae nesciunt modi nulla doloremque, quis quas consequuntur earum repellendus maiores nobis ratione architecto. Nihil, nobis?"
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Rudi Tabudi",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab corrupti accusamus officia. Illo corporis itaque, libero doloribus atque voluptatem sunt. Incidunt natus amet saepe, recusandae nesciunt modi nulla doloremque, quis quas consequuntur earum repellendus maiores nobis ratione architecto. Nihil, nobis?"
        ]
        ];
    
    $new_post = [];
    foreach($blog_posts as $blog){
        if ($blog["slug"] === $slug){
            $new_post = $blog;
        }
    }
    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});

Route::get('/create', [UserController::class, 'create']);
Route::post('/store', [UserController::class,'store']);
Route::get('/update/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/update/{id}', [UserController::class,'update']);
Route::get('/delete/{id}', [UserController::class,'destroy']);
