@extends('app')

@section('content')
<style>
	.welcome{
		text-align: center;
	}

</style>
<div class = "row">
	<div class="welcome">
		<h1>Oscar Vazquez</h1>
		<div class = "row">
			<div class = "col-lg-6 col-lg-offset-3">
				<div class="quote"><h4><?= Inspiring::quote() ?></h4></div>
			</div>
		</div>
	</div>
</div>
@endsection
@stop

