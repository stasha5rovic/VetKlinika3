<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalsController;

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

Route::get('/animals', [AnimalsController::class,'index']);
Route::get('/animals/{id}', [AnimalsController::class,'show']);

Route::get('/animals/create', [AnimalsController::class,'create']);
Route::post('/animals/create', [AnimalsController::class,'store']);

Route::get('/animals/{id}/edit/', [AnimalsController::class,'edit']);
Route::put('/animals/{id}/edit/', [AnimalsController::class,'update']);

Route::delete('/animals/{id}', [AnimalsController::class,'destroy']);