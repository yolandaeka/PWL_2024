<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


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

// --- PRAKTIKUM 1 ---

// Langkah 1
Route::get('/hello', function () {
    return 'Hello World';
});

// LANGKAH 2
Route::get('/world', function () {
    return 'World';
});

// LANGKAH 3
Route::get('/welcome', function () {
    return 'Selamat Datang';
});

// LANGKAH 4
Route::get('/about', function () {
    return 'NIM : 2241760028 <br> Nama : Yolanda Ekaputri Setyawan';
});

// langkah 5
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' .$name;
});

// langkah 7
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke- ' .$postId. " Komentar ke-: " .$commentId;
});

// langkah 8
Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID " .$id;
});

// LANGKAH 9
Route::get('/user/{name?}', function ($name= null) {
    return 'Nama saya ' .$name;
});

// LANGKAH 11
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });

// --- PRAKTIKUM 2 ---

// Langkah 2
Route::get('/hello', [App\Http\Controllers\WelcomeController::class,'hello']);
    
// langkah 3
Route::get('/', [PageController::class,'index']);

// langkah 4
Route::get('/about', [PageController::class,'about']);

// langkah 5
// Route::get('/articles/{name?}', [PageController::class,'articles']);

// langkah 6
Route::get('/articles/{id?}', [PageController::class,'articles']);

// langkah 7
Route::get('/', [HomeController::class,'index']);

// langkah 8
Route::get('/about', [AboutController::class,'about']);

// langkah 9
Route::get('/articles/{id?}', [ArticleController::class,'articles']);

// langkah 11
Route::resource('photos', PhotoController::class);

// langkah 13
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

// --- PRAKTIKUM 3 ---

// langkah 1
// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Yolanda']);
// });

// langkah 2
Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Yolanda']);
});

// langkah 4
Route::get('/greeting', [WelcomeController::class,'greeting']);





