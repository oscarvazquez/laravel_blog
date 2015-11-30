@extends('app')

@section('content')

<h1>Messages</h1>
	<hr/>
<div class = 'row'>
	<div class = 'col-lg-8'>
		@foreach ($messages as $mes)
			<h3>{{$mes->name}}</h3>
			<h4>{{$mes->email}}</h4>
			<p>{{$mes->message}}</p>
		@endforeach
	</div>
</div>

@stop
