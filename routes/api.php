<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::resource('products',ProductController::class);
//public

Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
Route::get('products/search/{name}',[ProductController::class,'search']);
Route::get('/products',[ProductController::class, 'index']);
Route::get('/products/{id}',[ProductController::class, 'show']);

//protected routes
Route::group(['middleware'=>['auth:sanctum']], function() {
    Route::post('/products',[ProductController::class, 'store']);
    Route::post('/logout',[AuthController::class, 'logout']);
    Route::put('/products/{id}',[ProductController::class, 'show']);
    Route::delete('/products/{id}',[ProductController::class, 'delete']);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
