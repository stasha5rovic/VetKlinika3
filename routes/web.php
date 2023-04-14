<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UsersController::class,'index']);
Route::get('/users/{id}', [UsersController::class,'show']);
Route::get('/users/create/user', [UsersController::class,'create']);
Route::post('/users/create/user', [UsersController::class,'store']);
Route::get('/users/{id}/edit/', [UsersController::class,'edit']);
Route::put('/users/{id}/edit/', [UsersController::class,'update']);
Route::delete('/users/{id}', [UsersController::class,'destroy']);


Route::get('/animals', [AnimalsController::class,'index']);
Route::get('/animals/{id}', [AnimalsController::class,'show']);
Route::get('/animals/create', [AnimalsController::class,'create']);
Route::post('/animals/create', [AnimalsController::class,'store']);
Route::get('/animals/{id}/edit/', [AnimalsController::class,'edit']);
Route::put('/animals/{id}/edit/', [AnimalsController::class,'update']);
Route::delete('/animals/{id}', [AnimalsController::class,'destroy']);