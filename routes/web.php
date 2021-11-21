<?php

use Illuminate\Support\Facades\Route;

//fronted routes

Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/category', function () {
    return view('frontend.pages.category');
});

//admin panel route

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    });
    Route::resource('category','CategoryController');
    Route::resource('tag','TagController');
    Route::resource('post','PostController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
