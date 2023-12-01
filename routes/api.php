<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students',[UserController::class,'index']);

Route::post('students',[UserController::class,'store']);

Route::get('students/{student}',[UserController::class,'show']);

Route::put('students/{student}',[UserController::class,'update']);

Route::delete('students/{student}',[UserController::class,'destroy']);


