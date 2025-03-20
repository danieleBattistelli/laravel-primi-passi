<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    $informazioni = "Ciao MONDO!";
    return view('Home', compact('informazioni'));
})->name('home');

Route :: get ('/about', function () {
    return view('About');
})->name('about');

Route :: get ('/blog', function () {
    return view('Blog');
})->name('blog');