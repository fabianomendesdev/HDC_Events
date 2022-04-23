<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Algum título</h1>
        @if(10 > 15)
            <p>A condição é true</p>
        @endif

        <p>{{ $name }}</p>

        @if ($name == "Pedro")
            <p>O nome é Pedro!</p>
        @elseif($name == "Fabiano")
            <p>O nome é {{ $name }} e tem {{ $idade }} anos, e trabalha como {{ $profissao}}!</p>
        @else
            <p>O nome não é pedro!</p>
        @endif

        @for ($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if ($i == 2)
                <p>o i é 2</p>
            @endif
        @endfor

        @foreach ($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        @php
            $name = "João";
            echo $name;
        @endphp

        {{-- Este é um comtário no Blade --}}
    </body>
</html>
