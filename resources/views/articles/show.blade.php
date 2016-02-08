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
	#disqus_thread{
		margin-top: 65px;
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
					<div class = "body"><?= $article->body ?></div>
				</article>
			@unless ($article->categories->isEmpty())
				<h5>Category</h5>
				<ul>
					@foreach ($article->categories as $cat)
						<li>{{$cat->name}}</li>
					@endforeach
				</ul>
			@endunless	
			<div id="disqus_thread"></div>
		</div>
	</div>

@stop

@section('footer')
<script>
$(document).ready(function(){
	$("pre").addClass('prettyprint')
	var body = $('.body').html();
	// $('.body').html(body);
	console.log(body);
	console.log('somethign')
	hljs.initHighlightingOnLoad();
	var disqus_config = function () {
	this.page.identifier = {{$article->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};
	(function() { 
	var d = document, s = d.createElement('script');

	s.src = '//oscartech.disqus.com/embed.js';

	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
	})();
})


</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
@stop
