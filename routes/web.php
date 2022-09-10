<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/product-list',[ProductController::class,'show']);
// Route::post('/product-store',[ProductController::class,'store'])->name('product.store');
// Route::get('/product-entry',[ProductController::class,'create']);

Route::group(['middleware' =>'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/product-list',[ProductController::class,'show'])->name('product.list');
    Route::post('/product-store',[ProductController::class,'store'])->name('product.store');
    Route::get('/product-entry',[ProductController::class,'create']);
    Route::get('/product-edit/{id}',[ProductController::class,'edit']);
    Route::post('/product-update',[ProductController::class,'update'])->name('product.update');
    Route::post('/product-delete',[ProductController::class,'destroy'])->name('product.delete');
});