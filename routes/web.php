<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;

Route::get('/', [TweetController::class, 'index'])->name('home');


Route::get("/name-banan", [TweetController::class, "index"])
->name('home');

Route::post("/logout",LogoutController::class )
->name("logout");

Route::get("/tweet/{tweet}", [TweetController::class, "view"])
->name('tweet.view');
Route::post("/tweet/create", [TweetController::class, "store"] )
->name("tweet.create");


Route::get("/Login", [LoginController::class, "create"])
->name('login');
Route::post('/Login', [LoginController::class,'store']);

Route::get("/Register", [RegisterController::class, "create"])
->name('register');
Route::post("/Register", [RegisterController::class, "store"]);

Route::get("/test/{x}/{y}/{z}", function($x,$y,$z) {
    return min($x, $y, $z);

});
