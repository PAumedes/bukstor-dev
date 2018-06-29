@extends('layouts.app')
@section('content')
    <form action="/categories/{{$category->id}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$category->name}}" id='name'/>
        </div>
        <input type="submit" value="Editar categoría"/>
    </form>
@endsection