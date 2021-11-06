<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.pages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
