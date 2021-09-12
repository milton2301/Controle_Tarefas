@extends('layouts.layout') {{-- Estendendo layout de --}}

@section('title','DealerUp Criação de tarefas') {{-- Pegando titulo dinamicamente --}}

@section('content') {{-- Sessão de programação --}}
{{-- CORPO DO WEB SITE --}}
<div class="container-fluid">

    <div id="tarefas-create-container" class="col-md-6 offset-md-3">
        <h1>Criar uma nova tarefa</h1>

        <form action="/tarefa" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Nome da tarefa</label>
                <input name="nome_tarefa" id="nome_tarefa"  class="form-control" placeholder="Nome da nova tarefa">
            </div>
            <div class="form-group">
                <label for="title">Descrição</label>
                <textarea name="descricao" id="descricao"  class="form-control" placeholder="Descrição da atividade"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Status da tarefa</label>
                <select name="status" id="status" class="form-control">
                    <option value="A fazer">A fazer</option>
                    <option value="Realizando">Realizando</option>
                </select>
            </div><br>
            <input type="submit" class="btn btn-primary" value="Criar tarefa">
        </form>
    </div>

{{-- CORPO DO WEB SITE --}}
@endsection {{-- Fim da sessão de programação --}}
