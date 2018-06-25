<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autores</title>
</head>
<body>
    <table>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
    </tr>
    @foreach($authors as $author)
    <tr>
    <td><a href="/authors/{{$author->id}}">{{$author->name}}</a></td> 
    <td>{{$author->last_name}}</td> 
      <td><a href="/authors/{{$author->id}}/edit">Editar</a></td>
      <td>
        <form action="/authors/{{ $author->id }}" method="post">
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