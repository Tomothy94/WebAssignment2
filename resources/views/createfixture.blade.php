@extends('layouts.app')
@section('content')
	<div class="welcome">
  <b>    <p>Create a Fixture:</p> </b>
<!--        <button type="button">Add!</button>-->
        
        
<form action="/addfixture" method="post">
  Home Team Name: <input type="text" name="hteam"><br>
  Away Team Name: <input type="text" name="ateam"><br>
  <input type="submit" value="Submit">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
        <h1>
        <a href="http://localhost:8000/" id="linkid">Back</a>
        </h1>
	</div>
@endsection


