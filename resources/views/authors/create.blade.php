<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/authors" method="post">
        @csrf
        <div>
            <label for="name">Nombre</label>
            <input type="text" name="name" value="{{old('name')}}" id='name'/>
        </div>
        <div>
            <label for="cost">Apellido</label>
            <input type="text" name="last_name" value="{{old('last_name')}}" id='last_name'/>
        </div>
        <input type="submit" value="Agregar Autor"/>
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
</body>
</html>