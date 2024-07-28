<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP View</title>
</head>
<body>
    <h1>Vista creada en Blade y llamada desde el controlador</h1>
    <p><a href="{{route('gamesCreate')}}">Nuevo Videojuego</a></p>
    <h2>Listado de juegos</h2>
    <table>
        <thead>
            <tr>
                <th>ID Videojuego</th>
                <th>Nombre del videojuego</th>
                <th>Categoria ID: </th>
                <th>Creación:</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($games as $game)
            <tr>
                <th>{{$game->id}}</th>
                <th> <a href="{{route('viewGame', $game->id)}}">{{$game->name}}</a> </th>
                <th>{{$game->category_id}}</th>
                <th>{{$game->created_at}}</th>
                <th>
                    @if($game->active)
                    <span style="color: green;">Activo</span>
                    @else
                    <span style="color: red;">Inactivo</span>
                    @endif
                    </th>
                <th>
                    <a href="{{route('deleteGame',$game->id)}}">Eliminar</a>
                </th>
            </tr>
            @empty
            <tr>
                <th>NO hay videojuegos</th>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>