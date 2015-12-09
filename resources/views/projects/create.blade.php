@extends('app')

@section('content')
	
	<h1>Create a New Project</h1>

	<hr/>

	<form action = "/projects" method = "post">
		<input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
		<div class = "form-group">
			<label><h3>Title:</h3></label>
				<input type = "text" name = "title" class = "form-control">
		</div>
		<div class = "form-group">
			<label><h3>Story</h3></label>
				<textarea name = "story" class = 'form-control'></textarea>
		</div>
		<div class = "form-group">
			<label><h3>Description</h3></label>
				<input type = 'text' name = "description" class = 'form-control'>
		</div>
		<div class = "form-group">
			<label><h3>Body:</h3></label>
				<textarea id = 'body' name = "body" class = "form-control ckeditor"></textarea>
		</div>
		<div class = "form-group">
			<label><h3>Published On:</h3></label>
				<input type = "date" name = 'published_at'>
		</div>
			image<input type = 'text' name = "image">
			video<input type = "text" name = 'video'>
		<div class = "form-group">
			<input type = 'submit'value = "Create a New Project" class = "btn btn-primary">
		</div>
	</form>
	@section('footer')

	<script>
		$(document).ready(function(){
			console.log('doing somethins');
			$("#select_field").select2({
				placeholder: "Choose a Category"
			});

			CKEDITOR.replace( 'body',
	        {
	        	customConfig : 'config.js',
	        	toolbar : 'simple',
	        	height: 400,
	        })
	        hljs.initHighlightingOnLoad();
		})
	</script>
@endsection

@stop