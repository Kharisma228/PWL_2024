<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PosController;


/* Praktikum 1 */
/*Basic Routing*/

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/welcome', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2241760009 - Kharisma Etana Febrianto';
});

Route::get('/about', function () {
    return '2241760009 - Kharisma Etana Febrianto';
}); 


/*Route Parameters*/

Route::get('/user/{name}', function ($name) {
    return 'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($Id) {
    return 'Halaman Artikel dengan ID '.$Id;
});


/*Optional Parameters */

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='john') {
    return 'Nama saya '.$name;
});


/* Praktikum 2 */

/*Membuat Controller*/

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/welcome', [HomeController::class,'welcome']);

Route::get('/aboutme', [AboutController::class,'aboutme']);

Route::get('/articlesme/{id}', [ArticleController::class,'articlesme']);


/*Resource Controller*/

Route::resource('photos', PhotoController::class);


/* Praktikum 3 */

/*Membuat View*/

Route::get('/greeting', function () { 
    return view('hello', ['name' => 'Kharisma Etana']); 
    }); 

/*View dalam direktori*/

Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Kharisma Etana Febrianto']); 
    }); 

/*Menampilkan View dari Controller*/

Route::get('/greeting', [WelcomeController::class, 'greeting']);

/*Meneruskan data ke View*/

Route::get('/greeting', [WelcomeController::class, 'greeting']);


/* Soal Praktikum */

/*Halaman Home*/

Route::get('/halamanHome', function () {
    return '<center> Selamat Datang di Toko Sardi </center>';
});

/*Halaman Products*/

Route::prefix('category')->group(function () { 
    Route::get('/food-beverage', [PosController::class, 'food']); 
    Route::get('/beauty-health', [PosController::class, 'beauty']); 
    Route::get('/home-care', [PosController::class, 'home']); 
    Route::get('/baby-kid', [PosController::class, 'baby']); 
    }); 

/*Halaman User*/

Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return 'NIM : '.$id."<br> Nama : ".$name;
});

/*Halaman Penjualan*/

