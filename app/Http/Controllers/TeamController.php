<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    //ALL TEAM LOGIN IN THIS CONTROLLER <3
    
    public function showTeamPage()
    {
        return View::make('teampage');
        
    }
    
    public function showTeams()
    {
            $teams = Team::all();
            return view('teampage', compact('teams'));

    }
}
