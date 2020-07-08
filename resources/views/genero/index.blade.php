<!DOCTYPE html>
<html>
<head>
    <title>Gêneros</title>
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

@foreach ($generos as $genero)
    <h1>Genero {{ $genero->id }}</h1>
    <ul>
        <li></li>
    </ul>
@endforeach
</body>
</html>