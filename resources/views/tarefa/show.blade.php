@extends('layouts.layout') {{-- Estendendo layout de --}}

@section('title', 'Detalhes') {{-- Pegando titulo dinamicamente --}}

@section('content') {{-- Sessão de programação --}}

    <div class="col-md-10 offset-md-1">
        <h1 id="show-details" >Detalhes sobre a tarefa</h1>
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/imagens/imagem.jpg" alt="{{ $tarefas->nome_tarefa }} " style="width: 100%; height: 100%; border: 1px solid #ccc;">
            </div>
            <div id="info-container" class="col-md-6">
                <h3>Nome: {{ $tarefas->nome_tarefa }}</h3>
                <h3>Responsável: {{ $criadorTarefa['name'] }}</h3>
                <h3>Status: {{ $tarefas->status }}</h3>
                <a href="/" class="btn btn-primary">Voltar</a>
                <a href="/tarefa/edit/{{ $tarefas->id }}" class="btn btn-info edit-btn">Editar</a>
                <form action="/tarefa/{{ $tarefas->id }}" method="POST">
                    @csrf
                    @method('DELETE') <br>
                    <button type="submit" class="btn btn-danger delete-btn">Finalizar</button>
                </form>
            </div>
            <h3>Descrição:</h3>
            <p>{{ $tarefas->descricao }}</p>
        </div>
    </div>


@endsection {{-- Fim da sessão de programação --}}

