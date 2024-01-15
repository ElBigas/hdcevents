<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create ', [EventController::class, 'create']);
Route::get('/events/{id} ', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
