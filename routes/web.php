<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return redirect("login");
});

Route::get('/login', [LoginController::class, "index"])->name("login");
Route::post('/login', [LoginController::class, "login"]);
Route::get("/logout", LogoutController::class)->name("logout");

Route::get('/register', [RegisterController::class, "index"]);
Route::post('/register', [RegisterController::class, "register"])->name("register");

Route::get("/dashboard", DashboardController::class)->name("dashboard");
