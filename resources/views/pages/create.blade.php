@inject('countries', 'App\Http\Utilities\Country')

@extends('layout')

@section('layout')

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h2>Sell Your Home ?</h2>
			
			<hr />
			
			@include('helper.errors')
			
<!-- notice/ alert -->
	<?php 
		echo flash()->success('Test', 'Body Messages ');
		$data = session('flash_message');
		//var_dump($data);
	 ?>
		@include('helper.notice')			

	<!--	@include('helper.notice', compact('data') )		 -->	
			<form method="POST" action="../flyers" class="form-horizontal">
				@include('partials.form')
				
			</form>
			
		</div>
	</div>
</div>



@stop

