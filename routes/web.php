<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/destinations', [DestinationController::class, 'index']);
    Route::post('/destinations/submit', [DestinationController::class, 'submit']);
    Route::get('/destinations/edit/{id}', [DestinationController::class, 'edit']);
    Route::put('/destinations/update/{id}', [DestinationController::class, 'update']);
    Route::delete('/destinations/delete/{id}', [DestinationController::class, 'delete']);
});