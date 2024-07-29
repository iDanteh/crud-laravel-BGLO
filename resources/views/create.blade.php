<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create view</title>
</head>
<body>
    <h1>Creación de objetos</h1>
    <p><a href="{{route('games')}}">Lista de juegos</a></p>
    <form action="{{route('createVideogame')}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas añadir este registro?');">

        @csrf

        <input type="text" placeholder="Nombre de videojuego" name="name_game"></input>
        @error('name_game')
        {{$message}}
        @enderror
        <select name="categoria_id" id="">
            @foreach ($categorias as $categoria)
            <option value="{{$categoria->id}}">{{$categoria->name}}</option>
            @endforeach
            
        </select>
        <button type="submit">Agregar videojuego</button>
    </form>
</body>
</html>