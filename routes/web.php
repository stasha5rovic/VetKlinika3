<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VisitsController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users', [UsersController::class,'index']);
    Route::get('/users/{id}', [UsersController::class,'show']);
    Route::get('/users/create/user', [UsersController::class,'create']);
    Route::post('/users/create/user', [UsersController::class,'store']);
    Route::get('/users/{id}/edit/', [UsersController::class,'edit']);
    Route::put('/users/{id}/edit/', [UsersController::class,'update']);
    Route::delete('/users/{id}', [UsersController::class,'destroy']);


    Route::get('/animals', [AnimalsController::class,'index']);
    Route::get('/animals/{id}', [AnimalsController::class,'show']);
    Route::get('/animals/create/animal', [AnimalsController::class,'create']);
    Route::post('/animals/create/animal', [AnimalsController::class,'store']);
    /*Route::get('/animals/{id}/edit/', [AnimalsController::class,'edit']);
    Route::put('/animals/{id}/edit/', [AnimalsController::class,'update']);*/
    Route::delete('/animals/{id}', [AnimalsController::class,'destroy']);

    /*Route::get('/visits', [VisitsController::class,'index']);*/
    Route::get('/visits/{id}', [VisitsController::class,'show']);
    Route::get('/visits/create/visit', [VisitsController::class,'create']);
    Route::post('/visits/create/visit', [VisitsController::class,'store']);
    /*Route::get('/visits/{id}/edit/', [VisitsController::class,'edit']);
    Route::put('/visits/{id}/edit/', [VisitsController::class,'update']);
    Route::delete('/visits/{id}', [VisitsController::class,'destroy']);*/




});

require __DIR__.'/auth.php';
