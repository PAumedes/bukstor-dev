@extends('layouts.app')
@section('title', 'Autores')
@section('content')
    <table class="table table-bordered">
    <tr>
      <th>Nombre</th>
    </tr>
    @foreach($authors as $author)
    <tr>
    <td><a href="/authors/{{$author->id}}">{{$author->getAuthorFullName()}}</a></td>
    @if (Auth::user()->admin == 1)
      <td><a href="/authors/{{$author->id}}/edit">Editar</a></td>
      <td>
        <form action="/authors/{{ $author->id }}" method="post">
          @csrf
          {{ method_field('DELETE') }}
          <button class="btn btn-default" type="submit">Borrar</button>
        </form>
      </td>
      @else
      @endif
    </tr>
    @endforeach
  </table>
@endsection
