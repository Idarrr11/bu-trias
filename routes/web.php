<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/web', function () {
    return view('layanan1');
})->middleware(['auth', 'verified'])->name('web');

Route::get('/web1', function () {
    return view('layanan2');
})->middleware(['auth', 'verified'])->name('web1');

Route::get('/dashboard', function () {
    return view('website');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
