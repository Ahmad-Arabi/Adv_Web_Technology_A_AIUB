<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\APIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/news/create',[APIController::class,'create']);
Route::get('/readall',[APIController::class,'readall']);
Route::post('/readone',[APIController::class,'readone']);
Route::post('/delete',[APIController::class,'delete']);
Route::post('/update',[APIController::class,'update']);
Route::post('/getdate',[APIController::class,'readdate']);
Route::post('/gettype',[APIController::class,'readtype']);
Route::post('/getdatetype',[APIController::class,'readdatetype']);