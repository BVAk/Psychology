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


/*Teacher-psychology*/
Route::get('/psycholog/themes', [App\Http\Controllers\TeacherController::class,'themes'])->name('teacher.themes');
Route::get('/psycholog/results', [App\Http\Controllers\TeacherController::class,'results'])->name('teacher.results');
Route::get('/psycholog/students', [App\Http\Controllers\TeacherController::class,'students'])->name('teacher.students');
Route::get('/psycholog/students/group/{id}', [App\Http\Controllers\TeacherController::class,'groupShow'])->name('teacher.students.group');
Route::post('/psycholog/students/group/create', [App\Http\Controllers\TeacherController::class,'groupCreate'])->name('teacher.group.create');

