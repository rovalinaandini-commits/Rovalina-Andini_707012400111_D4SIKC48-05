<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('selamat datang di halaman utama!');
});

Route::get('/hello', function () {
    return 'Hello, Rovalina Andini';
});

Route::get('/user/{andini}', function ($name){
    return "Nama saya $name";
});

Route::get('/greet/{name?}', function ($name = 'andini') {
    return "Halo, $name";
});

Route::get('/profile',function () {
    return view('profile');
});

Route::get('about', function() {
    return view('about', ['name' => 'Rovalina Andini']);
});

Route::get('/home', function () {
    return 'Halo, Ini adalah halaman Home';
}) ->name('home.page');