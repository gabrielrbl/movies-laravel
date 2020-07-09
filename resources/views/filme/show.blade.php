@extends('layouts.app')

@section('title', "{$filme->titulo}")

@section('content')
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">{{ $filme->titulo }}</h1>
        <p class="lead my-3">{{ $filme->resumo }}</p>
        <p class="lead">
            @foreach ($filme->generos as $genero)
                <span class="lead font-weight-bold">
                    <a href="{{ route('genero.show', $genero->id) }}" class="text-decoration-none">{{ $genero->genero }}</a>
                </span> |
            @endforeach
        </p>
        <p class="display-5 mb-0 font-weight-bold">Elenco</p>
        @foreach ($filme->atores as $ator)
            <p class="lead mb-0">
                <a href="{{ route('ator.show', $ator->id) }}" class="text-decoration-none">{{ $ator->nome }}</a>
            </p>
        @endforeach
    </div>
</div>
@endsection