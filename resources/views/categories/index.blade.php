<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorías</title>
</head>
<body>
    <table>
    <tr>
      <th>Nombre</th>
    </tr>
    @foreach($categories as $category)
    <tr>
    <td><a href="/categories/{{$category->id}}">{{$category->name}}</a></td> 
    <td><a href="/categories/{{$category->id}}/edit">Editar</a></td>
    <td>
        <form action="/categories/{{ $category->id }}" method="post">
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