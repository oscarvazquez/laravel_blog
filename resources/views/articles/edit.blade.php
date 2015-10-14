@extends('app')

@section('content')

	<h1>Edit Article</h1>
	</hr>
	<form action = "/articles/{{$article->id}}" method = "post">
		<input type = "hidden" name = "_token" value = "{{ csrf_token() }}">
		<input type = "hidden" name = "_method" value = "patch">
		<div class = "form-group">
			<label><h3>Title:</h3></label>
			<input type = "text" name = "title" value = "{{$article->title}}" class = "form-control">
		</div>
		<div class = "form-group">
			<label><h3>Exerpt:</h3></label>
			<input type = "text" name = "exerpt" value = "{{$article->exerpt}}" class = "form-control">
		</div>
		<div class = "form-group">
			<label><h3>Body:</h3></label>		
			<textarea name = "body" value = "{{$article->body}}" class = "form-control">{{$article->body}}</textarea>
		</div>
		<div class = "form-group">
			<label><h3>Published On:</h3></label>
			<input type = "date" name = "published_at" value = "{{$article->published_at->format('Y-m-d')}}" class = "form-control">
		</div>
		<div class = "form-group">
			<label><h3>Categories:</h3></label>
				<select multiple name = 'cats[]' class = "form-control" id = "select_field">
					@foreach ($category as $key => $cats)
						<option value = "{{$key}}">{{$cats}}</option>
					@endforeach
				</select>
		</div>
		<input type = "submit" value = "Edit Article" class = "btn btn-primary" class = "form-control">
	</form>
	@include ('errors.list')

	@section('footer')
		<script>
			$('#select_field').select2();
		</script>
	@endsection
@stop