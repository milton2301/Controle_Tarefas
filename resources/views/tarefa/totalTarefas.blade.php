@extends('layouts.layout') {{-- Estendendo layout de --}}

@section('title','DealerUp Dashboard') {{-- Pegando titulo dinamicamente --}}

@section('content') {{-- Sessão de programação --}}
{{-- CORPO DO WEB SITE --}}

@guest
<h1>Você não está autenticado</h1>
@endguest
@auth
<div class="container-fluid">
    <div id="tarefas-container" class="col-md-12">
        <h3>Todas as tarefas a realizar</h3>
        <div id="cards-container" class="row">
            @foreach ($tarefas as $tarefas )
                <div class="card col-md-4">
                    <img src="/imagens/imagem.jpg" alt="{{$tarefas->nome_tarefa }}">
                    <div id="card" class="card-body">
                        <p class="card-title">ID do responsável: {{ $tarefas->user_id}}</p>
                        <p class="card-title">Tarefa: {{ $tarefas->nome_tarefa}}</p>
                        <p class="card-title">Status: {{ $tarefas->status }}</p>
                        <p class="card-date">Criação: {{ date( 'd/m/Y' , strtotime($tarefas->created_at))}}</p>
                        <p class="card-date">Ultima atulização: {{ date( 'd/m/Y' , strtotime($tarefas->updated_at))}}</p> {{-- Link para ver detalhes da tarefa --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endauth
{{-- CORPO DO WEB SITE --}}
@endsection {{-- Fim da sessão de programação --}}
