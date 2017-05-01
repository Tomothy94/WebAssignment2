@extends('layouts.app')
@section('content')
	<div class="welcome">
  <b>    <p>Edit a player:</p> </b>
<!--        <button type="button">Add!</button>-->
        
        
<form action="{{route('player.update', ['id'=> $player->PlayerID])}}" method="post">
  {!! method_field('patch') !!}
  Player Name: <input type="text" name="PlayerName" value="{{$player->PlayerName}}"><br>
  Player Position: <input type="text" name ="PlayerPosition" value="{{$player->PlayerPosition}}"><br>
  Player Team:  <input type="text" name ="TeamName" value="{{$player->TeamName}}"><br>
  <input type="submit" value="Submit">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
        <h1>
        <a href="http://localhost:8000/" id="linkid">Back</a>
        </h1>
	</div>
@endsection
