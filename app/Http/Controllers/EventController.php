<?php

/*
 * Geralmente os controladores são usados para manipular os dados, são eles quem executam as regras de negócio.
 * Enviam e recebem dados e retornam estes dados para uma view ou redirecionam para outra rota.
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller {

    public function index() {

        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create() {
        return view('events.create');
    }
}
