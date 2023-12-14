<?php

/*
 * Geralmente os controladores são usados para manipular os dados, são eles quem executam as regras de negócio.
 * Enviam e recebem dados e retornam estes dados para uma view ou redirecionam para outra rota.
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller {

    public function index() {

        $name = 'Emanuel';

        return view('welcome', ['name' => $name]);
    }

    public function create() {
        return view('events.create');
    }
}
