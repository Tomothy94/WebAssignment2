@extends('layouts.app')
@section('content')
	<div class="welcome">
	   <h2> Welcome to the fixtures page! </h2>	
        <h1>List all Fixtures</h1>
        <h1>
        @foreach ($fixtures as $fixture)
        <p>      
            <a href="{{url('fixtures/'.$fixture->FixtureID)}}">{{$fixture->HomeTeam}}</a>
            VS
            <a href="{{url('fixtures/'.$fixture->FixtureID)}}">{{$fixture->AwayTeam}}</a>      
            
            
        </p>
    @endforeach
        </h1>
        <p>
            <a href="http://localhost:8000/" id="linkid">Back</a>     
        </p>
        
	</div>
@endsection
