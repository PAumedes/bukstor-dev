<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar {{$author->name}} {{$author->last_name}}</title>
</head>
<body>
<body>
    <form action="/authors/{{$author->id}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$author->name}}" id='name'/>
        </div>
        <div>
            <label for="cost">Apellido</label>
            <input type="text" name="last_name" value="{{$author->last_name}}" id='last_name'/>
        </div>
        <input type="submit" value="Editar Autor"/>
    </form>
</body>
</html>