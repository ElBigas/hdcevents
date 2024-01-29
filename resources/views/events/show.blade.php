@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">

        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>

                <p class="event-city"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        style="margin-right: 5px;" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg>{{ $event->city }}</p>
                <p class="event-date"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        style="margin-right: 5px;" fill="currentColor" class="bi bi-calendar-date" viewBox="0 0 16 16">
                        <path
                            d="M6.445 11.688V6.354h-.633A13 13 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23" />
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                    </svg>{{ date('d/m/Y', strtotime($event->date)) }}</p>

                <p class="events-participants"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        style="margin-right: 5px;" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 1 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        <path
                            d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                    </svg> {{ $event->users->count() }} participantes</p>
                <p class="event-private">
                    @if ($event->private)
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path
                                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                        </svg>
                        Privado
                    @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-unlock-fill" viewBox="0 0 16 16">
                            <path
                                d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2" />
                        </svg>
                        Público
                    @endif
                </p>
                <p class="event-owner">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                    Dono do evento:
                    {{ $eventOwner['name'] }}
                </p>
                <h3>O evento conta com:</h3>
                <ul class="event-itens">
                    @foreach ($event->itens as $item)
                        <li>
                            <p>
                                <span>
                                    {{ $item }}
                                </span>
                            </p>
                        </li>
                    @endforeach
                </ul>
                @if (!$hasUserJoined)
                <form action="/events/join/{{ $event->id }}" method="POST">
                    @csrf
                    <a href="" class="btn btn-primary" id="event-submit"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Confirmar presença
                    </a>
                </form>
                @else
                <a href="" class="btn btn-primary disabled" id="event-submit">
                    Você já participa deste evento
                </a>
                @endif

            </div>
            <div class="col-md-12" id="event-description">
                <h3>Sobre o evento:</h3>
                <p class="event-description">
                    {{ $event->description }}
                </p>
            </div>
        </div>

    </div>

@endsection
