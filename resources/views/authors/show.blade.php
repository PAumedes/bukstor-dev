@extends('layouts.app')
@section('title', 'Autores')
@section('content')
    <table class="table table-bordered">
        <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        </tr>
        @foreach ($books as $book)
        <tr>
        <td><a href="/books/{{$book->id}}">{{$book->name}}</a></td>
        <td>{{$book->name}}</td>
        @if (Auth::user()->admin == 1)
        <td><a href="/books/{{$book->id}}/edit">Editar</a></td>
        @else
        @endif
        </tr>
        @endforeach
    </table>
@endsection
