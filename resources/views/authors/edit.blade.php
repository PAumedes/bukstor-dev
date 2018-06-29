@extends('layouts.app')
@section('title', 'Editar autor')
@section('content')
    <form action="/authors/{{$author->id}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">
            <label class="col-md-4 col-form-label text-md-right" for="name">Nombre</label>
            <input type="text" name="name" value="{{$author->name}}" id='name'/>
        </div>
        <div>
            <label class="col-md-4 col-form-label text-md-right" for="cost">Apellido</label>
            <input type="text" name="last_name" value="{{$author->last_name}}" id='last_name'/>
        </div>
        <input class="col-md-6 offset-md-4 btn btn-primary" type="submit" value="Editar Autor"/>
    </form>
@endsection
