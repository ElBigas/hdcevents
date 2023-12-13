{{-- Aqui é definido o layout principal --}}
@extends('layouts.main')

{{-- tiulo da pagina --}}
@section('title', 'produtos')

{{-- conteudo da pagina --}}
@section('content')

    <h1>Tela de produtos</h1>

    @if ($search !== null)
        <h2>Resultados para: <span class="text-primary">"{{ $search }}"</span></h2>
    @endif

    <a href="/">voltar para home</a>

@endsection
