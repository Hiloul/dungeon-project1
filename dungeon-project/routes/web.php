<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
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
Route::get('/{id}', function($id) {
    //
})->where('id', '[0-9]+');

Route::resource('/personnage', GameController::class);
Route::get('/personnage', [GameController::class, 'index'])->name('personnage.index');
Route::get('/personnage/create', [GameController::class, 'create'])->name('personnage.create')->where('id', '[0-9]+');
Route::post('/personnage', [GameController::class, 'store'])->name('personnage.store');
Route::get('/personnage/{id}', [GameController::class, 'show'])->name('personnage.show');
Route::get('/personnage/invite', [GameController::class, 'invite'])->name('personnage.invite');
Route::get('/personnage/{id}/edit', [GameController::class, 'edit'])->name('personnage.edit');
Route::put('/personnage/{id}', [GameController::class, 'update'])->name('personnage.update');
Route::delete('/personnage/{id}', [GameController::class, 'destroy'])->name('personnage.destroy');
Route::get('/personnage/factory', [GameController::class, 'factory']);

Route::get('invite', 'InviteController@invite')->name('invite');
Route::post('invite', 'InviteController@process')->name('process');
// {token} is a required parameter that will be exposed to us in the controller method
Route::get('accept/{token}', 'InviteController@accept')->name('accept');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
