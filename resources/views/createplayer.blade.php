@extends('layouts.app')
@section('content')
	<div class="welcome">
  <b>    <p>Create a player:</p> </b>
<!--        <button type="button">Add!</button>-->
        
        
<form action="/addplayer" method="post">
  Player Name: <input type="text" name="pname"><br>
  Player Position: <input type="text" name="ppos"><br>    
  Team Name: <input type="text" name="tname"><br>
    
  <input type="submit" value="Submit">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
        <h1>
        <a href="http://localhost:8000/" id="linkid">Back</a>
        </h1>
	</div>
@endsection
