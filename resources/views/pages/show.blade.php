@extends('layout')

@section('layout')
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h1>{{ $flyer->street }}</h1>
				<h2>$ {{ number_format($flyer->sale_price) }}</h2>
				<p>{{ $flyer->description }}</p>
			</div>
			<div class="col-sm-8">
				
				@foreach($flyer->photos->chunk(4) as $photoSet)
				
				<ul class="row flyer-photo">
	
					@foreach($photoSet as $photo)
					<li class="col-md-3">
						<img src="{{ asset($photo->thumbnail_path) }}" class="img-responsive" />
						
					</li>
					@endforeach
	
					
					
				</ul>
					
					
				@endforeach
				
			
			@if(\Auth::check())
				@if(auth()->id() == $flyer->user_id)
			
			<hr />
			
				
				<form id="addPhoto" class="dropzone" action="../../flyers/{{ $flyer->zip }}/{{ str_replace(' ', '-', $flyer->street) }}/photos" method="POST" >
						
						{{ csrf_field() }}
				</form>			
				
				
				@endif
				
				
			@endif	
				
				

				
			</div>
			
			
		</div>
	</div> 

@stop

@section('external_script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		Dropzone.options.addPhoto = {
			'acceptedFiles': '.jpeg, .jpg, .png, .bmp, .gif'
		};
	</script>
@stop
