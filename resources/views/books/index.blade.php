<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros | {{config('app.name')}}</title>
</head>
<body>
    <table>
    <tr>
      <th>Nombre</th>
      <th>Costo</th>
      <th>Precio</th>
      <th>Descripción</th>
      <th>ISBN</th>
      <th>Autor</th>
      <th>Nombre del Autor</th>
      <th>Categoría</th>
      <th>Nombre de la Categoría</th>
      <th>Editar</th>
      <th>Borrar</th>
    </tr>
    @foreach($books as $book)
    <tr>
      
      <td><a href="/books/{{$book->id}}">{{$book->name}}</a></td> 
      {{-- <td>{{$book->name}}</td> <a href="/books/{{$book}}/edit"></a> --}}
      <td>{{$book->cost}}</td>
      <td>{{$book->price}}</td>
      <td>{{$book->description}}</td>
      <td>{{$book->isbn}}</td>
      <td>{{$book->author_id}}</td>
      <td>{{$book->author->name}}</td>
      <td>{{$book->category_id}}</td>
      @if ($book->categories->name != null)
      <td>{{$book->categories->name}}</td>
      @else
      <td>Sin categoría</td>
      @endif
      <td><a href="/books/{{$book->id}}/edit">Editar</a></td>
      <td>
        <form action="/books/{{ $book->id }}" method="post">
          @csrf
          {{ method_field('DELETE') }}
          <button class="btn btn-default" type="submit">Borrar</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>