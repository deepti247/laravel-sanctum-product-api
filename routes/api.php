<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Here is where you can register API routes for your application.
| These routes are loaded by the RouteServiceProvider and assigned
| to the "api" middleware group.
|
*/


/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
| These routes do not require authentication
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


/*
|--------------------------------------------------------------------------
| Protected Routes (Sanctum Authentication)
|--------------------------------------------------------------------------
| These routes require a valid Sanctum token
|
*/

Route::middleware('auth:sanctum')->group(function () {

    // Logout
    Route::post('/logout', [AuthController::class, 'logout']);

    // Product CRUD APIs
    Route::get('/products', [ProductController::class, 'index']);       // List products
    Route::post('/products', [ProductController::class, 'store']);      // Create product
    Route::get('/products/{id}', [ProductController::class, 'show']);   // Get single product
    Route::put('/products/{id}', [ProductController::class, 'update']); // Update product
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Delete product

});