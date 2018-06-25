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
        <tr>
        <td><a href="/categories/{{$category->id}}">{{$category->name}}</a></td> 
        <td><a href="/categories/{{$category->id}}/edit">Editar</a></td>
        </tr>
    </table> 
</body>
</html>