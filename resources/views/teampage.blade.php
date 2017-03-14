@extends('layouts.app')
@section('content')
	<div class="welcome">
<!--        need to change these links when made -->
        <p>
           <a href="http://localhost:8000/teampage/createteam" id="linkid">Create a team</a>
        
        </p> 
        <a href="http://localhost:8000/" id="linkid">Back</a>
       <h1>List all Teams</h1>
        @foreach ($teams as $team)
        <p>
            <a href="{{url('teams/'.$team->TeamID)}}">{{$team->TeamName}}</a>        
        </p>
    @endforeach
        </h1>
        
	</div>
@endsection