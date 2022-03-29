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
//route for users
Route::any('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::any('/editprofile', [App\Http\Controllers\UserController::class, 'editprofile'])->name('editprofile');
Route::any('/updateprofile', [App\Http\Controllers\UserController::class, 'updateprofile'])->name('updateprofile');
Route::any('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
Route::any('/buyairtime', [App\Http\Controllers\UserController::class, 'buyairtime'])->name('buyairtime');
Route::any('/buyairtime2', [App\Http\Controllers\UserController::class, 'buyairtime2'])->name('buyairtime2');
Route::any('/cable', [App\Http\Controllers\UserController::class, 'cable'])->name('cable');
Route::any('/buycable2', [App\Http\Controllers\UserController::class, 'buycable2'])->name('buycable2');
Route::any('/buydata', [App\Http\Controllers\UserController::class, 'buydata'])->name('buydata');
Route::any('/buydata2', [App\Http\Controllers\UserController::class, 'buydata2'])->name('buydata2');
Route::any('/electricity', [App\Http\Controllers\UserController::class, 'electricity'])->name('electricity');
Route::any('/electricity2', [App\Http\Controllers\UserController::class, 'electricity2'])->name('electricity2');
Route::any('/exam', [App\Http\Controllers\UserController::class, 'exam'])->name('exam');
Route::any('/buypin', [App\Http\Controllers\UserController::class, 'buypin'])->name('buypin');
Route::any('/fundwallet', [App\Http\Controllers\UserController::class, 'fundwallet'])->name('fundwallet');
Route::any('/fundwallet2', [App\Http\Controllers\UserController::class, 'fundwallet2'])->name('fundwallet2');
Route::any('/checkpin', [App\Http\Controllers\UserController::class, 'checkpin'])->name('checkpin');
Route::any('/updatepin', [App\Http\Controllers\UserController::class, 'updatepin'])->name('updatepin');
Route::any('/deletecourse', [App\Http\Controllers\UserController::class, 'deletecourse'])->name('deletecourse');
Route::any('/usernotifications', [App\Http\Controllers\UserController::class, 'usernotifications'])->name('usernotifications');
Route::any('/fetchairtime', [App\Http\Controllers\UserController::class, 'fetchairtime'])->name('fetchairtime');
Route::any('/manualfunding', [App\Http\Controllers\UserController::class, 'manualfunding'])->name('manualfunding');
Route::any('/createticket', [App\Http\Controllers\UserController::class, 'createticket'])->name('createticket');
Route::any('/ticket', [App\Http\Controllers\UserController::class, 'ticket'])->name('ticket');
Route::any('/transactiondetials/{id}', [App\Http\Controllers\UserController::class, 'transactiondetials'])->name('transactiondetials');
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
//route for superadmin

Route::any('/admindashboard', [App\Http\Controllers\AdminController::class, 'admindashboard'])->name('admindashboard');
Route::any('/allusers', [App\Http\Controllers\AdminController::class, 'allusers'])->name('allusers');
Route::any('/viewtransaction/{id}', [App\Http\Controllers\AdminController::class, 'viewtransaction'])->name('viewtransaction');
Route::any('/notifications', [App\Http\Controllers\AdminController::class, 'notifications'])->name('notifications');
Route::any('/createnotification', [App\Http\Controllers\AdminController::class, 'createnotification'])->name('createnotification');
Route::any('/deletenotification', [App\Http\Controllers\AdminController::class, 'deletenotification'])->name('deletenotification');
Route::any('/deleteticket', [App\Http\Controllers\AdminController::class, 'deleteticket'])->name('deleteticket');
Route::any('/deletemanual', [App\Http\Controllers\AdminController::class, 'deletemanual'])->name('deletemanual');
// Route::any('//', [App\Http\Controllers\HomeController::class, '/'])->name('/');


});
// Route::get('/', function () {
//     return view('welcome');
// });
