@extends('layouts.app')
@section('content')
	<div class="welcome">
	   <h2> Welcome to the Players page! </h2>	
        <h1>List all Players</h1>
        @foreach ($players as $player)
        <p>
            <a href="{{url('teams/'.$player->PlayerID)}}">{{$player->PlayerName}}</a>        
        </p>
    @endforeach
      
        <p>
            <a href="http://localhost:8000/" id="linkid">Back</a>     
        </p>
        
	</div>
@endsection
