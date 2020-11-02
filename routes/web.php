<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TestingController;
use App\Models\GroupTeacher;
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
    $groups=GroupTeacher::get();
    return view('auth.login_register', compact('groups'));
})->name('login_register');

Route::resource('themes', CategoriesController::class);
Route::post('/themes/test', [App\Http\Controllers\TestingController::class,'test'])->name('themes.test');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/edit', [App\Http\Controllers\HomeController::class,'update'])->name('user.edit');


/*Teacher-psychology*/
Route::get('/psycholog/themes', [App\Http\Controllers\TeacherController::class,'themes'])->name('psychologic.themes');
Route::get('/psycholog/themes/edit/{id}', [App\Http\Controllers\CategoriesController::class,'edit'])->name('psychologic.themes.edit');
Route::get('/psycholog/results', [App\Http\Controllers\TeacherController::class,'results'])->name('psychologic.results');
Route::get('/psycholog/clients', [App\Http\Controllers\TeacherController::class,'clients'])->name('psychologic.clients');
Route::get('/psycholog/clients/group/{id}', [App\Http\Controllers\TeacherController::class,'groupShow'])->name('psychologic.clients.group');
Route::get('/psycholog/clients/profile/{id}', [App\Http\Controllers\TeacherController::class,'groupShow'])->name('psychologic.clients.user');
Route::post('/psycholog/category/edit/{id}', [App\Http\Controllers\CategoriesController::class,'update'])->name('category.edit');
Route::post('/psycholog/clients/group/create', [App\Http\Controllers\TeacherController::class,'groupCreate'])->name('psychologic.group.create');

