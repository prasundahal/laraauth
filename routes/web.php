<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ApplinkController;
use App\Http\Controllers\ServiceController;
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
Route::get('/addcv', function () {
    return view('welcome1');
});
// Route::get('success',[FrontController::class, 'index'])->name('front.index');
Route::get('/', [FrontController::class, 'index'])->name('front');
Route::post('add/store', [FrontController::class, 'store'])->name('frontcv.store');
Route::get('addcv', [FrontController::class, 'create'])->name('addcv');
// Route::resource('persons', PersonController::class);
Route::get('persons/create', [PersonController::class, 'create'])->name('cvs.create');
Route::post('persons/store', [PersonController::class, 'store'])->name('cvs.store');
Route::get('persons',[PersonController::class, 'index'])->name('cvs.index');
Route::delete('/persons/{id}',[PersonController::class, 'delete'])->name('cvs.destroy');
Route::get('/persons/{id}',[PersonController::class, 'show'])->name('cvs.show');
Route::put('/products/{id}',[PersonController::class, 'edit'])->name('cvs.edit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('banner', BannerController::class);
Route::get('banners/create', [BannerController::class, 'create'])->name('banners.create');
Route::post('banners/store', [BannerController::class, 'store'])->name('banners.store');
Route::get('banners',[BannerController::class, 'index'])->name('banners.index');
Route::get('banners/{id}',[BannerController::class, 'edit'])->name('banners.edit');
Route::put('/banners/update',[BannerController::class, 'update'])->name('banners.update');

Route::get('admin/settings', ['middleware' => 'auth','uses'=>'App\Http\Controllers\HomeController@getSettings'])->name('adminSettings');
Route::post('admin/updateSettings',['middleware' => 'auth','uses'=>'App\Http\Controllers\HomeController@updateSettings'])->name('updateSettings');


//Blog Post Routes
Route::get('admin/viewBlogs',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@index'])->name('viewblogs');
Route::get('admin/addBlog',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@add'])->name('addblog');
Route::post('admin/storeBlog',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@store'])->name('storeblog');
Route::get('admin/editBlog/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@edit'])->name('editblog');
Route::post('admin/updateBlog/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@update'])->name('updateblog');
Route::delete('admin/deleteBlog/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@delete'])->name('deleteblog');


//Blog Category Routes
Route::get('admin/blogCategory',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@allcategory'])->name('blogcategory');
Route::get('admin/addBlogCategory',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@addblogcategory'])->name('addblogcategory');
Route::get('admin/blogCategory/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@editcategory'])->name('editcategory');
Route::delete('admin/deleteBlogCategory/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@deletecategory'])->name('deleteblogcategory');
Route::post('admin/storeBlogCategory',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@storecategory'])->name('storeblogcategory');
Route::post('admin/updateBlogCategory/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\BlogController@updatecategory'])->name('updateblogcategory');


Route::get('/blog', 'App\Http\Controllers\FrontController@blog')->name('blog');
Route::get('/blog/cat/{id}', 'App\Http\Controllers\FrontController@blogcat')->name('blogcat');
Route::get('/blog/{id}', 'App\Http\Controllers\FrontController@readblog')->name('readblog');


//Marketing Routes
Route::get('admin/viewmarkets',['middleware' => 'auth','uses'=>'App\Http\Controllers\MarketController@index'])->name('viewmarkets');
Route::get('admin/addmarket',['middleware' => 'auth','uses'=>'App\Http\Controllers\MarketController@add'])->name('addmarket');
Route::post('admin/storemarket',['middleware' => 'auth','uses'=>'App\Http\Controllers\MarketController@store'])->name('storemarket');
Route::get('admin/editmarket/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\MarketController@edit'])->name('editmarket');
Route::post('admin/updatemarket/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\MarketController@update'])->name('updatemarket');
Route::delete('admin/deletemarket/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\MarketController@delete'])->name('deletemarket');

Route::get('/market', 'App\Http\Controllers\FrontController@market')->name('market');

//Services Routes
Route::get('admin/viewservices',['middleware' => 'auth','uses'=>'App\Http\Controllers\ServiceController@index'])->name('viewservices');
Route::get('admin/addservice',['middleware' => 'auth','uses'=>'App\Http\Controllers\ServiceController@add'])->name('addservice');
Route::post('admin/storeservice',['middleware' => 'auth','uses'=>'App\Http\Controllers\ServiceController@store'])->name('storeservice');
Route::get('admin/editservice/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\ServiceController@edit'])->name('editservice');
Route::post('admin/updateservice/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\ServiceController@update'])->name('updateservice');
Route::delete('admin/deleteservice/{id}',['middleware' => 'auth','uses'=>'App\Http\Controllers\ServiceController@delete'])->name('deleteservice');

Route::get('/services', 'App\Http\Controllers\FrontController@service')->name('services');
