<?php

use Illuminate\Support\Facades\Route;


// route for the courses
Auth::routes();
// Route::any('/', [App\Http\Controllers\ProductController::class, 'homepage'])->name('homepage');
Route::any('/', [App\Http\Controllers\ProductController::class, 'course'])->name('course')->middleware('auth');
Route::group(['middleware' => 'auth'], function() {

Route::any('/createcourse', [App\Http\Controllers\ProductController::class, 'createcourse'])->name('createcourse');
Route::any('/courseindex', [App\Http\Controllers\ProductController::class, 'courseindex'])->name('courseindex');
Route::any('/courses', [App\Http\Controllers\ProductController::class, 'course'])->name('course');
Route::any('/loadcourse', [App\Http\Controllers\ProductController::class, 'loadcourse'])->name('loadcourse');
Route::any('/editcourse', [App\Http\Controllers\ProductController::class, 'editcourse'])->name('editcourse');
Route::any('/deletecourse', [App\Http\Controllers\ProductController::class, 'deletecourse'])->name('deletecourse');
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

});
// Route::get('/', function () {
//     return view('welcome');
// });
