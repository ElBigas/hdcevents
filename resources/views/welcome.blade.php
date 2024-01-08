{{-- Aqui é definido o layout principal --}}
@extends('layouts.main')

{{-- tiulo da pagina --}}
@section('title', 'Home')

{{-- conteudo da pagina --}}
@section('content')

    <div id="search-container" class="col-md-12 pb-5">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        <h2>Próximos Eventos</h2>
        <p>Veja os próximos eventos</p>

        <div id="cards-container" class="d-flex flex-wrap gap-3">
            @foreach ($events as $event)
                <div class="card col-md-3 ">
                    <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">

                    <div class="card-body">
                        <p class="card-date">05/12/2024</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">100 participantes</p>
                        <a href="#" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
