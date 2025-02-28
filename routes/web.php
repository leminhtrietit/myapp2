<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/resource', [App\Http\Controllers\ResourceController::class, 'index'])->name('resource.index');
Route::get('/download', [App\Http\Controllers\ResourceController::class, 'index']);

