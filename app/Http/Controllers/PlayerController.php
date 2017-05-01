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
    
    
    public function showCreatePlayer()
    {
        return View::make('createplayer');
    }
    
    
    public function viewPlayers()
    {
            $players = Player::all();
            return view('players', compact('players'));

    }
    
    
    /**
    *   Edit Player Form
    **/
    public function edit($id)
    {
        $player = Player::findorFail($id);
        return view('editplayer', compact('player'));
    }
    
     public function updatePlayer(Request $request, $id){
        $player = Player::findOrFail($id);
        $player->update($request->all());
        return redirect()->route('players');
    }
    
     public function createPlayer(Request $request)
    {
        // Validate the request...

        $players = new player;

        $players->PlayerName = $request->pname;
        $players->PlayerPosition = $request->ppos;
        $players->TeamName = $request->tname;

        $players->save();
        
        return redirect()->route('players');

    }
    
    public function delete($id)
    {
        $player = Player::findorFail($id);
        $player->delete();
        return back();
    }
}
