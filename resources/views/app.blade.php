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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.11.0/bootstrap-social.css" rel = "stylesheet" type = "text/css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
	<link href="/js/ckeditor/plugins/codesnippet/lib/highlight/styles/default.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel = "stylesheet">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		nav {
			margin-bottom: 0px !important;
		}
		.small_div{
			overflow: hidden;
			width: 500px;
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
			background-color: #FFF8E3 !important;
			height:auto;
			min-height: 100vh;
			padding: 10px;
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
			color: #DB4105 !important;
		}
		/* this is the navbar color */
		.color_white{
			color: #F3FFE2 !important;
		}
		/* this is the project and aritcles link color */
		.link_tag{
			color: #DB4105;
			width: 2000px !important;
		}
		/* this is the categories color */
		.cat_nav{
			font-size: 20px;
			font-weight: bold;
			color: #DB4105;
		}
		/* this is the hover navbar color */
		.bigger{
			opacity: .8;
			border: 1px #DB4105 solid !important;
			color: #DB4105 !important;
		}
/*		.more_nav{
			position: fixed;
			top: 15%;
			color: #DC3522;
			left: 0; 
			background-color: 
		}*/
		.cat_tag{
			color: #DB4105;
			font-size: 20px;
			text-align: left;
			font-weight: bold;
			text-transform: uppercase;
		}
		.title_tag {
			color: #2F343B;
			font-size: 26px;
			text-align: right;
			font-weight: bold;
		}
		.tag_center_align{
			text-align: center !important;
		}
		.inner-section{
			margin-top: 100px;
		}
		.quote{
			font-style: italic;
			font-size: 20;
			margin-bottom: 10px;
		}
		.color_white_link{
			color: #F3FFE2 !important;
			margin-top: 8px;
		}
		.final_link{
			margin-right: 15px;
		}
		.small_cat_nav{
			text-align: center;
		}
		#bs-example-navbar-collapse-1{
			font-size: 20px !important;
			background-color: #2F343B !important;
			text-align: center;
		}
		.center_icons{
			display: inline-block !important;
		}
/*alksjfd
	THIS IS GOING TO BE ALL THE CSS FOR THE SIDE NAV BAR 
	////////////////////////////////////////////////////	\
	ONLY USED ON THE ARTICLES PAGE FOR TEH CATEGORIES 
	OF ALL THE DIFFERENT ALSJDFLKJASLFD/////////////////
*/	



/*	
	THIS IS GOING TO BE ALL THE CSS FOR THE SIDE NAV BAR 
	////////////////////////////////////////////////////	\
	ONLY USED ON THE ARTICLES PAGE FOR TEH CATEGORIES 
	OF ALL THE DIFFERENT ALSJDFLKJASLFD/////////////////
*/	
</style>
</head>
<body>
	@include('partials.nav')
	<div class = "wrapper">
		<div class = "container">
			<div class = "inner-section">
				@if (Session::has('flash_message'))
					<div class = "row">
						<div class = 'col-lg-8 col-md-4 col-sm-12'>
							<div class = "alert alert-success">
								<button type = "button" class = "close" data-dismiss="alert" aria-hidden="true">&times;</button>
								{{ Session::get('flash_message') }}
							</div>
						</div>
					</div>
				@endif
				@yield('content')
			</div>
<!-- 		</div>
 -->	</div>

	<!-- Scripts -->
	<script src="/js/all.js"></script>
	<script src="/js/ckeditor/ckeditor.js"></script>
	<script src="/js/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
	<sript src ="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
	<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=js&skin=desert"></script>	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	@yield('footer')
	<script>
		$(document).ready(function(){
			$('.color_white').hover(function(){
				$(this).addClass('bigger')
			}, function(){
				$(this).removeClass('bigger')
			})
			$('.color_white').mousedown(function(){
				$(this).addClass('onClickDown')
				setTimeout(function(){
				  console.log('in here')
				  $(this).removeClass('onClickDown')
				}, 200);
				// removeClass('onClickDown')
				console.log('this works')
			})
		})
	</script>

</body>
</html>
