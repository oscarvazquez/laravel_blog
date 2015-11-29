<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OSCAR TECH</title>

	<link href="{{ asset('/css/all.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
	<link href="/js/ckeditor/plugins/codesnippet/lib/highlight/styles/default.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel = "stylesheet">
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=js&skin=desert"></script>	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		nav {
			margin-bottom: 0px !important;
		}
		.nav_mid {
		  display: inline-block !important;
		  float: none !important;
/*		  vertical-align: top !important;
*/		}

		.div_nav {
		  text-align: center !important;
		  color: white !important;
		}
		.something{
			margin-top: 20px;
		}
		/* this is the background color */
		.wrapper{
			background-color: #fffce5 !important;
			height: 1000px;
			padding: 20px;
		}
		/* this is the navbar color */
		.navbar{
			height: 100px !important;
			font-size: 20px !important;
			background-color: #2F343B !important;
		}
		/* this is the logo color */
		.navbar-brand{
			font-size: 30px !important;
			margin-top: 20px;
			font-weight: bold;
			color: #E3CDA4 !important;
		}
		/* this is the navbar color */
		.color_white{
			color: #F3FFE2 !important;
		}
		/* this is the project and aritcles link color */
		.link_tag{
			color: #DC3522;
			width: 45px !important;
		}
		/* this is the categories color */
		.cat_nav{
			font-size: 20px;
			font-weight: bold;
			color: #DC3522;
		}
		/* this is the hover navbar color */
		.bigger{
			opacity: .8;
			font-size: 22px;
			color: white !important;
		}
	</style>
</head>
<body>
	@include('partials.nav')
	<div class = "wrapper">
		<div class = "container">
			@if (Session::has('flash_message'))
				<div class = "alert alert-success">
					<button type = "button" class = "close" data-dismiss="alert" aria-hidden="true">&times;</button>
					{{ Session::get('flash_message') }}
				</div>
			@endif
			@yield('content')
		</div>
	</div>

	<!-- Scripts -->
	<script src="/js/all.js"></script>
	<script src="/js/ckeditor/ckeditor.js"></script>
	<script src="/js/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
	@yield('footer')
		<script>
		$(document).ready(function(){
			$('.color_white').hover(function(){
				$(this).addClass('bigger')
			}, function(){
				$(this).removeClass('bigger')
			})
		})
	</script>

</body>
</html>
