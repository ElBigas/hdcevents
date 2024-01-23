@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">

        <h1>Editando: {{ $event->title }} </h1>

        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">

                <div class="mb-3">
                    <label class="form-label" for="image">Imagem do evento:</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    <img src="/img/events/{{ $event->image }}" class="img-fluid img-thumbnail mt-2"
                        alt="Imagem atual do evento">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="title">Evento:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="city">Cidade:</label>
                    <input type="text" class="form-control" id="city" name="city"
                        value="{{ $event->city }}">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="date">Data:</label>
                    <input type="date" class="form-control" id="date" name="date"
                        value="{{ (new DateTime($event->date))->format('Y-m-d') }}">
                </div>


                <div class="mb-3">
                    <label class="form-label" for="private">O evento é privado?</label>
                    <select name="private" id="private" class="form-select">
                        <option value="0">Não</option>
                        <option value="1" {{ $event->private == '1' ? 'selected' : '' }}>Sim</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="description">Descrição:</label>
                    <textarea rows="3" class="form-control" id="description" name="description">{{ $event->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="description">Adicione itens de infraestrutura:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Cadeiras" name="itens[]" id="cadeiras">
                        <label class="form-check-label" for="cadeiras">
                            Cadeiras
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Open food" name="itens[]" id="food">
                        <label class="form-check-label" for="food">
                            Open food
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Brindes" name="itens[]" id="brindes">
                        <label class="form-check-label" for="brindes">
                            Brindes
                        </label>
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>

@endsection
