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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/messages', function () {
    return view('contact');
});

Route::get('/messages', 'MessagesController@getMessages');

// submit button needs to be post method
// it will be associated with the MessagesController
// with a submit function
Route::post('/contact/submit', 'MessagesController@submit');
