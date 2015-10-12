@extends('app')

@section('content')

	<h1>Write a New Article</h1>
	<hr/>

	<form action = "/articles" method = "post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class = "form-group">
			<label><h3>Title:</h3></label>
				<input type = "text" name = "title" class = "form-control">
		</div>
		<div class = "form-group">
			<label><h3>Exerpt:</h3></label>
				<input type = "text" name = "exerpt" class = "form-control">
		</div>
		<div class = "form-group">
			<label><h3>Body:</h3></label>
				<textarea name = "body" class = "form-control"></textarea>
		</div>
		<div class = "form-group">
			<label><h3>Published On:</h3></label>
				<input type = "date" name = "published_at" value = "{{Carbon\Carbon::now()->format('Y-m-d')}}" class = "form-control">
		</div>
		<div class = 'form-group'>
			<input type = "submit" value = "Create New Article" class = "btn btn-primary">
		</div>
	</form>

	@include ('errors.list')

@stop