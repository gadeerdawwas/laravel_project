<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/portfolio')->name('protfolio.')->group(function(){
    Route::get('/index',[pageController::class ,'index' ])->name('index');
    Route::get('/about',[pageController::class ,'about' ])->name('about');
    Route::get('/contact',[pageController::class ,'contact' ])->name('contact');
    Route::get('/services',[pageController::class ,'services' ])->name('services');
    Route::get('/portfolio',[pageController::class ,'portfolio' ])->name('portfolio');
});



