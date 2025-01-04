<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\GameController;

Route::get('/', [HomepageController::class, 'index']);
Route::get('/games', [GameController::class, 'index']);
Route::get('/games/1', [GameController::class, 'view']);
