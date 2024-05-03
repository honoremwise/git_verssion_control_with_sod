<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('course');
});

Route::post('/create-course',
[\App\Http\Controllers\CoursesController::class,'storeCourse']);
Route::get('/get-courses',
[\App\Http\Controllers\CoursesController::class,'index']);
Route::get('/edit/{id}',
[\App\Http\Controllers\CoursesController::class,
'getUpdateCourseFrm']);
Route::get('/delete/{id}',
[\App\Http\Controllers\CoursesController::class,
'deleteCourse']);

Route::post('/update-course/{id}',
[\App\Http\Controllers\CoursesController::class,
'updateCourse']);