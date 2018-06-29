@extends('layouts.app')
@section('content')
    <table class="table table-bordered">
    <tr>
      <th>Nombre</th>
    </tr>
    
    @foreach($categories as $category)
    <tr>
    <td><a href="/categories/{{$category->id}}">{{$category->name}}</a></td>
    @if (Auth::user()->admin == 1)
    <td><a href="/categories/{{$category->id}}/edit">Editar</a></td>
    <td>
        <form action="/categories/{{ $category->id }}" method="post">
          @csrf
          {{ method_field('DELETE') }}
          <button class="btn btn-default" type="submit">Borrar</button>
        </form>
    </td>
  </tr>
  @else
  </tr>
  @endif
    @endforeach
  </table>
@endsection
