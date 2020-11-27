<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;

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

Route::get('/admin', function () {
    return view('admin', ['name' => 'James']);
});

Route::get('/trip', function () {
    return view('trip', ['trips' => []]);
});
Route::post('/trip', [TripController::class, 'getList']);