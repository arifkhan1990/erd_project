<?php

use App\Http\Controllers\FrontPageController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');