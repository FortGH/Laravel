<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Team;

class GameController extends Controller
{
    public function create(Team $team){

        $teams = Team::get();

        return view('components.games.create',['teams' => $teams,'team' => $team]);
    }

    public function store(Request $request){
        
        $request->validate([

            'team1'=> ['required','integer'],
            'team2'=> ['required','integer'],
            'estadio'=> ['required'],
            'goles_local'=> ['required','integer'],
            'goles_visita'=> ['required','integer'],
            'fecha'=> ['required','date']
            
        ]);
        $game = new Game;
        $game->id_local = $request->input('team1');
        $game->id_visita = $request->input('team2');
        $game->goles_local = $request->input('goles_local');
        $game->goles_visita = $request->input('goles_visita');
        $game->estadio = $request->input('estadio');
        $game->fecha = $request->input('fecha');
       
       
        $game->save();

        session()->flash('newGame','Game created successfully');

        return to_route('show',$game->id_local);
    }
}
