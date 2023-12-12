<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>

    <title>HDC Events - @yield('title')</title>

</head>

<body>

    {{-- @yield é usada no Laravel para definir uma seção em um arquivo de
        template Blade. Uma seção é um espaço reservado onde o conteúdo pode ser
        inserido dinamicamente de outras views. --}}
    @yield('content')

    <footer>
        <p>HDC Events &copy; 2023</p>
    </footer>

</body>

</html>
