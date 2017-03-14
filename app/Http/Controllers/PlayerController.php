<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{   
    public function showPlayers()
    {
        return View::make('players');
    }
    
    public function viewPlayers()
    {
            return view('players', compact('players'));

    }
}
