<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $nome = 'Emanuel';

    $arr = [10, 20, 30, 40, 50];

    return view('welcome', ['nome' => $nome], ['arr' => $arr]);
});

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
