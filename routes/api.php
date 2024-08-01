<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\Api\DolibarrController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route pour l'api
Route::get('/get-link', [LinkController::class, 'getLink']);

Route::post('/dolibarr/login', [DolibarrController::class, 'login'])->name('api.dolibarr.login');
