@extends('layouts.blog.template')
@section('title', "Blog KodaX | Home")
@section('content')
<div id="carouselExample" class="carousel slide">
<div class="carousel-inner">
    <div class="carousel-item active">
    <img src="https://www.green4t.com/wp-content/uploads/2023/07/tendencias-em-tecnologia-para-2023-o-que-ja-vingou-o-que-ficou-pelo-caminho-e-novas-apostas.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://www.euax.com.br/wp-content/uploads/2020/03/O-que-%C3%A9-Gest%C3%A3o-da-Tecnologia-da-Informa%C3%A7%C3%A3o-Entenda-como-a-TI-pode-ser-uma-aliada-estrat%C3%A9gica-do-neg%C3%B3cio.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="https://alkasoft.com.br/wp-content/uploads/2017/09/imagem125_2-700x321.jpg" class="d-block w-100" alt="...">
    </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
</button>
</div>
<div class="row">
    <div class="col-12 text-center text-purple my-4">
        <h1 class="fw-bold">DESTAQUES</h1>
    </div>
</div>
<div class="row">
    @foreach ($articles as $article)
    <div class="col-10 col-md-4 mx-auto">
        <div class="card">
            <img src="https://alkasoft.com.br/wp-content/uploads/2017/09/imagem125_2-700x321.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title text-purple fw-semibold">{{$article->title}}</h5>
            <p class="card-text">{{$article->preview}}</p>
            <a href="/artigo/{{$article->id}}" class="btn btn-purple d-flex justify-content-center">VER</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection