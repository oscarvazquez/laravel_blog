@extends('app')

@section('content')

	<h1>Articles</h1>
	<hr/>
	@foreach ($article as $art)
		<article>
			<a href = "/articles/{{$art->id}}"><h2>{{$art->title}}</h2></a>
			<div class = "body">{{$art->body}}</div>
			@if (Auth::guest())

			@else
				<a href = "/articles/{{$art->id}}/edit">Edit Article</a>
				<form aciton = "/articles/{{$art->id}}>" method = "post">
					<input type = 'hidden' name = "_token" value = "{{ csrf_token() }}">
					<input type = "hidden" name = "_method" value = "delete">
					<input type = "submit" value = "delete" class = "btn btn-danger">
				</form>
			@endif
		</article>
	@endforeach
@stop