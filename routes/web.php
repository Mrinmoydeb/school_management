<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentController::class, 'register'])->name('student.register');


Route::post('login', [AdminController::class, 'uthcheck'])->name('auth.check');
Route::get('login', [AdminController::class, 'login'])->name('admins.login');


Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admins.dashboard');
Route::get('student-subject', [AdminController::class, 'subject'])->name('admins.subject');
Route::get('students', [AdminController::class, 'index'])->name('admins.studentindex');
Route::get('students/{id}/show', [AdminController::class, 'show'])->name('admins.studentshow');
Route::get('students/create', [AdminController::class, 'create'])->name('admins.studentcreate');
Route::post('students', [AdminController::class, 'store'])->name('admins.studentstore');
Route::get('students/{id}/edit', [AdminController::class, 'edit'])->name('admins.studentedit');
Route::patch('students/{id}', [AdminController::class, 'update'])->name('admins.studentupdate');

// Student subjects
Route::get('student/subjects', [AdminController::class, 'subjectIndex'])->name('admins.subjectlist');
Route::post('student/subjects', [AdminController::class, 'subjectStore'])->name('admins.subjectStore');
Route::get('student/subject/create', [AdminController::class, 'subjectCreate'])->name('admins.subjectcreate');
Route::get('student/subject/{id}/edit', [AdminController::class, 'subjectEdit'])->name('admins.subjectedit');


// Roll route
Route::get('student/roll', [AdminController::class, 'rollIndex'])->name('admins.rolllist');
Route::post('student/roll', [AdminController::class, 'rollStore'])->name('admins.rollstore');
Route::get('student/roll/create', [AdminController::class, 'rollCreate'])->name('admins.rollcreate');
Route::get('student/roll/{id}/edit', [AdminController::class, 'rollEdit'])->name('admins.rolledit');
Route::patch('student/roll/{id}/update', [AdminController::class, 'rollUpdate'])->name('admins.rolleupdate');
