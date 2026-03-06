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

Route::get('/concept', function () {
    return view('concept');
});

Route::get('/livraison', function () {
    return view('livraison');
});

Route::get('/abonnements', function () {
    return view('abonnements');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->get('/demo-subscribe1', function () {
    $user = auth()->user();
    $user->is_subscribed = true;
    $user->abonnement="Economique";
    $user->save();

    return redirect('/')->with('success', 'Vous êtes maintenant abonné !');
});
Route::middleware('auth')->get('/demo-subscribe2', function () {
    $user = auth()->user();
    $user->is_subscribed = true;
    $user->abonnement="Classique";
    $user->save();

    return redirect('/')->with('success', 'Vous êtes maintenant abonné !');
});
Route::middleware('auth')->get('/demo-subscribe3', function () {
    $user = auth()->user();
    $user->is_subscribed = true;
    $user->abonnement="Premium";
    $user->save();

    return redirect('/')->with('success', 'Vous êtes maintenant abonné !');
});
Route::middleware('auth')->post('/demo-desabo', function () {
    $user = auth()->user();
    $user->is_subscribed = false;
    $user->abonnement=Null;
    $user->save();

    return redirect('/')->with('success', 'Vous êtes maintenant désabonné !');
});
require __DIR__.'/auth.php';
