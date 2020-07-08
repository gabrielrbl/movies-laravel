<!DOCTYPE html>
<html>
<head>
    <title>Ator</title>
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

Ator {{ $ator->id }}
</body>
</html>