<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\CarController as PublicCarController;
Route::controller(PublicCarController::class)->group(function () {
     Route::get('/', 'index');
     Route::get('company', 'company');
     Route::get('index', 'index');
});    
Route::controller(PublicCarController::class)->middleware('auth')->group(function () {   
    Route::get('yoyaku/add', 'add');
    Route::post('yoyaku/create', 'create')->name('yayaku.create');
    Route::post('yoyaku/check', 'check')->name('yayakucheck');
    
});    

use App\Http\Controllers\Admin\CarController;
Route::controller(CarController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {   
    Route::get('stock/create', 'add')->name('car.add');
    Route::post('stock/create', 'stock')->name('stock.create');
    // Route::get('stock/list', 'stocklist')->name('stocklist');
});    

use App\Http\Controllers\Admin\StockController;
Route::controller(StockController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {   
    // Route::get('stock/create', 'add')->name('car.add');
    // Route::post('stock/create', 'stock')->name('stock.create');
    Route::get('stock/list', 'stocklist')->name('stock.list');
    Route::get('stock/delete', 'delete')->name('stock.delete');
    Route::post('stock/list', 'stocklist')->name('stock.list');
    // Route::post('stock/create', 'stock')->name('stock.create');
});    



use App\Http\Controllers\Admin\UserController;
Route::controller(UserController::class)->prefix('admin')->group(function() {
    Route::get('user/create', 'add');
    Route::get('user/edit', 'add');
    
});
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// Route::controller(CarController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    
// });