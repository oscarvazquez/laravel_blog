<div class 'nav_star'>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">OSCAR</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav something">
					<li><a class = "color_white" href="{{ url('/') }}">Home</a></li>
					<li><a class = "color_white" href="/articles">Articles</a></li>
					<li><a  class = "color_white" href="/projects">Projects</a></li>
					<li><a class = "color_white" href="/contact">Contact</a></li>
					@if (Auth::guest())
					@else
						<li><a class = "color_white" href="/articles/create">Create Article</a></li>
						<li><a class = "color_white" href="/projects/create">Create Project</a></li>
						<li><a class = "color_white" href="/messages">Messages</a></li>
					@endif
<!-- 					<li><a class = "color_white" href="/articles/{{$latest->id}}">{{$latest->title}}</a></li> -->
				</ul>

				<ul class="nav navbar-nav navbar-right something">
					@if (Auth::guest())
						<li class = "icons"><a href = "https://www.linkedin.com/in/oscar-vazquez-1baaa980" class="btn btn-social-icon btn-linkedin color_white_link">
	   						<span class="fa fa-linkedin"></span>
	  					</a></li>
	  					<li class = "icons"><a href="https://github.com/oscarvazquez" class="btn btn-social-icon btn-facebook color_white_link">
	   						<span class="fa fa-facebook"></span>
	  					</a></li>
						<li class = "icons"><a href="https://github.com/oscarvazquez" class="btn btn-social-icon btn-github color_white_link final_link">
	   						<span class="fa fa-github"></span>
	  					</a></li>
						<li><a class = "color_white" href="{{ url('/auth/login') }}">Login</a></li>
					@else
						<li class="dropdown">
							<a class = "color_white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a class = "color_white"href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
</div>
	