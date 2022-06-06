<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/',[PagesController::class,'list'])->name('root');
Route::get('/addproduct',[PagesController::class,'create'])->name('addproduct');
Route::post('/addproduct',[PagesController::class,'createSubmit'])->name('addproductsub');
Route::get('/details/{id}',[PagesController::class,'details'])->name('productdetails');