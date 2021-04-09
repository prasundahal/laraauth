<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\FrontController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontController::class, 'index'])->name('front');
Route::resource('persons', PersonController::class);
Route::get('persons/create', [PersonController::class, 'create'])->name('cvs.create');
Route::post('persons/store', [PersonController::class, 'store'])->name('cvs.store');
Route::get('persons',[PersonController::class, 'index'])->name('cvs.index');
Route::delete('/persons/{id}',[PersonController::class, 'delete'])->name('cvs.destroy');
Route::get('/persons/{id}',[PersonController::class, 'show'])->name('cvs.show');
Route::put('/products/{id}',[PersonController::class, 'edit'])->name('cvs.edit');
Route::post('add/store', [FrontController::class, 'store'])->name('frontcv.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
