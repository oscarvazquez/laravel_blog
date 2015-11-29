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
			<input type = "text" name = "body" value = "{{$project->body}}" class = "form-control">
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
@stop