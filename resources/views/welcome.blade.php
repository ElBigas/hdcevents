{{-- Aqui é definido o layout principal --}}
@extends('layouts.main')

{{-- tiulo da pagina --}}
@section('title', 'Home')

{{-- conteudo da pagina --}}
@section('content')

    <h1>Bem vindo ao HDC Events!</h1>

    @foreach ($events as $event)
        <p>{{ $event->title }} - {{ $event->description }} </p>
    @endforeach

@endsection
