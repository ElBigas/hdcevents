{{-- Aqui é definido o layout principal --}}
@extends('layouts.main')

{{-- tiulo da pagina --}}
@section('title', 'produto')

{{-- conteudo da pagina --}}
@section('content')

    @if ($id !== null)
        <h1>Produto ID: {{ $id }}</h1>
    @else
        <h1>Não foi possível encontrar</h1>
    @endif

    <a href="/">voltar para home</a>

@endsection
