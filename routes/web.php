<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Uma rota é uma definição que associa uma URL específica a uma ação ou recurso
| na aplicação. As rotas são definidas no arquivo 'web.php' e indicam como a
| aplicação deve responder a diferentes solicitações HTTP. Elas são fundamentais
| para mapear URLs para controladores e métodos específicos, organizando a
| lógica do aplicativo de maneira clara e estruturada.
|
*/

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create ', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id} ', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}',[EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');
