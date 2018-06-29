@extends('layouts.app')

@section('title', 'Index')

@section('content')
  <div class="index">
    <!-- CAROUSEL -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('images/banners/GT2.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/banners/MAEVA.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/banners/PAUL-MCCARTNEY.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterioi</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>

<div class="librosDestacados">

    <section class="texto">
      <h2>Libros Destacados</h2>
    </section>

    <section class="destacados">
      <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/storage/books/{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$book->name}}</h5>
                <p class="card-text">{{$book->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Género: <a href="/categories/{{$book->category_id}}">{{$book->categories->name}}</a></li>
                <li class="list-group-item">Autor: <a href="/authors/{{$book->author_id}}">{{$book->author->name}}</a></li>
                <li class="list-group-item">ISBN: {{$book->isbn}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Comprar</a>
                <a href="/books/{{$book->id}}/edit" class="card-link">Editar</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/storage/books/{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$book->name}}</h5>
                <p class="card-text">{{$book->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Género: <a href="/categories/{{$book->category_id}}">{{$book->categories->name}}</a></li>
                <li class="list-group-item">Autor: <a href="/authors/{{$book->author_id}}">{{$book->author->name}}</a></li>
                <li class="list-group-item">ISBN: {{$book->isbn}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Comprar</a>
                <a href="/books/{{$book->id}}/edit" class="card-link">Editar</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/storage/books/{{$book->cover}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$book->name}}</h5>
                <p class="card-text">{{$book->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Género: <a href="/categories/{{$book->category_id}}">{{$book->categories->name}}</a></li>
                <li class="list-group-item">Autor: <a href="/authors/{{$book->author_id}}">{{$book->author->name}}</a></li>
                <li class="list-group-item">ISBN: {{$book->isbn}}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Comprar</a>
                <a href="/books/{{$book->id}}/edit" class="card-link">Editar</a>
            </div>
        </div>
    </section>
    </div>




  </div>
@endsection
