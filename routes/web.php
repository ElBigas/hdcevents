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
