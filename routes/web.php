<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect("login");
});

Route::middleware("guest")->group(function () {
    Route::get('/register', [RegisterController::class, "index"]);
    Route::post('/register', [RegisterController::class, "register"])->name("register");

    Route::get('/login', [LoginController::class, "index"])->name("login");
    Route::post('/login', [LoginController::class, "login"]);
});

Route::middleware("auth")->group(function () {

    Route::get("/dashboard", [DashboardController::class, "index"])->name("dashboard");
    Route::post("/links/create", [LinkController::class, "store"])->name("links.create");

    Route::middleware("can:atualizar,link")->group(function () {
        //links
        Route::get("/links/{link}/edit", [LinkController::class, "show"])->name("links.edit");
        Route::put("/links/{link}/edit", [LinkController::class, "update"]);
        Route::delete("/links/{link}", [LinkController::class, "destroy"])->name("links.destroy");
    });


    //profile
    Route::get("/profile", [ProfileController::class, "index"]);
    Route::put("/profile", [ProfileController::class, "update"])->name("profile.update");

    Route::get("/logout", LogoutController::class)->name("logout");
});
