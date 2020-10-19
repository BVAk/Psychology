<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TestingController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/login-register', function () {
    return view('auth\login_register');
})->name('login_register');
Route::resource('themes', CategoriesController::class);
Route::post('/themes/test', [App\Http\Controllers\TestingController::class,'test'])->name('themes.test');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

