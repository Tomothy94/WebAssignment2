@extends('layouts.app')
@section('content')
	<div class="welcome">
<!--        need to change these links when made -->
        <p>
           <a href="http://localhost:8000/teampage/createteam" id="linkid">Create a team</a>
        </p> 
        
            
    
       
    
        <p>     
            <a href="#" id="linkid">Delete a team</a>
        </p>
            
        
        <a href="http://localhost:8000/" id="linkid">Back</a>
       <h1>List all Teams</h1>
        @foreach ($teams as $team)
        <p>
            <a href="{{url('teampage/editteam/'.$team->TeamID)}}">{{$team->TeamName}}</a>    
            <p>
            <form method="post" action="{{url('deleteteam/'.$team->TeamID)}}">       
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary">Delete</button>
            </form>
           
    @endforeach
        
        
	</div>
@endsection