<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    //ALL TEAM LOGIN IN THIS CONTROLLER <3
    
    public function showTeamPage()
    {
        return View::make('teampage');
    }
    
    public function viewFixtures()
    {
        return View::make('fixtures');
    }
    
}
