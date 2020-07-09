@extends('layouts.app')

@section('title', 'Cadastrar Novo Filme')

@section('content')
<style>
    .form-signin {
        width: 100%;
        max-width: 400px;
        padding: 15px;
        margin: auto;
    }
    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus { z-index: 2; }
</style>

<div class="row">
    <div class="container d-flex justify-content-center">
        <form action="{{ route('filme.store') }}" method="post" class="form-signin" enctype="multipart/form-data">
            <img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Cadastrar Novo filme</h1>

            @include('includes.alerts')
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" id="inputTitle" name="titulo" placeholder="Título">
                <label for="inputTitle" class="sr-only">Título</label>
            </div>
            <div class="form-group">
                <textarea name="resumo" class="form-control" id="inputResume" rows="7" placeholder="Resumo"></textarea>
                <label for="inputResume" class="sr-only">Resumo</label>
            </div>
            <div class="form-group">
                <button class="btn btn-lg btn-success btn-block" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
