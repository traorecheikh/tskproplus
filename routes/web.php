<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::any("/login",[UserController::class,"login"])->name("user.login");
Route::any("/register",[UserController::class,"register"])->name("user.register");
