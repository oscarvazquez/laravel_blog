@extends('app')

@section('content')

	<h1>Articles</h1>
	<hr/>
	@foreach ($article as $art)
		<article>
			<h2>{{$art->title}}</h2>
			<a href = "/articles/{{$art->id}}"><div class = "body">{{$art->body}}</div></a>
		</article>
	@endforeach
@stop