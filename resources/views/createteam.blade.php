@extends('layouts.app')
@section('content')
	<div class="welcome">
  <b>    <p>Create a team:</p> </b>
<!--        <button type="button">Add!</button>-->
<form action="/action_page.php">
  Team Name: <input type="text" name="tname"><br>
  <input type="submit" value="Submit">
</form>
        <h1>
        <a href="http://localhost:8000/" id="linkid">Back</a>
        </h1>
	</div>
@endsection
