<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create ', [EventController::class, 'create']);

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produtos', function () {

    $search = request('search');

    return view('produtos', ['search'=> $search]);
});

//pode ou não fornecer um valor para o parâmetro ID
Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('produto', ['id'=> $id]);
});
