@extends('app')

@section('content')

	<h1>{{$article->title}}</h1>
	<hr/>
		<article>
			<p>{{$article->published_at}}</p>
			<div class = "body">{{$article->body}}</div>
		</article>
	@unless ($article->categories->isEmpty())
		<h5>Category</h5>
		<ul>
			@foreach ($article->categories as $cat)
				<li>{{$cat->name}}</li>
			@endforeach
		</ul>
	@endunless	

@stop