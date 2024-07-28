<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show View</title>
</head>
<body>

    @if($categoria_juego)
    <h1>El nombre del videojuego es: {{ $name_videojuego}}y la categoria es: {{ $categoria_juego }}</h1>
    @else
    <h1>El nombre del videojuego es: {{ $name_videojuego}}</h1>
    @endif

    
    <h3>La fecha es: {{ $fecha }}</h3>
</body>
</html>