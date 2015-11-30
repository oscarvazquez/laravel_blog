@if ($errors->any())
	<div class = "row">
		<div class = "col-lg-6">
			<ul class = "alert alert-danger">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>	
	</div>
@endif