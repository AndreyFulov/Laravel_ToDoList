<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class,'index'])->name('index');
Route::post('/create', [TaskController::class,'store'])->name('store');
Route::delete('/delete/{id}', [TaskController::class,'delete'])->name('destroy');
