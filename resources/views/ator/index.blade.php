<!DOCTYPE html>
<html>
<head>
    <title>Atores</title>
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

@foreach ($atores as $ator)
    <h1>Ator: {{ $ator->id }}</h1>
    <ul>
        <li>{{ $ator->nome }}</li>
    </ul>
@endforeach
</body>
</html>