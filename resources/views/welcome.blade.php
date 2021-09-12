@extends('layouts.layout') {{-- Estendendo layout de --}}

@section('title','DealerUp Dashboard') {{-- Pegando titulo dinamicamente --}}

@section('content') {{-- Sessão de programação --}}
{{-- CORPO DO WEB SITE --}}
<div class="container h-75 p-3">
    <div class=" col-md-8 offset-md-2">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="/imagens/dealerup.jpg" class="d-block w-100" alt="..." style="height:60vh">
                <div class="carousel-caption d-none d-md-block">
                <h5><strong> Gestã inteligente</strong></h5>
                <p><strong>Controle da palma da sua mão seus trabalho com facilidade.</strong></p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/imagens/organizacao.png" class="d-block w-100" alt="..." style="height:60vh">
                <div class="carousel-caption d-none d-md-block">
                <h5><strong>Mais organização</strong></h5>
                <p><strong>Organize todos seus afazeres com toda praticidade que oferecemos.</strong></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/imagens/produtividade.jpg" class="d-block w-100" alt="..." style="height:60vh">
                <div class="carousel-caption d-none d-md-block">
                <h5><strong>Mais produtividade</strong></h5>
                <p><strong>Aumente sua produtividade e se destaque.</strong></p>
                </div>
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
      </div>
    </div>
</div>
{{-- CORPO DO WEB SITE --}}
@endsection {{-- Fim da sessão de programação --}}
