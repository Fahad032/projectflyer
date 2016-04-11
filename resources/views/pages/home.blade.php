@extends('layout')

@section('layout')

	<div class="container">
		<div class="jumbotron">
				<h2>Project Flyer</h2>
				<p> 
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis delectus dignissimos maiores veritatis assumenda sunt 
					exercitationem eligendi nesciunt ut quidem rerum illum facilis sed! Fugit laudantium recusandae repudiandae dolores 
					repellat.
				</p>
				
				@if(\Auth::check())
				<a href="flyers/create" class="btn btn-primary">Create Flyer</a>
				@else
				<a href="/register" class="btn btn-primary">Sign Up</a>				
				@endif
		</div>
	</div> 
@stop
