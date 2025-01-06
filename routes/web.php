<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\TransactionController;

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
Route::get('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/booking', [DestinationController::class, 'booking']);
Route::get('/destinations', [DestinationController::class, 'index_user']);
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::get('/checkout-sukses', [CheckoutController::class, 'sukses']);
// Route::post('/destinations/search', [DestinationController::class, 'search']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/destinations', [DestinationController::class, 'index']);
    Route::post('/destinations/submit', [DestinationController::class, 'submit']);
    Route::get('/destinations/edit/{id}', [DestinationController::class, 'edit']);
    Route::put('/destinations/update/{id}', [DestinationController::class, 'update']);
    Route::delete('/destinations/delete/{id}', [DestinationController::class, 'delete']);
    
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::get('/transactions/detail', [TransactionController::class, 'detail']);
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/detail', [UserController::class, 'detail']);

});