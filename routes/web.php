<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\teacherController;
use App\Http\Controllers\UserController;

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
    return view('home');
});

Route::resource('/students', studentController::class);
Route::resource('/teacher', teacherController::class);
Route::resource('/user', UserController::class);


Route::post('/teacher/create', [teacherController::class, 'create'])->name('teacher.create');
Route::post('/students/create', [studentController::class, 'create'])->name('students.create');


Route::post('/user/create', [UserController::class, 'create'])->name('users.create');

Route::post('/teacher/store', [teacherController::class, 'store'])->name('students.store');

Route::post('/students/store', [studentController::class, 'store'])->name('students.store');

Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/teacher/{teacher}', [teacherController::class, 'update'])->name('teacher.update');
Route::put('/students/{students}', [StudentController::class, 'update'])->name('students.update');

Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');

















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
