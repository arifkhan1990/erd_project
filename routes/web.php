<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\UserAdminController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/', function () {
    return view('front.index');
});

// Route::get('about', "FrontPageController@about")->name('front.about');
Route::get('/about', [FrontPageController::class, 'about'])->name('front.about');
Route::get('contact', [FrontPageController::class, 'contact'])->name('front.contact');
Route::get('message', [FrontPageController::class, 'message'])->name('front.message');
Route::get('message2', [FrontPageController::class, 'message2'])->name('front.message2');
Route::get('faq', [FrontPageController::class, 'faq'])->name('front.faq');

Auth::routes();
Route::get('/logout', function () {
    auth()->logout();
    return redirect("/");
})->name('logout-page');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// user
Route::get('/dashboard', [UserAdminController::class, 'dashboard'])->name('user.dashboard');
Route::get('user-about', [UserAdminController::class, 'about'])->name('user.about');
Route::get('user-profile/{id}', [UserAdminController::class, 'profile'])->name('user.profile');
Route::put('user-profile-update/{id}', [UserAdminController::class, 'update'])->name('user.update');
Route::put('user-profile/password-change/{id}', [UserAdminController::class, 'changePassword'])->name('user.profile.password_change');
// Route::get('user-application', [ApplicationController::class, 'index'])->name('user.application');



Route::get('user-application', [ApplicationController::class, 'create'])->name('user.application');
Route::post('form/store', [ApplicationController::class, 'store'])->name('form.store');
Route::get('form', [ApplicationController::class, 'index'])->name('form.index');
Route::get('form/{id}/edit', [ApplicationController::class, 'edit'])->name('form.edit');
Route::put('form/{id}', [ApplicationController::class, 'update'])->name('form.update');
Route::delete('form/{id}', [ApplicationController::class, 'destroy'])->name('form.destroy');
