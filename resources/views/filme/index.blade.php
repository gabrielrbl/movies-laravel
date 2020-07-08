<!DOCTYPE html>
<html>
<head>
    <title>Filmes</title>
</head>

<body>
    @if (Route::has('login'))
    @auth
        <a href="{{ url('/home') }}">Início</a>
    @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Registrar</a>
    @endauth
@endif

@foreach ($filmes as $filme)
    <h1>Filme {{ $filme->id }}</h1>
    <ul>
        <li>Título: {{ $filme->titulo }}</li>
        <li>Resumo: {{ $filme->resumo }}</li>
    </ul>
@endforeach
</body>
</html>