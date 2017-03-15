<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{   
    public function showPlayers()
    {
        return View::make('player');
    }
    
    public function viewPlayers()
    {
            $players = Player::all();
            return view('players', compact('players'));

    }
}
