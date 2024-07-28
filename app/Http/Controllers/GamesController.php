<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\videogame;
use App\Models\Category;

class GamesController extends Controller
{
    //
    public function index(){
        $videogames = videogame::orderBy('id','desc')->get();
        return view('index', ['games' => $videogames]);
    }

    public function create(){
        $categorias = Category::all();
        return view('create', ['categorias' => $categorias]);
    }

    public function help ($name_game, $categoria = null){
        $date = now();
        return view('show', ['name_videojuego'=>$name_game, 'categoria_juego'=>$categoria, 'fecha'=>$date]);
    }

    public function storeVideogame(Request $request ){
        $game = new videogame;
        $game->name = $request->name_game;
        $game->category_id = $request->categoria_id;
        $game->active = 1;
        $game->save();
        return redirect()->route('games');
    }

    public function view($game_id){
        $game = videogame::find($game_id);
        $categorias = Category::all();
        return view('update', ['categorias' => $categorias, 'game'=>$game]);
    }

    public function updateVideogame(Request $request ){
        $game = videogame::find($request->game_id);
        $game->name = $request->name_game;
        $game->category_id = $request->categoria_id;
        $game->active = 1;
        $game->save();
        return redirect()->route('games');
    }

    public function delete($game_id){
        $game = videogame::find($game_id);
        $game->delete();
        return redirect()->route('games');
    }
}
