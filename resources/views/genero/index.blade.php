@extends('layouts.app')

@section('title', "Gêneros")

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Gêneros</h1>
    </div>

    <hr class="my-0">
</div>

<div class="album text-muted">
    <div class="container">
        <div class="row">
            @foreach ($generos as $genero)
                <h1>Gênero: {{ $genero->id }}</h1>
                <ul>
                    <li>{{ $genero->genero }}</li>
                </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection