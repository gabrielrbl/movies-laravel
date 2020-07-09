@extends('layouts.app')

@section('title', "Atores")

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Atores<h1>
    </div>

    <hr class="my-0">
</div>

<div class="container marketing">
    <div class="row">
        @foreach ($atores as $ator)
            <div class="col-lg-4">
                <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <title>{{ $ator->nome }}</title>
                    <rect width="100%" height="100%" fill="#777"/>
                    <text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
                    <image href="https://img4cf.b8cdn.com/images/people/no-photo-m-140x140.png" width="100%" height="100%" />
                </svg>
                <h2>{{ $ator->nome }}</h2>
                <p>
                    <a class="btn btn-secondary" href="{{ route('ator.show', $ator->id) }}" role="button">Ver filmes &raquo;</a>
                </p>
            </div>
        @endforeach
    </div>
</div>
@endsection