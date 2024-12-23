<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});


//user
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');


//pelanggan
// Route::resource('pelanggans', PelangganController::class);
Route::get('/pelanggans', [PelangganController::class, 'index'])->name('pelanggans.index');
Route::get('/pelanggans/create', [PelangganController::class, 'create'])->name('pelanggans.create');
Route::post('/pelanggans', [PelangganController::class, 'store'])->name('pelanggans.store');
Route::get('/pelanggans/{id}/edit', [PelangganController::class, 'edit'])->name('pelanggans.edit');
Route::put('/pelanggans/{id}', [PelangganController::class, 'update'])->name('pelanggans.update');
Route::delete('/pelanggans/{id}', [PelangganController::class, 'destroy'])->name('pelanggans.destroy');
Route::get('/pelanggans/{id}', [PelangganController::class, 'show'])->name('pelanggans.show');