<?php

use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\MajorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('students')->prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');

    Route::get('/{id}', [StudentController::class, 'show'])->name('show');

    Route::get('/create', [StudentController::class, 'create'])->name('create');

    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');

    Route::post('/', [StudentController::class, 'store'])->name('store');

    Route::put('/{id}', [StudentController::class, 'update'])->name('update');

    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
});

Route::name('Teachers')->prefix('teachers')->group(function () {
    Route::get('/', [TeachersController::class, 'index'])->name('index');

    Route::get('/{id}', [TeachersController::class, 'show'])->name('show');

    Route::get('/create', [TeachersController::class, 'create'])->name('create');

    Route::get('/{id}/edit', [TeachersController::class, 'edit'])->name('edit');

    Route::post('/', [TeachersController::class, 'store'])->name('store');

    Route::put('/{id}', [TeachersController::class, 'update'])->name('update');

    Route::delete('/{id}', [TeachersController::class, 'destroy'])->name('destroy');
});

    Route::name('SchoolClass')->prefix('SchoolClass')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');

    Route::get('/{id}', [ShowController::class, 'show'])->name('show');

    Route::get('/create', [CreateController::class, 'create'])->name('create');

    Route::get('/{id}/edit', [EditController::class, 'edit'])->name('edit');

    Route::post('/{id}', [StoreController::class, 'store'])->name('store');

    Route::put('/{id}', [UpdateController::class, 'update'])->name('update');

    Route::delete('/{id}', [DestroyController::class, 'destroy'])->name('destroy');
});

    Route::resource('Major', MajorController::class);
        