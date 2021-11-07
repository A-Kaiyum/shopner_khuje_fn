<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/category', function () {
    return view('frontend.pages.category');
});
Route::get('/admin', function () {
    return view('backend.pages.dashboard');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
