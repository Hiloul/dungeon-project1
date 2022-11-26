<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/{id}', function($id) {
    //
})->where('id', '[0-9]+');

// Route::resource('/trip', TripController::class);
Route::get('/trip/create', [GameController::class, 'create'])->name('trip.create');
Route::post('/trip', [GameController::class, 'store'])->name('trip.store');

