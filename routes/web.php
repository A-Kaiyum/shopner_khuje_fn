<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//fronted routes

/*Route::get('/', function () {
    return view('frontend.pages.index');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/category', function () {
    return view('frontend.pages.category');
});*/

Route::get('/','Frontend\FrontController@home')->name('frontSide');
Route::get('/about','Frontend\FrontController@about')->name('frontSide.about');
Route::get('/blog','Frontend\FrontController@blog')->name('frontSide.blog');
Route::get('/post/{slug}','Frontend\FrontController@singlePost')->name('frontSide.post');
Route::get('/contact','Frontend\FrontController@contact')->name('frontSide.contact');
Route::get('/help','Frontend\FrontController@help')->name('frontSide.help');
Route::get('/category/{slug}','Frontend\FrontController@category')->name('categoryPage');


//admin panel route
Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/dashboard', function () {
        return view('backend.pages.dashboard');
    });
    Route::resource('category','Backend\CategoryController');
    Route::resource('tag','Backend\TagController');
    Route::resource('post','Backend\PostController');
    Route::resource('user','Backend\UserController');

});



