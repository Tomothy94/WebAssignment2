@extends('layouts.app')
@section('content')
	<div class="welcome">
	   <h2> Welcome to the fixtures page! </h2>	
        <h1>Below all fixtures are listed! </h1>
         <a href="http://localhost:8000/fixture/createfixture" id="linkid">Create a fixture</a>
        <h1>
        @foreach ($fixtures as $fixture)
        <p>      
            {{$fixture->HomeTeam}}
            VS
            {{$fixture->AwayTeam}}      
            
            
        </p>
    @endforeach
        </h1>
        <p>
            <a href="http://localhost:8000/" id="linkid">Back</a>     
        </p>
        
	</div>
@endsection
