<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

