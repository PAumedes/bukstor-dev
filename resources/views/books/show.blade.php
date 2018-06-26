<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{$book->name}} | {{config('app.name')}}</title>
</head>
<body>

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
                <a href="/books/{{$book->id}}/edit" class="card-link">Editar</a>
            </div>
        </div>
    </div>
       
</body>
</html>
{{-- 
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth --}}