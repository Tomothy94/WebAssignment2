<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showWelcome()
	{
		return View::make('hello');
	}
    
    public static function GetData(){
        
//        $result =  DB::connection('mysql')->select('select * from teams');
        
        return "hello";

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hello');
    }
}
