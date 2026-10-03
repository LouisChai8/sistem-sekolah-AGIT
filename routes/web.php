<?php

use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Student Management Routes
Route::name('students.')->prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::get('/{student}', [StudentController::class, 'show'])->name('show')->whereNumber('id');
    Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('edit')->whereNumber('id');
    Route::post('/', [StudentController::class, 'store'])->name('store');
    Route::put('/{student}', [StudentController::class, 'update'])->name('update')->whereNumber('id');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('destroy')->whereNumber('id');
});

// Teacher Management Routes
Route::name('teachers.')->prefix('teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    Route::get('/create', [TeacherController::class, 'create'])->name('create');
    Route::get('/{teacher}', [TeacherController::class, 'show'])->name('show')->whereNumber('teacher');
    Route::get('/{teacher}/edit', [TeacherController::class, 'edit'])->name('edit')->whereNumber('teacher');
    Route::post('/', [TeacherController::class, 'store'])->name('store');
    Route::put('/{teacher}', [TeacherController::class, 'update'])->name('update')->whereNumber('teacher');
    Route::delete('/{teacher}', [TeacherController::class, 'destroy'])->name('destroy')->whereNumber('teacher');
});

// School Class Management Routes
Route::name('classes.')->prefix('classes')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/create', [CreateController::class, 'create'])->name('create');
    Route::post('/', StoreController::class)->name('store');
    Route::get('/{id}', ShowController::class)->name('show')->whereNumber('id');
    Route::get('/{id}/edit', [EditController::class, 'edit'])->name('edit')->whereNumber('id');
    Route::put('/{id}', UpdateController::class)->name('update')->whereNumber('id');
    Route::delete('/{id}', DestroyController::class)->name('destroy')->whereNumber('id');
});

// Major Management Routes
Route::resource('majors', MajorController::class);