<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\UserDataController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomePageController::class,'index'])->name('home');
// Route::post('/save',[SaveDataController::class,'index']->name('store'));
Route::resource('/userdata',UserDataController::class);
// Route::get('/success',SuccessPageController::class,'index');
// Route::get('/',[HomePageController::class,'index'])->name('home');

