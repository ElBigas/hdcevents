<?php

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