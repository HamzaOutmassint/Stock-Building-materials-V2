<?php

use App\Http\Controllers\adminDate;
use App\Http\Controllers\controleDate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// Route api for worker

Route::post('login',[controleDate::class,'login']);
Route::post('controlerDetails',[controleDate::class,'controlerDetails']);
Route::post('designationDetails',[controleDate::class,'designationDetails']);
Route::post('ajouteDesignation',[controleDate::class,'ajouteDesignation']);
Route::post('serachControlerValide',[controleDate::class,'serachControlerValide']);

// Route api for admin


Route::get('workerDetails',[adminDate::class,'workerDetails']);
Route::post('workerDetailsParMonth',[adminDate::class,'workerDetailsParMonth']);
Route::post('Countcontrolerqty',[adminDate::class,'Countcontrolerqty']);
Route::post('getControlerInfo',[adminDate::class,'getControlerInfo']);
