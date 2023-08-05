<?php

use App\Http\Controllers\Api\ProductsCartController;
use App\Http\Controllers\Api\ProductsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/{product}', [ProductsController::class, 'show']);

Route::get('/cart', [ProductsCartController::class, 'index']);
Route::post('/cart', [ProductsCartController::class, 'store']);
Route::delete('/cart/{productId}', [ProductsCartController::class, 'destroy']);
Route::delete('/cart', [ProductsCartController::class, 'destroyAll']);
