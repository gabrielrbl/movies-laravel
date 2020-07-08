<!DOCTYPE html>
<html>
<head>
    <title>Gênero</title>
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

Gênero {{ $genero->id }}
</body>
</html>