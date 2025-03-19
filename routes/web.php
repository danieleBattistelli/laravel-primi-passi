<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/blog', function () {
    return view('Blog');
});

Route::get('/about', function () {
    return view('About');
});
