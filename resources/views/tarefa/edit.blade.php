@extends('layouts.layout') {{-- Estendendo layout de --}}

@section('title','DealerUp Editando: ' .$tarefas->nome_tarefa) {{-- Pegando titulo dinamicamente --}}

@section('content') {{-- Sessão de programação --}}
{{-- CORPO DO WEB SITE --}}
<div class="container-fluid">

    <div id="tarefas-create-container" class="col-md-6 offset-md-3">
        <h1>{{ $tarefas->nome_tarefa }}</h1>

        <form action="/tarefa/update/{{ $tarefas->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Responsavél</label>
                <input name="" id=""  class="form-control" value="{{ $criadorTarefa['name'] }}">
            </div>
            <div class="form-group">
                <label for="title">ID do Responsavél</label>
                <select class="form-control" name="user_id" id="user_id" class="form-group">
                   @foreach ( $usuarios as $usuarios )
                        <option value="{{ $usuarios->id }}">{{ $usuarios->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="title">Nome da tarefa</label>
                <input name="nome_tarefa" id="nome_tarefa"  class="form-control" value="{{ $tarefas->nome_tarefa }}">
            </div>
            <div class="form-group">
                <label for="title">Descrição</label>
                <textarea name="descricao" id="descricao"  class="form-control">{{ $tarefas->descricao }}</textarea>
            </div>
            <div class="form-group">
                <label for="title">Status da tarefa</label>
                <select name="status" id="status" class="form-control">
                    <option value="{{ $tarefas->status }}">{{ $tarefas->status }}</option>
                    @if ($tarefas->status != 'A fazer')
                        <option value="A fazer">A fazer</option>
                    @elseif($tarefas->status != 'Realizando')
                        <option value="Realizando">Realizando</option>
                    @endif
                </select>
            </div><br>
            <input type="submit" class="btn btn-primary" value="Atualizar">
        </form>
    </div>

{{-- CORPO DO WEB SITE --}}
@endsection {{-- Fim da sessão de programação --}}
