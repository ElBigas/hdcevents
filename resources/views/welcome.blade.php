{{-- Aqui é definido o layout principal --}}
@extends('layouts.main')

{{-- tiulo da pagina --}}
@section('title', 'Home')

{{-- conteudo da pagina --}}
@section('content')

    <h1>Bem vindo ao HDC Events, {{ $name }}!</h1>

@endsection
