<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Fixture;

class FixtureController extends Controller
{   
    public function showFixtures()
    {
        return View::make('fixture');
    }
    
    public function viewFixtures()
    {
            $fixtures = Fixture::all();
            return view('fixtures', compact('fixtures'));

    }
}
