<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'students' => StudentController::class,
]);
