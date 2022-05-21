<?php
use App\Http\Controllers\AppController;
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

Route::get('/', [AppController::class,'welcome']);
Route::get('/message', [AppController::class,'mess']);
Route::get('/student', [AppController::class,'student']);
Route::get('/book', [AppController::class,'book']);
Route::get('/addbook', [AppController::class,'addbook']);
Route::get('/requests', [AppController::class,'requests']);
Route::get('/recommendations', [AppController::class,'recommendations']);
Route::get('/current', [AppController::class,'current']);
Route::get('/logout', [AppController::class,'logout']);









