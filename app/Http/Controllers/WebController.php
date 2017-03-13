<?php

class WebController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'WebController@showWelcome');
	|
	*/

	
    
    
    public static function GetData(){
        
        $result =  DB::connection('mysql')->select('select '$TeamName' from teams');
        
        return "hello";

    }
    
    
}
