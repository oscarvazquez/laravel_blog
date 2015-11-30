@extends('app')

@section('content')

@include('partials.nav_cat')

	<h1>Articles</h1>
	<hr/>
	@foreach ($article as $art)
		<div class = "small_div">
			<article>
				<h2><a class = "link_tag" href = "/articles/{{$art->id}}">{{$art->title}}</a></h2>
				<div class = "body">
					<h4>{{$art->exerpt}}</h4>
				</div>
				@if (Auth::guest())

				@else
					<a href = "/articles/{{$art->id}}/edit" class = "btn btn-primary">Edit Article</a>
					<form action = "/articles/{{$art->id}}" method = "post">
						<input type = 'hidden' name = "_token" value = "{{ csrf_token() }}">
						<input type = "hidden" name = "_method" value = "delete">
						<input type = "submit" value = "Delete Article" class = "btn btn-danger">
					</form>
				@endif
			</article>
		</div>
	@endforeach
@stop