@extends('layouts.app')
@section('content')
	<div class="welcome">
	   <h2> Welcome to the Players page! </h2>	
         <a href="http://localhost:8000/players/createplayer" id="linkid">Create a player</a>
        
        <h1>List all Players</h1>
        @foreach ($players as $player)
        <p>

            <a href="{{route('player.edit', ['id' => $player->PlayerID])}}">{{$player->PlayerName}}</a>
            <a class="btn btn-danger" href="{{route('player.delete', ['id' => $player->PlayerID])}}">Delete Player</a>
        </p>
       
        @endforeach
      
        <p>
            <a href="http://localhost:8000/" id="linkid">Back</a>     
        </p>
        
	</div>
@endsection
