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
Route::post('/payment',[AuthenticationController::class,'payment']);
Route::get('/mypayment',[AuthenticationController::class,'mypayment']);
Route::get('/addadvertisement',[AuthenticationController::class,'advertisement']);
Route::post('/addadvertisement',[AuthenticationController::class,'addadvertisement']);
Route::get('/faculty',[AuthenticationController::class,'get_faculty']);
Route::get('/marks',[AuthenticationController::class,'marks']);
Route::post('/marks',[AuthenticationController::class,'create_marks']);





