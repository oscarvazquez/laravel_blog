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
			@endif
		</article>
	@endforeach
@stop