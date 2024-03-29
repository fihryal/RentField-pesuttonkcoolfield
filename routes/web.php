<?php

use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[articleController::class,'index']);
Route::get('/article',[articleController::class,'article']);

Route::get('/article/create',[articleController::class,'create']);
Route::post ('/article',[articleController::class,'store']);
Route::get('/article/{id}/edit',[articleController::class, 'edit']);
Route::patch ('/article/{id}',[articleController::class,'update']);
Route::delete ('/article/{id}',[articleController::class,'delete']);
Route::get('/article/{id}',[articleController::class,'detail']);
