<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//login

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::middleware(['auth'])->group(function () {
    
});

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::prefix('alunos')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('student.index');
    Route::get('/cadastrar', [StudentController::class, 'create'])->name('student.create');
});

Route::prefix('cursos')->group(function () {
    Route::get('/', [CourseController::class, 'index'])->name('course.index');
    Route::get('/cadastrar', [CourseController::class, 'create'])->name('course.create');
    Route::post('/cadastrar/novo', [CourseController::class, 'store'])->name('course.store');
});

Route::prefix('professores')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('teacher.index');
    Route::get('/cadastrar', [TeacherController::class, 'create'])->name('teacher.create');
    Route::post('cadastrar/novo', [TeacherController::class, 'store'])->name('teacher.store');
});

Route::prefix('alunos')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('student.index');
    Route::get('/cadastrar', [StudentController::class, 'create'])->name('student.create');
    Route::post('cadastrar/novo', [StudentController::class, 'store'])->name('student.store');
});