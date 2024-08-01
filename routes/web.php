<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstanceController;
use App\Http\Controllers\Api\DolibarrController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instances/{instance}/login/{token}', [InstanceController::class, 'login'])->name('instances.login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Routes pour les instances
    Route::get('/instances', [InstanceController::class, 'index'])->name('instances.index');
    Route::get('/instances/create', [InstanceController::class, 'create'])->name('instances.create');
    Route::post('/instances', [InstanceController::class, 'store'])->name('instances.store');
    Route::get('/instances/{instance}/redirect', [InstanceController::class, 'redirect'])->name('instances.redirect');
    Route::delete('/instances/{instance}', [InstanceController::class, 'destroy'])->name('instances.destroy');

    // Route pour la connexion Dolibarr
    Route::post('/dolibarr/login', [DolibarrController::class, 'login'])->name('dolibarr.login');


});
