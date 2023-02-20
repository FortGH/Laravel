<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){

        $teams = Team::get();
        return view('components.teams.index',['teams' => $teams]);
    }

    public function show($x){

        $team = Team::findOrFail($x);
       
        return view('components.teams.show',['teams' => $team]);
    }

    public function create(){
        return view('components.teams.create');
    }

    public function store(Request $request){
        
        $request->validate([

            'nombre'=> ['required'],
            'estadio'=> ['required'],
            'ciudad'=> ['required'],
            'pais'=> ['required']
            
        ]);
        $team = new Team;
        $team->nombre = $request->input('nombre');
        $team->estadio = $request->input('estadio');
        $team->ciudad = $request->input('ciudad');
        $team->pais = $request->input('pais');
        $team->save();

        session()->flash('team','Team created successfully');

        return to_route('index');
    }

   
}