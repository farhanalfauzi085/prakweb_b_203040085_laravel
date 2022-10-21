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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Farhan Alfauzi",
        "email" => "203040085@mail.unpas.ac.id",
        "image" => "profil.png"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
