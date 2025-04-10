<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HodController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/home', [AdminController::class, 'dashboard'])->name('admin.home');
});

Route::middleware(['auth', 'role:lecturer'])->group(function () {
    Route::get('/lecturer/home', [LecturerController::class, 'dashboard'])->name('lecturer.home');
});

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student/home', [StudentController::class, 'dashboard'])->name('student.home');
});

Route::middleware(['auth', 'role:hod'])->group(function () {
    Route::get('/hod/home', [HodController::class, 'dashboard'])->name('hod.home');
});
