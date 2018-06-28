@extends('layouts.app')
@section('content')

    <div class="col-md-6">
        <form action="/books/search" method="get" class="form-inline">
            <div class="form-group">
                <input type="text" class="form-control" name="s" placeholder="Buscar">
            </div>
            <div class="form group">
                <buttton class="btn btn-primary" type="submit">Buscar</buttton>
            </div>
        </form>
    </div>

    <div class="container card-container" >
        @foreach($books as $book)
            <div class="card" style="width: 18rem;">
            <a href="/books/{{$book->id}}"><img class="card-img-top" src="/storage/books/{{$book->cover}}" alt="Card image cap"></a>
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
                <form action="/books/{{ $book->id }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn btn-default" type="submit">Borrar</button>
                </form>
            </div>
            </div>
        @endforeach
    </div>
    {{$books->links()}}
@endsection
