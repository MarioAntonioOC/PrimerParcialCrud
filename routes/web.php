<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\teacherController;

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
Route::resource('/students', studentController::class);
Route::resource('/teacher', teacherController::class);

Route::post('/teacher/create', [teacherController::class, 'create'])->name('teacher.create');
Route::post('/students/create', [teacherController::class, 'create'])->name('students.create');

Route::post('/teacher/store', [teacherController::class, 'store'])->name('students.store');

Route::post('/students/store', [teacherController::class, 'store'])->name('students.store');

Route::get('/students/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/teacher/{teacher}', [teacherController::class, 'update'])->name('teacher.update');















