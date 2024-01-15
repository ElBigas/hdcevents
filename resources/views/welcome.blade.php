{{-- Aqui é definido o layout principal --}}
@extends('layouts.main')

{{-- tiulo da pagina --}}
@section('title', 'Home')

{{-- conteudo da pagina --}}
@section('content')

    <div id="search-container" class="col-md-12 pb-5">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
            <button type="submit" class="btn btn-primary mt-4">Pesquisar</button>
        </form>
    </div>

    <div id="events-container" class="col-md-12">

        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Próximos Eventos</h2>
            <p class="subtitle">Veja os próximos eventos</p>
        @endif

        <div id="cards-container" class="d-flex flex-wrap">
            @foreach ($events as $event)
                <div class="card col-md-3 ">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">

                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">100 participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach

            @if (count($events) == 0 && $search)
                <div>
                    <div><span class="fs-5">Nenhum resultado para "{{ $search }}"</span> <br /> Tente verificar a
                        ortografia ou usar termos mais genéricos</div>
                    <a href="/">Ver todos</a>
                </div>
            @elseif (count($events) == 0)
                <div>
                    <div>Não há eventos disponíveis</div>
                    <a href="/">Ver todos</a>
                </div>
            @endif
        </div>
    </div>

@endsection
