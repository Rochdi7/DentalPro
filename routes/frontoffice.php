<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('index'); // resources/views/index.blade.php
})->name('frontoffice.home');

// Example: about page
Route::get('/about', function () {
    return view('about'); // resources/views/about.blade.php
})->name('frontoffice.about');
