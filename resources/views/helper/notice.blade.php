
	@if(session()->has('flash_message'))
		
		<script type="text/javascript" charset="utf-8">
			
		swal({
			  title: "{{ session('flash_message.title') }}",
			  text: "{{ session('flash_message.message') }}",
			  type: "s",
			  showConfirmButton: false,
			  timer: 1200
			});
		</script>
		
	@endif			


