<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Formulario para editar libros</title>
 </head>
 <body>

    <form action="/books/{{$book->id}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div>
            <label for="name">Título</label>
            <input type="text" name="name" value="{{$book->name}}" id='name'/>
        </div>
        <div>
            <label for="cost">Costo</label>
            <input type="text" name="cost" value="{{$book->cost}}" id='cost'/>
        </div>
        <div>
            <div>
            <label for="price">Precio</label>
            <input type="text" name="price" value="{{$book->price}}" id='price'/>
            </div>
            <label for="description">Descripción</label>
            <textarea name="description" rows="4" cols="50">{{$book->description}}</textarea>
        </div>
        <div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" value="{{$book->isbn}}">
        </div>
        <input type="submit" value="Editar libro"/>
    </form>
</body>
</html>
@if (count($errors))
 <ul>
   @foreach ($errors->all() as $error)
     <li>{{$error}}</li>
   @endforeach
 </ul>
@endif