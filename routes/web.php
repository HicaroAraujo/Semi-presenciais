<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Route;

Route::get('time', [TimeController::class, 'index'])
->middleware(['auth', 'verified'])->name('index-time');
Route::get('time/create', [TimeController::class, 'create'])
->middleware(['auth', 'verified'])->name('create-time');
Route::post('time', [TimeController::class, 'store'])
->middleware(['auth', 'verified'])->name('store-time');
Route::get('time/{id}/edit', [TimeController::class, 'edit'])
->middleware(['auth', 'verified'])->name('edit-time');
Route::put('time/{id}', [TimeController::class, 'update'])
->middleware(['auth', 'verified'])->name('update-time');
Route::delete('time/{id}', [TimeController::class, 'destroy'])
->middleware(['auth', 'verified'])->name('destroy-time');


Route::get('coaches', [CoachController::class, 'index'])
->middleware(['auth', 'verified'])->name('index-coaches');
Route::get('coaches/create', [CoachController::class, 'create'])
->middleware(['auth', 'verified'])->name('create-coaches');
Route::post('coaches', [CoachController::class, 'store'])
->middleware(['auth', 'verified'])->name('store-coaches');
Route::get('coaches/{id}/edit', [CoachController::class, 'edit'])
->middleware(['auth', 'verified'])->name('edit-coaches');
Route::put('coaches/{id}', [CoachController::class, 'update'])
->middleware(['auth', 'verified'])->name('update-coaches');
Route::delete('coaches/{id}', [CoachController::class, 'destroy'])
->middleware(['auth', 'verified'])->name('destroy-coaches');

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
});

require __DIR__.'/auth.php';
