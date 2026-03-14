<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/', 'userPanel.pages.home')->name('home');

// product listing page

Route::view('/shop', 'userPanel.pages.shop')->name('shop');