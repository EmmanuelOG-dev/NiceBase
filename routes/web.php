<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\OriginController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StatusController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sales/report', [SaleController::class, 'report'])->name('sales.report')->middleware('auth');

Route::resource('categories', CategoryController::class)->middleware('auth');
Route::resource('brands', BrandController::class)->middleware('auth');
Route::resource('references', ReferenceController::class)->middleware('auth');
Route::resource('motorcycles', MotorcycleController::class)->middleware('auth');
Route::resource('sellers', SellerController::class)->middleware('auth');
Route::resource('origins', OriginController::class)->middleware('auth');
Route::resource('costumers', CostumerController::class)->middleware('auth');
Route::resource('sales', SaleController::class)->middleware('auth');
Route::resource('statuses', StatusController::class)->middleware('auth');
