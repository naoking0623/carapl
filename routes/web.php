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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CarController;
Route::controller(CarController::class)->group(function () {
     Route::get('index', 'index');
     Route::get('company', 'company');
});    
Route::controller(CarController::class)->middleware('auth')->group(function () {   
    Route::get('yoyaku/add', 'add');
    Route::post('yoyaku/add', 'yoyakucreate')->name('yayakucreate');
});    

Route::controller(CarController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {   
    Route::get('car/create', 'add')->name('car.add');
    Route::get('stock/create', 'create');
    Route::post('stock/create', 'create')->name('stock.create');
});    

use App\Http\Controllers\Admin\UserController;
Route::controller(UserController::class)->prefix('admin')->group(function() {
    Route::get('user/create', 'add');
    Route::get('user/edit', 'add');
    
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(CarController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    
});