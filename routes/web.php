<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FormtController;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('search_data',[App\Http\Controllers\FormController::class,'search_data'])->name('searchstudent');

Route::controller(StudentController::class)->group(function(){

Route::get('/','showStudents')->name('home');

Route::get('/student/{id}','singleStudent')->name('view.student');

Route::post('/create','createStudent')->name('creteStudent');

Route::post('/update/{id}','updateStudent')->name('update.student');
Route::get('/updatepage/{id}','updatePage')->name('update.page');

Route::get('/delete/{id}','deleteStudent')->name('delete.student');
});
Route::view('newstudent', '/createstudent');