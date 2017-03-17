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
    
    public function deleteTeams(Request $request, $id){
        $Team = Team::findOrFail($id);
        $Team->delete();
        return redirect()->route('teampage');
    }
    
    public function updateTeam(Request $request){
        $Team = Team::findOrFail($request->id);
        $Team->TeamName = $request->TeamName;
        $Team->update();
        return redirect()->route('teampage');
    }
    
    
    public function showOneTeam(Request $request, $id)
    {
        $team = Team::findorFail($id);
        
        return view('editteam', compact('team'));
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

