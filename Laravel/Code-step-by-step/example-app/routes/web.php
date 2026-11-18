<?php

use App\Http\Controllers\UserController;
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

Route::get('user', [UserController::class, 'index']);
Route::get('get-user', [UserController::class, 'getUser']);
Route::get('user-details/{name}', [UserController::class, 'details']);
Route::get('welcome-user', [UserController::class, 'welcome']);
