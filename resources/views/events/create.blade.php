@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">

        <h1>Criar evento</h1>

        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <div class="mb-3">
                    <label class="form-label" for="title">Evento:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="city">Cidade:</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="private">O evento é privado?</label>
                    <select name="private" id="private" class="form-select" required>
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="description">Descrição:</label>
                    <textarea rows="3" class="form-control" id="description" name="description" placeholder="Descrição do evento" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>

@endsection
