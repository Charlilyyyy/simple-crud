<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ReadController;

Route::get('/',[HomePageController::class,'index'])->name('home');
Route::resource('/userdata',UserDataController::class);
Route::get('/edit/{id}',[EditController::class,'edit'])->name('edit');
Route::put('/update/{id}',[EditController::class,'update'])->name('update');
Route::get('/view/{id}',[ReadController::class,'view'])->name('view');

