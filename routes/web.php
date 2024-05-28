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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/service-iphone', [App\Http\Controllers\ServiceController::class, 'index'])->name('service-iphone');
Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-us');
Route::get('/track-order', [App\Http\Controllers\TrackController::class, 'index'])->name('track-order');
Route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('admin');
Route::get('/create', [App\Http\Controllers\createController::class, 'index'])->name('create');