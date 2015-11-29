@extends('app')

@section('content')
<?php 
	$art = html_entity_decode($article->body);
?>
<div class = "col-lg-10 col-lg-offset-1">
	<h1>{{$article->title}}</h1>
	<hr/>
		<article>
			<p>{{$article->published_at}}</p>
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