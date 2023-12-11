<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>

    <title>Laravel</title>

</head>

<body>
    <h1>Olá mundo!</h1>

    <a href="/contato">Contato</a>

    @if ($nome === 'manu')
        <p>{{ $nome }}</p>
    @else
        <p>Nome inválido, não é {{ $nome }}</p>
    @endif

    @foreach ($arr as $number)
        <p>{{ $number }} - {{ $loop->index }}</p>
    @endforeach

</body>

</html>
