<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class, 'index'] );

Route::get('/admin',[AdminController::class, 'index'] );

Route::post('/admin', [AdminController::class, 'postNewTrip']);

Route::get('/trip', function () {
    return view('trip', ['trips' => []]);
});
Route::post('/trip', [TripController::class, 'getList']);