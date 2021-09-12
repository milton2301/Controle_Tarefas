@extends('layouts.layout') {{-- Estendendo layout de --}}

@section('title','DealerUp Dashboard') {{-- Pegando titulo dinamicamente --}}

@section('content') {{-- Sessão de programação --}}
{{-- CORPO DO WEB SITE --}}

<div class="container-fluid">
    <div id="tarefas-container" class="col-md-12">
        <h3>Usuários cadastrados</h3>
        <div id="cards-container" class="row">
            @foreach ($user as $users )
                <div class="card col-md-4">
                    <img src="/imagens/user.png" alt="{{$users->name }}">
                    <div id="card" class="card-body">
                        <p class="card-title">Nome: {{ $users->name}}</p>
                        <p class="card-title">ID: {{ $users->id}}</p>
                        <p class="card-title">Email: {{ $users->email }}</p>
                        <p class="card-date">Criação: {{ date( 'd/m/Y' , strtotime($users->created_at))}}</p>
                        <p class="card-date">Ultima atulização: {{ date( 'd/m/Y' , strtotime($users->updated_at))}}</p>
                        <a href="/users/edituser/{{ $users->id }}" class="btn btn-info edit-btn">Editar</a>
                        <form action="/users/{{ $users->id }}" method="POST">
                            @csrf
                            @method('DELETE') <br>
                            <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>

{{-- CORPO DO WEB SITE --}}
@endsection {{-- Fim da sessão de programação --}}
