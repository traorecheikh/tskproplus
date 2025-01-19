<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::any("/login",[UserController::class,"login"])->name("user.login");
Route::any("/register",[UserController::class,"register"])->name("user.register");
Route::get("/",[UserController::class,"home"])->name("user.home");
Route::any("/project/index",[ProjectController::class,"index"])->name("project.index");
Route::any("/project/create",[ProjectController::class,"create"])->name("project.create");
Route::any("/project/update/{project}",[ProjectController::class,"update"])->name("project.update");
Route::any("/project/show/{project}",[ProjectController::class,"show"])->name("project.show");
Route::delete("/project/destroy/{project}",[ProjectController::class,"destroy"])->name("project.destroy");
Route::delete("/Task/destroy/{task}",[TaskController::class,"destroy"])->name("task.destroy");
Route::any("/task/index",[TaskController::class,"index"])->name("task.index");
Route::any("/task/create",[TaskController::class,"create"])->name("task.create");
Route::any("/task/update/{task}",[TaskController::class,"update"])->name("task.update");
Route::any("/task/show/{task}",[TaskController::class,"show"])->name("task.show");

