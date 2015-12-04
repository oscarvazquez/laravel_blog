@extends('app')

@section('content')
	<h2>Projects</h2>
	<hr/>
	@foreach ($project as $pro)
		<div class = "col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<article>
				<a class = "link_tag" href = "/projects/{{$pro->id}}"><h2>{{$pro->title}}</h2></a>
				<div class = "body">
					<p>{{$pro->description}}</p>
				</div>
				@if (Auth::guest())

				@else
					<a href = "/projects/{{$pro->id}}/edit" class = "btn btn-primary">Edit Project</a>
					<form action = "/projects/{{$pro->id}}" method = "post">
						<input type = 'hidden' name = "_token" value = "{{ csrf_token() }}">
						<input type = "hidden" name = "_method" value = "delete">
						<input type = "submit" value = "Delete Project" class = "btn btn-danger">
					</form>
				@endif
			</article>
		</div>
	@endforeach

@stop