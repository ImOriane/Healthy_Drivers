<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;
use App\Http\Livewire\ReservationForm;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/app.reservation', function () {
    return view('reservation');
});

Route::get('/menus', [MenuController::class, 'index']);
Route::get('/menus/{slug}', [MenuController::class, 'show'])->name('menu.show');

Route::get('/livraisons', function () {
    return view('livraisons');
});

Route::get('/abonnements', function () {
    return view('abonnements');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
