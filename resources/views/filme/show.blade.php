<!DOCTYPE html>
<html>
<head>
    <title>Filme</title>
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

Filme {{ $filme->id }}
Título: {{ $filme->titulo }}
Resumo: {{ $filme->resumo }}
</body>
</html>