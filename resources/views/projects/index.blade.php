@extends('app')

@section('content')
<style>
	.center_it{
		text-align: center;
	}
/*	.bordered_out{
		border: 2px #2F343B solid; 
		border-radius: 25px;

	}*/
</style>
	<h2>Projects</h2>
	<hr/>
	@foreach ($project as $pro)
		<div class = "col-lg-4 col-md-4 col-sm-6 col-xs-12 project_div">
			<article>
				<a class = "link_tag center_it" href = "/projects/{{$pro->id}}"><h2>{{$pro->title}}</h2></a>
				<div class = "thumb_nail center_it"><a href = "/projects/{{$pro->id}}"><?= $pro->image ?></a></div>
				<div class = "body center_it">
					<p><?= $pro->description ?></p>
				</div>
				@if (Auth::guest())

				@else
				<div class = "center_it">
					<a href = "/projects/{{$pro->id}}/edit" class = "btn btn-primary">Edit Project</a>
					<form action = "/projects/{{$pro->id}}" method = "post">
						<input type = 'hidden' name = "_token" value = "{{ csrf_token() }}">
						<input type = "hidden" name = "_method" value = "delete">
						<input type = "submit" value = "Delete Project" class = "btn btn-danger">
					</form>
				</div>
				@endif
			</article>
		</div>
	@endforeach
	@section('footer')
	<script>
		$(document).ready(function(){
			$('.project_div').hover(function(){
				console.log('in')
				$(this).addClass('bordered_out')
			}, function(){
				console.log('out')
				$(this).removeClass('bordered_out')
			})
			console.log('working')
		})

	</script>
	@endsection
@stop