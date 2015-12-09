@extends('app')

@section('content')
<?php 
	$pro = html_entity_decode($project->description);
?>
	<div class = "container-fluid">
		<div class = "col-lg-7 col-md-7 col-sm-12 col-xs-12">
			<?= html_entity_decode($project->body) ?>
		</div>
		<div class = "col-lg-5 col-md-5 col-sm-12 col-xs-12">
			<h1>{{$project->title}}</h1>
			<hr/>
				<article>
					<p>{{$project->published_at}}</p>
					<div class = "body"><?= $pro ?></div>
				</article>
		</div>
	</div>

@stop