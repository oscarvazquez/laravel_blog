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
				<textarea id = 'body' name = "body" class = "form-control ckeditor"></textarea>
		</div>
		<div class = "form-group">
			<label><h3>Published On:</h3></label>
				<input type = "date" name = "published_at" value = "{{Carbon\Carbon::now()->format('Y-m-d')}}" class = "form-control">
		</div>
		<div>
			<label><h3>Categories:</h3></label>
				<select multiple name = 'cats[]' class = "form-control" id = "select_field">
					<% @treatments.each do |treat| %>
							<option value = "<%= treat.id %>"><%=treat.treatment %></option>
					<% end %>
				</select>
		</div>
		<div class = 'form-group'>
			<input type = "submit" value = "Create New Article" class = "btn btn-primary">
		</div>
	</form>

	@include ('errors.list')

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