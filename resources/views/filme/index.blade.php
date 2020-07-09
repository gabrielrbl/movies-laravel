@extends('layouts.app')

@section('title', "Filmes")

@section('content')
<div class="container marketing">
    @foreach ($filmes as $filme)
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">{{ $filme->titulo }} <span class="text-muted">Ano</span></h2>
                <p class="lead">{{ $filme->resumo }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        
                        <a href="{{ route('filme.show', $filme->id) }}">
                            <button type="button" class="btn btn-sm btn-outline-primary">Visualizar</button>
                        </a>
                        <a href="{{ route('filme.edit', $filme->id) }}">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                        </a>
                    </div>
                    
                    <form action="{{ route('filme.destroy', $filme->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-sm btn-outline-danger">Remover</button>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500">
                    <title>{{ $filme->titulo }}</title>
                    <rect width="100%" height="100%" fill="#eee"/>
                    <image href="https://i.pinimg.com/564x/72/47/7b/72477b799f9d9df03b46b5b7a74f428b.jpg" width="100%" height="100%" >
                    <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">
    @endforeach
</div>
@endsection