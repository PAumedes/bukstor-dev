@extends('layouts.app')
@section('title', 'Editar categoría')
@section('content')
    <form action="/categories/{{$category->id}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">
            <label class="col-md-4 col-form-label text-md-right" for="name">Nombre</label>
            <input type="text" name="name" value="{{$category->name}}" id='name'/>
        </div>
        <input class="col-md-6 offset-md-4 btn btn-primary" type="submit" value="Editar categoría"/>
    </form>
@endsection
