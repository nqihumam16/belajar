<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'nama' => 'Ahmad Naqi Humam',
        'title' => 'Contact'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog'
    ]);
});

Route::get('/home', function () {
    return view('welcome', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});
