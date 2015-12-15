@extends('app')

@section('content')
<style>

	.welcome{
		text-align: center;
		color: white;
	}
	#awesome_developer{
	  position: fixed; 
	  top: 0; 
	  left: 0; 
	  opacity: .8;
	  max-height: 100vw;
	  max-width: 100vw;
	  min-width: 100%;
	  min-height: 100%;
	}
	#something{
		color: white;
	}
	#title1{
		margin-top: 30px;
		font-size: 60px;
	}
	#quote{
		font-size: 23px;
		font-style: italic;	
	}
	.scrollblock {
	    margin: 0;
	    width: 100%;
	    height: 100%;
	}
	.container{
		margin-top: 100px;
	}
	.another{
		background-color: black !important;
	}
	#intro3{
		color: white !important;
	}
	.welcome{
		background-color: rgba(0, 0, 0, 0.2);
		border-radius: 25px;
	}
	.some_some{
		color: white !important;
		margin-right: 20px;
	}
	.some_some:hover{
		color: black !important;
	}
	.socials{
		position: fixed;
		right: 0 !important;
		bottom: 0px;
	}
</style>
<!-- <div class = "container">
 -->	<img src="{{asset('images/background.png')}}" alt="awesome developer" id="awesome_developer" />
	<div class = "scrollblock" id = "intro1">
		<div class = "row">
			<div class = "col-lg-7 col-lg-offset-2 welcome">
				<h1 id = "title1">Oscar Vazquez Zweig</h1>
				<h3>FullStack Developer</h3>
				<div><h4 id="quote"><?= Inspiring::quote() ?></h4></div>
			</div>
		</div>
	</div>
<!-- 	<div class = "col-lg-12 col-md-12 col-sm-12 socials">
		<a href="https://github.com/oscarvazquez" class = "some_some"><span class="fa fa-github fa-5x"></span></a>
		<a href = "https://www.linkedin.com/in/oscar-vazquez-1baaa980" class = "some_some"><span class = "fa fa-linkedin fa-5x"></span></a>
	  	<a href="https://github.com/oscarvazquez" class = "some_some"><span class="fa fa-facebook fa-5x"></span></a>
	</div>
 -->

@endsection

@section('footer')
<script>	
	$(document).ready(function(){
		var controller = new ScrollMagic.Controller();
	})
</script>
@endsection
@stop

