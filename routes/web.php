<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::name('students')->prefix('students')->group(function () {
    Route::get('/', function () {
        return "Menampilkan daftar siswa";
    })->name('index');

    Route::get('/{id}', function ($id) {
        return "Menampilkan detail siswa dengan ID: {$id}";
    })->name('show');
});