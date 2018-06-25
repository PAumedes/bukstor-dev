<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/categories/{{$category->id}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{$category->name}}" id='name'/>
        </div>
        <input type="submit" value="Editar categoría"/>
    </form>
</body>
</html>