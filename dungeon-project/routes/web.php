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

//page d'accueil
Route::get('/', function () {
    return view('welcome');
});
Route::get('/{id}', function($id) {
    return view('invite');
})->where('id', '[0-9]+');

// Route::resource('/personnage', GameController::class);
Route::get('/personnage', [GameController::class, 'index'])->name('personnage.index');
Route::get('/personnage/create', [GameController::class, 'create'])->name('personnage.create')->where('id', '[0-9]+');
Route::post('/personnage', [GameController::class, 'store'])->name('personnage.store');
Route::get('/personnage/{id}', [GameController::class, 'show'])->name('personnage.show');
Route::get('/personnage/{id}/edit', [GameController::class, 'edit'])->name('personnage.edit');
Route::put('/personnage/{id}', [GameController::class, 'update'])->name('personnage.update');
Route::delete('/personnage/{id}', [GameController::class, 'destroy'])->name('personnage.destroy');
Route::get('/personnage/factory', [GameController::class, 'factory']);

//route invite
Route::get('/personnage/invite', [InviteController::class, 'invite'])->name('personnage.invite');
Route::post('/invite', [InviteController::class, 'process'])->name('process');
Route::get('/accept/{token}', [InviteController::class, 'accept'])->name('accept');


//route auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
