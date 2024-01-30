@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">

        <h1>Criar evento</h1>

        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

                <div class="mb-3">
                    <label class="form-label" for="image">Imagem do evento:</label>
                    <input type="file" class="form-control-file" id="image" name="image" required>
                </div>

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
                    <label class="form-label" for="date">Data:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
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
                    <textarea rows="3" class="form-control" id="description" name="description" placeholder="Descrição do evento"
                        required></textarea>
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
