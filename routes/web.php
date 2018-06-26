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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/travels', function () {
    return view('travels');
});

Route::get('/anime', function () {
    return view('anime');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/music', function () {
    return view('music');
});

Route::get('/smash', function () {
    return view('smash');
});

Route::get('/smite', function () {
    return view('smite');
});

Route::get('/television', function () {
    return view('television');
});

Route::get('/wow', function () {
    return view('wow');
});

Route::get('/yugioh', function () {
    return view('yugioh');
});

Route::get('/hearthstone', function () {
    return view('hearthstone');
});