<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstanceController;

Route::get('/', function () {
    return view('welcome');
});

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
    

});
