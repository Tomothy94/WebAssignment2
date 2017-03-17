@extends('layouts.app')
@section('content')
	<div class="welcome">
  <b>    <p>Edit a team:</p> </b>
<!--        <button type="button">Add!</button>-->
        
        
<form action="/updateteam" method="post">
  Team Name: <input type="text" name="TeamName" value="{{$team->TeamName}}"><br>
  <input type="hidden" name='id' value="{{$team->TeamID}}"/>
  <input type="submit" value="Submit">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
        <h1>
        <a href="http://localhost:8000/" id="linkid">Back</a>
        </h1>
	</div>
@endsection
