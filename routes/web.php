<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('contact.top');
});

Route::get('/post', function () {
    return view('contact.post');
});

// Route::get('/post','PostController@hello');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
