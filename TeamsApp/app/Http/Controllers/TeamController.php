<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index(){

        $teams = Team::get();
        return view('components.index',['teams' => $teams]);
    }

    public function show($x){

        $team = Team::findOrFail($x);
       
        return view('components.show',['teams' => $team]);
    }
}
