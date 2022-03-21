<?php

use Illuminate\Support\Facades\Route;


// route for the courses
Auth::routes();
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::any('home', function() {
    return redirect('/dashboard');
});
// Route::any('/', [App\Http\Controllers\UserController::class, 'homepage'])->name('homepage');
Route::any('/', [App\Http\Controllers\UserController::class, 'landing'])->name('landing');
Route::any('/about', [App\Http\Controllers\UserController::class, 'about'])->name('about');
Route::group(['middleware' => 'auth'], function() {
//route for courses
Route::any('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::any('/editprofile', [App\Http\Controllers\UserController::class, 'editprofile'])->name('editprofile');
Route::any('/updateprofile', [App\Http\Controllers\UserController::class, 'updateprofile'])->name('updateprofile');
Route::any('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
Route::any('/deletecourse', [App\Http\Controllers\UserController::class, 'deletecourse'])->name('deletecourse');
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
//route for announcemet

});
// Route::get('/', function () {
//     return view('welcome');
// });
