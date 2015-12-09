@extends('app')

@section('content')

	<h1>Edit Project</h1>
</hr>
	<form action = "/projects/{{$project->id}}" method = "post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type = 'hidden' name = "_method" value = 'patch'>
		<div class = "form-group">
			<label><h3>Titie:</h3></label>
			<input type = "text" name = "title" value = "{{$project->title}}" class = "form-control">
		</div>
		<div class = "form-group">
			<label><h3>Description</h3></label>
			<input type = 'text' name = 'description' value = "{{$project->description}}" class = "form-control">
		</div>
		<div class = "form-group">
			<label><h3>Body:</h3></label>		
			<textarea id = "body" name = "body" value = "{{$project->body}}" class = "form-control ckeditor">{{$article->body}}</textarea>
		</div>
		<div class = 'form-group'>
			<label><h3>image:</h3></label>
			<input type = "text" name = 'image' value = "{{$project->image}}" class = "form-control">
		</div>
		<div class = 'form-group'>
			<label><h3>video:</h3></label>
			<input type = 'text' name = 'video' value = "{{$project->video}}" class = "form-control">
		</div>
		<div class = "form-group">
			<label><h3>Published On:</h3></label>
			<input type = "date" name = "published_at" value = "{{$project->published_at->format('Y-m-d')}}" class = "form-control">
		</div>
		<div class = 'form-group'>
			<input type = "submit" value = "Edit Project" class = "btn btn-primary">
		</div>
	</form>

	@include ('errors.list')
	@section('footer')
		<script>
			$('#select_field').select2();
			CKEDITOR.replace( 'body',
	        {
	        	customConfig : 'config.js',
	        	toolbar : 'simple',
	        	height: 400,
	        	uiColor: '#343B3D'
	        })
		</script>
	@endsection
@stop