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

Route::get('/',[PagesController::class,'home'])->name('root');

Route::get('/register',[PagesController::class,'create'])->name('register');
Route::post('/register',[PagesController::class,'createSubmit'])->name('registersubmit');

Route::get('/login',[PagesController::class,'login'])->name('login');
Route::post('/login',[PagesController::class,'loginSubmit'])->name('loginsubmit');

Route::get('/dashboard',[PagesController::class,'list'])->name('dashboard');
Route::get('/user/details/{id}',[PagesController::class,'details'])->name('userdetails');
Route::get('/logi',[PagesController::class,'logout'])->name('logout');