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
Route::get('/police','Frontend\FrontController@police')->name('frontSide.police');
Route::get('/doctor','Frontend\FrontController@doctor')->name('frontSide.doctor');
Route::get('/ambulance','Frontend\FrontController@ambulance')->name('frontSide.ambulance');
Route::get('/bloodBank','Frontend\FrontController@bloodBank')->name('frontSide.bloodBank');
Route::get('/findBlood','Frontend\FrontController@findBlood')->name('frontSide.findBlood');
Route::get('/donateBlood','Frontend\FrontController@donateBlood')->name('frontSide.donateBlood');
Route::get('/category/{slug}','Frontend\FrontController@category')->name('categoryPage');
Route::post('/contact','Frontend\FrontController@sendMessage')->name('frontSide.contact');
Route::post('/police','Frontend\FrontController@sendToPolice')->name('frontSide.police');
Route::post('/doctor','Frontend\FrontController@sendToDoctor')->name('frontSide.doctor');
Route::post('/findBlood','Frontend\FrontController@sendForBlood')->name('frontSide.findBlood');
Route::post('/donateBlood','Frontend\FrontController@sendToDonate')->name('frontSide.donateBlood');



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



