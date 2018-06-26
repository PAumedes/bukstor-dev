<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        </tr>
        <tr>
        <td><a href="/authors/{{$author->id}}">{{$author->name}}</a></td> 
        <td>{{$author->last_name}}</td>
        <td><a href="/authors/{{$author->id}}/edit">Editar</a></td>
        </tr>
    </table> 
</body>
</html>