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

Route::get('/admin', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('frontend.front');
});

Route::get('/back', function () {
    return view('layouts.back');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/video-post', function () {
    return view('frontend.video-post');
});

Route::get('/log', function () {
    return view('frontend.login');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/submit-video', function () {
    return view('frontend.submit-video');
});

Route::get('/single-post', function () {
    return view('frontend.single-post');
});

Route::get('/archive', function () {
    return view('frontend.archive');
});
