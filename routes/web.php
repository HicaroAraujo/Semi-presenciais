<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimeController;
use Illuminate\Support\Facades\Route;

Route::get('time', [TimeController::class, 'index'])
;
Route::get('time/create', [TimeController::class, 'create']);
Route::post('time', [TimeController::class, 'store']);
Route::get('time/{id}/edit', [TimeController::class, 'edit']);
Route::put('time/{id}', [TimeController::class, 'update']);
Route::delete('time/{id}', [TimeController::class, 'destroy']);


Route::get('coaches', [CoachController::class, 'index']);
Route::get('coaches/create', [CoachController::class, 'create']);
Route::post('coaches', [CoachController::class, 'store']);
Route::get('coaches/{id}/edit', [CoachController::class, 'edit']);
Route::put('coaches/{id}', [CoachController::class, 'update']);
Route::delete('coaches/{id}', [CoachController::class, 'destroy']);

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
