<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[AuthenticationController::class,'index']);
Route::get('/login',[AuthenticationController::class,'login']);
Route::get('/register',[AuthenticationController::class,'register']);
Route::post('/login',[AuthenticationController::class,'registration']);
Route::post('/home',[AuthenticationController::class,'authentication']);
Route::get('/addcourse',[AuthenticationController::class,'addcourse']);
Route::post('/adminhome',[AuthenticationController::class,'newcourse']);
Route::get('/mycourse',[AuthenticationController::class,'mycourse']);





