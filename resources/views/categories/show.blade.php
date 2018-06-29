@extends('layouts.app')
@section('content')
    <table class="table table-bordered">
        <tr>
        <th>Nombre</th>
        </tr>
        {{-- @dd($books); --}}
        @if($books->count() != 0)
        @foreach($books as $book)
                <tr>
                    <td><a href="/books/{{$book->id}}">{{$book->name}}</a></td>
                    @if (Auth::user()->admin == 1)
                    <td><a href="/books/{{$book->id}}/edit">Editar</a></td>
                    @else
                    @endif
                </tr>
            @endforeach
    </table>
        @else
            <strong>No se encontraron libros para la categoría seleccionada. Por favor, vuelva atrás y seleccione otra categoría.</strong>
        @endif
@endsection