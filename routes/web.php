<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages/home'))->name('home');

Route::view('/about', 'pages.about')->name('about');