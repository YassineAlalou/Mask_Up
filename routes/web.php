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


Route::post('/order', [\App\Http\Controllers\OrderController::class, 'FormSubmit']);


Auth::routes();
Route::get('/order/delete/{id}', [\App\Http\Controllers\OrderController::class, 'deleteOrder']);
Route::get('/welcome', [App\Http\Controllers\OrderController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'ordersList'])->name('ordersList');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

