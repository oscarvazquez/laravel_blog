@extends('app')

@section('content')

	<h1>{{$article->title}}</h1>
	<hr/>
		<article>
			<p>{{$article->published_at}}</p>
			<div class = "body">{{$article->body}}</div>
		</article>
@stop