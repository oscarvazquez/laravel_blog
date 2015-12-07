@extends('app')

@section('content')
<?php 
	$art = html_entity_decode($article->body);
?>
<style type="text/css">
	p {
		font-size: 24px;
	}
	.body{
		    text-align: justify;
    		
	}
</style>
	<div class = "container-fluid">
		<div class = "col-lg-2 col-md-3 col-sm-4 col-xs-12">
			@include('partials.nav_cat')
		</div>
		<div class = "col-lg-9 col-md-8 col-sm-7 col-xs-12">
			<h1>{{$article->title}}</h1>
			<hr/>
				<article>
					<p>{{$article->published_at->format('Y-m-d')}}</p>
					<div class = "body"><?= $art ?></div>
				</article>
			@unless ($article->categories->isEmpty())
				<h5>Category</h5>
				<ul>
					@foreach ($article->categories as $cat)
						<li>{{$cat->name}}</li>
					@endforeach
				</ul>
			@endunless	
		</div>
	</div>

@stop

@section('footer')
<script>
$(document).ready(function(){
	var body = $('.body').html();
	// $('.body').html(body);
	console.log(body);
	console.log('somethign')
	hljs.initHighlightingOnLoad();
})
</script>
@stop