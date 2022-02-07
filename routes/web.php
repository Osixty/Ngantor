<?php

use Illuminate\Support\Facades\Route;

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
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/about', function() {
    return view('about',[
        "title" => "About",
        "nama" => "Zidan Nazih Alwan",
        "email" => "alzidan@gmail.com",
        "gambar" => "talenta.jpg"
    ]);
});

Route::get('/Gallery', function() {
    return view('Gallery',[
        "title" => "Gallery"
    ]);
});


