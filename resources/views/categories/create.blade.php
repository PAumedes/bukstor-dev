<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/books" method="post">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{old('name')}}" id='name'/>
        </div>
        <input type="submit" value="Agregar categoría"/>
    </form>    
</body>
</html>