@extends('layouts.app')
@section('content')
	<div class="welcome">
<!--        need to change these links when made -->
        <a href="http://localhost:8000/teampage/createteam" id="linkid">Create a team</a>
        <h1>
        <a href="http://localhost:8000/" id="linkid">Back: Hello World</a>
       <h1>List all Teams</h1>
        @foreach ($teams as $team)
        <p>
            <a href="{{url('teams/'.$team->TeamID)}}">{{$team->TeamName}}</a>        
        </p>
    @endforeach
        </h1>
        
	</div>
@endsection