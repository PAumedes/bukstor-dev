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
        <th>Editar</th>
        </tr>
        <tr>
            {{-- @dd($books); --}}
            @foreach($books as $book)
        <td><a href="/books/{{$book->id}}">{{$book->name}}</a></td> 
        <td><a href="/books/{{$book->id}}/edit">Editar</a></td>
        </tr>
            @endforeach
    </table> 
</body>
</html>