<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Formulario para agregar libros</title>
 </head>
 <body>

    <form action="/books" method="post">
        @csrf
        <div>
            <label for="name">Título</label>
            <input type="text" name="name" value="{{old('name')}}" id='name'/>
        </div>
        <div>
            <label for="cost">Costo</label>
            <input type="text" name="cost" value="{{old('cost')}}" id='cost'/>
        </div>
        <div>
            <div>
            <label for="price">Precio</label>
            <input type="text" name="price" value="{{old('price')}}" id='price'/>
            </div>
            <label for="description">Descripción</label>
            <textarea name="description" rows="4" cols="50">{{old('description')}}</textarea>
        </div>
        <div>
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" value="{{old('isbn')}}">
        </div>
        <input type="submit" value="Agregar libro"/>
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