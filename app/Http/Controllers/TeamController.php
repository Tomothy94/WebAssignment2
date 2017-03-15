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
    
    public function showCreateTeamPage(){
        return View::make('createteam');
    }
    
    public function showTeams()
    {
            $teams = Team::all();
            return view('teampage', compact('teams'));
        

    }
    public function createTeam(Request $request)
    {
        // Validate the request...

        $teams = new Team;

        $teams->TeamName = $request->tname;

        $teams->save();
        
        return redirect()->route('teampage');

    }
}

