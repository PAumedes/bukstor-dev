@extends('layouts.app')
@section('content')

    <div class="container">
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
                @if (Auth::user()->admin == 1)
                <a href="/books/{{$book->id}}/edit" class="card-link">Editar</a>
                @else
                @endif
            </div>
        </div>
    </div>
@endsection
{{-- 
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth --}}