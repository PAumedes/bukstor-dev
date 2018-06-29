@extends('layouts.app')
@section('title', 'Editar libro')
@section('content')

    <form action="/books/{{$book->id}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div class="card-body">
            <label class="col-md-4 col-form-label text-md-right" for="name">Título</label>
            <input type="text" name="name" value="{{$book->name}}" id='name'/>
        </div>
        <div>
            <label class="col-md-4 col-form-label text-md-right" for="cost">Costo</label>
            <input type="text" name="cost" value="{{$book->cost}}" id='cost'/>
        </div>
        <div>
            <div>
            <label class="col-md-4 col-form-label text-md-right" for="price">Precio</label>
            <input type="text" name="price" value="{{$book->price}}" id='price'/>
            </div>
            <label class="col-md-4 col-form-label text-md-right" for="description">Descripción</label>
            <textarea name="description" rows="4" cols="50">{{$book->description}}</textarea>
        </div>
        <div>
            <label class="col-md-4 col-form-label text-md-right" for="isbn">ISBN</label>
            <input type="text" name="isbn" value="{{$book->isbn}}">
        </div>
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right" for="autor">Autor</label>
            <select name="author_id" id="authors">
                @foreach ($authors as $author)
                <option value="{{$author->id}}">{{$author->name}} {{$author->last_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right" for="category">Categoría</label>
            <select name="category_id" id="categories">
                @foreach ($categories as $category)
                @if ($category->id == $book->category_id)
                <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @else
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <input class="col-md-6 offset-md-4 btn btn-primary" type="submit" value="Editar libro"/>
    </form>
@endsection
@if (count($errors))
 <ul>
   @foreach ($errors->all() as $error)
     <li>{{$error}}</li>
   @endforeach
 </ul>
@endif
