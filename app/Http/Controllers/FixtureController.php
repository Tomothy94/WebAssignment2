<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Fixture;

class FixtureController extends Controller
{   
    public function showFixtures()
    {
        return View::make('fixtures');
    }
    public function showCreateFixture(){
        return View::make('createfixture');
    }
    
    
    public function viewFixtures()
    {
            $fixtures = Fixture::all();
            return view('fixtures', compact('fixtures'));

    }
    
     public function createFixture(Request $request)
    {
        // Validate the request...

        $fixtures = new fixture;

        $fixtures->HomeTeam = $request->hteam;
        $fixtures->AwayTeam = $request->ateam;

        $fixtures->save();
        
        return redirect()->route('fixtures');

    }
    
}
