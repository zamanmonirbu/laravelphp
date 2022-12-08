<?php

use App\Http\Controllers\postController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/index',[postController::class,'index']);
Route::post('post/show/{$id}',[postController::class,'show']);
Route::get('post/create',[postController::class,'create']);
Route::post('post/store',[postController::class,'store']);