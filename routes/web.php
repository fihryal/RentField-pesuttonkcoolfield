<?php

use App\Http\Controllers\articleController;
use App\Http\Controllers\SessionController;
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

Route::get('/article/create',[articleController::class,'create'])->middleware('isAdmin');
Route::post ('/article',[articleController::class,'store'])->middleware('isAdmin');
Route::get('/article/{id}/edit',[articleController::class, 'edit'])->middleware('isAdmin');
Route::patch ('/article/{id}',[articleController::class,'update'])->middleware('isAdmin');
Route::delete ('/article/{id}',[articleController::class,'delete'])->middleware('isAdmin');
Route::get('/article/{id}',[articleController::class,'detail']);

Route::get('/sesi',[SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/sesi/logout',[SessionController::class,'logout']);
Route::get('/sesi/register',[SessionController::class,'register']);
Route::post('/sesi/create',[SessionController::class,'create']);
