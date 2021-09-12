@extends('layouts.layout') {{-- Estendendo layout de --}}

@section('title','DealerUp Editando: ' . $user->name) {{-- Pegando titulo dinamicamente --}}

@section('content') {{-- Sessão de programação --}}
{{-- CORPO DO WEB SITE --}}
<div class="container-fluid">

    <div id="tarefas-create-container" class="col-md-6 offset-md-3">
        <h1>{{ $user->name }}</h1>

        <form action="/users/update/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Nome do usuário</label>
                <input name="name" id="name"  class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="title">Email</label>
                <input name="email" id="email"  class="form-control" value="{{ $user->email }}">
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Atualizar">
        </form>
    </div>

{{-- CORPO DO WEB SITE --}}
@endsection {{-- Fim da sessão de programação --}}
