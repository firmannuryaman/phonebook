<?php

use App\Http\Controllers\BookphoneController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/bookphone', [BookphoneController::class, 'index'])->name('bookphone');
    Route::get('/bookphone/create', [BookphoneController::class, 'create'])->name('bookphone.create');
    Route::post('/bookphone/store', [BookphoneController::class, 'store'])->name('bookphone.store');
    Route::delete('/bookphone/delete/{id}', [BookphoneController::class, 'delete'])->name('bookphone.delete');
    Route::get('/bookphone/edit/{id}', [BookphoneController::class, 'edit'])->name('bookphone.edit');
    Route::put('/bookphone/update/{id}', [BookphoneController::class, 'update'])->name('bookphone.update');
    Route::get('/bookphone/search', [BookphoneController::class, 'search'])->name('bookphone.search');
});

require __DIR__ . '/auth.php';
