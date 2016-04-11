	<div class="col-sm-6">
			


				<div class="form-group">
	
					<div class="col-xs-12">
						<label for="name" class="control-label">Name :</label>
						<input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" />
						{{ csrf_field() }}
					</div>
				</div>
					<div class="clearfix"></div>
				
				<div class="form-group">
					<div class="col-xs-12">
						<label for="street" class="control-label">Street :</label>
						<input type="text" class="form-control" name="street" id="street" value="{{ old('street') }}"  />
					</div>
				</div>
					<div class="clearfix"></div>

				<div class="form-group">
					<div class="col-xs-12">
						<label for="city" class="control-label">City :</label>
						<input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}"  />
					</div>
				</div>	
					<div class="clearfix"></div>


				<div class="form-group">
					<div class="col-xs-12">
						<label for="zip" class="control-label">Zip :</label>
						<input type="text" class="form-control" name="zip" id="zip" value="{{ old('zip') }}"  />
					</div>
				</div>	
					<div class="clearfix"></div>


				<div class="form-group">
					<div class="col-xs-12">
						<label for="name" class="control-label">Country :</label>
						<select name="country" id="country" class="form-control">
							@foreach($countries::all() as $code => $country)
							<option value="{{ $code }}">{{ $country }}</option>
							@endforeach
						</select>
					</div>
					<div class="clearfix"></div>
				</div>
				
				
		</div>
	
	<div class="col-sm-6">
	
			<div class="form-group">
					<div class="col-xs-12">
						<label for="state" class="control-label">State :</label>
						<input type="text" class="form-control" name="state" id="state"  value="{{ old('state') }}"  />
					</div>
				</div>	
					<div class="clearfix"></div>
	
		<div class="form-group">
					<div class="col-xs-12">
						<label for="sale_price" class="control-label">Sale price :</label>
						<input type="text" class="form-control" name="sale_price" id="sale_price"  value="{{ old('sale_price') }}" />
					</div>
				</div>	
					<div class="clearfix"></div>


				<div class="form-group">
					<div class="col-xs-12">
						<label for="description" class="control-label">Description :</label>
						<textarea class="form-control" name="description" id="description" rows="6"> {{ old('description') }} </textarea>
					</div>
				</div>	
					<div class="clearfix"></div>


	</div>
	
	<div class="col-xs-12">
				<div class="form-group">
					<div class="col-xs-12">
						<input type="submit" class="btn btn-primary" name="submit" id="submit" value="Create Flyer"/>
					</div>
				</div>	
					<div class="clearfix"></div>
		
		
	</div>


				