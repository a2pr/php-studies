<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/about/{user}', function ($user) {
    return view('about', ['data'=> $user]);
});

Route::get('/contact', function () {
    return view('contact');
});

#Route::view('/welcome', 'welcome');

Route::redirect('/welcome', '/');
