@extends('app')

@section('content')
	<div class = "container-fluid">
		<div class = "col-lg-2 col-md-3 col-sm-4 col-xs-12">
			@include('partials.nav_cat')
		</div>
		<div class = "col-lg-8 col-md-9 col-sm-8 col-xs-12">
			<h1>Articles</h1>
			<hr/>
			@foreach ($article as $art)
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
				<hr style="border:1px solid #2F343B;opacity: .2"/>
			@endforeach
		</div>
	</div>
@stop