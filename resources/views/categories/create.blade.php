@extends('layouts.app')
@section('content')
    <form action="/books" method="post">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{old('name')}}" id='name'/>
        </div>
        <input type="submit" value="Agregar categoría"/>
    </form>    
@endsection