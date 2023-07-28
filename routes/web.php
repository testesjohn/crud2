<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;



Route::get('/', [TeacherController::class, 'index'])->name('home');
Route::get('/create', [TeacherController::class, 'create'])->name('create');
Route::post('/store', [TeacherController::class, 'store'])->name('store');
Route::get('/edit/{teacher}', [TeacherController::class, 'edit'])->name('edit');
Route::put('/update/{teacher}', [TeacherController::class, 'update'])->name('update');
Route::delete('/delete/{teacher}', [TeacherController::class, 'destroy'])->name('destroy');
