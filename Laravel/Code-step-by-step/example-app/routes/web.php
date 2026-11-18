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
    return view('about', ['data' => $user]);
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

$type = 'admin';
#Route::view('login', 'login', ['type' => $type]);
Route::view('signup', 'signup');
Route::view('register', 'signup');

/*Route::get('login/{type}', function ($type) {
    return view('login', ['type' => $type]);
});*/

Route::get('login', [\App\Http\Controllers\AuthController::class, 'login']);
