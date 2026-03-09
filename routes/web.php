<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/', 'user-panel.pages.home')->name('home');
