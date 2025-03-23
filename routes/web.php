<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'register'])->name('student.register');


Route::post('login', [AdminController::class, 'uthcheck'])->name('auth.check');
Route::get('login', [AdminController::class, 'login'])->name('admins.login');


Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admins.dashboard');
Route::get('students', [AdminController::class, 'index'])->name('admins.studentindex');
Route::get('students/{id}/show', [AdminController::class, 'show'])->name('admins.studentshow');
Route::get('students/create', [AdminController::class, 'create'])->name('admins.studentcreate');
Route::post('students', [AdminController::class, 'store'])->name('admins.studentstore');
Route::get('students/{id}/edit', [AdminController::class, 'edit'])->name('admins.studentedit');
Route::patch('students/{id}', [AdminController::class, 'update'])->name('admins.studentupdate');
