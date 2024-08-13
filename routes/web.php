<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ServantsController;
 use App\Http\Controllers\PaymentController;
 use App\Http\Controllers\SalesController;
 use App\Http\Controllers\ReportController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes(["register" => true, "reset" => false]);


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'index']);
//Route::resource('/home/categories', [CategoryController::class, 'index']);
 Route::resource('categories', CategoryController::class);
 Route::resource('menus', MenuController::class);
 Route::resource('tables', TableController::class);
 Route::resource('servants', ServantsController::class);
 Route::resource('sales', SalesController::class);
 
Route::resource('reports', ReportController::class)->only([
    'index'
]);
Route::post('reports/generate', [ReportController::class, 'generate'])->name('reports.generate');
Route::post('reports/export', [ReportController::class, 'export'])->name('reports.export');

//Route::post('reports/generate', 'ReportController@generate')->name("reports.generate");
//Route::post('reports/export', 'ReportController@export')->name("reports.export");



Route::resource('payments', PaymentController::class)->only([
    'index'
]);
//Route::resource('/categories', [CategoryController::class]);
//Route::resource('categories', 'CategoryController');

//Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('categories', 'CategoryController');
//Route::get('payments', 'PaymentController@index')->name("payments.index");
