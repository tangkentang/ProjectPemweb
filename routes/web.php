<?php

use App\Http\Controllers\admin1Controller;
use App\Http\Controllers\adminController;
use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::resource('admin1',admin1Controller::class);
Route::get('/message', [App\Http\Controllers\messageController::class, 'index'])->name('message');
// Route::get('/admin-login', [App\Http\Controllers\loginController::class, 'index'])->name('admin-login');
// Route::get('/create', [App\Http\Controllers\createController::class, 'index'])->name('create');
// Route::get('/login', 'AuthController@showLoginForm')->name('login');
// Route::post('/login', 'AuthController@login');
// Route::get('/login', [App\Http\Controllers\loginController::class, 'index'])->name('login');
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

