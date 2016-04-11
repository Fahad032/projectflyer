@extends('layout')
@section('layout')
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				
				<table class="table table-bordered table-collapsed">
					<tr>
						<th>Sl. No.</th>
						<th>Street</th>
						<th>Zip</th>
						<th>Price</th>
						<th>Owner</th>
					</tr>
					
					@foreach($flyers as $flyer)
					<tr>
						<td>{{ $flyer->id }}</td>
						<td><a href="flyers/{{$flyer->zip}}/{{ str_replace(' ', '-', $flyer->street) }}">{{ $flyer->street }}</a></td>
						<td>{{ $flyer->zip }}</td>
						<td>{{ $flyer->sale_price }}</td>
						<td>{{ $flyer->name }}</td>
						
					</tr>
					
					@endforeach
					
				</table>
				
			</div>
		</div>
	</div> 

@stop
