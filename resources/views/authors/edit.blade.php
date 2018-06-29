@extends('layouts.app')
@section('content')
    <form action="/authors/{{$author->id}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$author->name}}" id='name'/>
        </div>
        <div>
            <label for="cost">Apellido</label>
            <input type="text" name="last_name" value="{{$author->last_name}}" id='last_name'/>
        </div>
        <input type="submit" value="Editar Autor"/>
    </form>
@endsection