<style>
* {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.clearfix {
  zoom: 1;
}
.clearfix:before, .clearfix:after {
  content: "\0020";
  display: block;
  height: 0;
  overflow: hidden;
}
.clearfix:after {
  clear: both;
}

#crazy_thing {
  position: fixed;
  vertical-align: top;
  float: right;
  margin-left: 700px;
  margin-top: 25px;
  -moz-transform: rotate(-35deg) skew(20deg, 5deg);
  -ms-transform: rotate(-35deg) skew(20deg, 5deg);
  -webkit-transform: rotate(-35deg) skew(20deg, 5deg);
  transform: rotate(-35deg) skew(20deg, 5deg);
}

.list-item {
  font-weight: bold;
  background: #2F343B;
  font-size: 18px;
  color: #F3FFE2;
  text-align: center;
  height: 5em;
  width: 8em;
  vertical-align: middle;
  line-height: 1.2em;
  border-bottom: 1px solid #060606;
  position: absolute;
  display: block;
  border-top: 1px solid white;
  text-decoration: none;
  -moz-box-shadow: -2em 1.5em 0 #e1e1e1;
  -webkit-box-shadow: -2em 1.5em 0 #e1e1e1;
  box-shadow: -2em 1.5em 0 #e1e1e1;
  -moz-transition: all 0.25s linear;
  -o-transition: all 0.25s linear;
  -webkit-transition: all 0.25s linear;
  transition: all 0.25s linear;
}
.list-item:hover {
  background: #DC3522;
  color: #fffcfb;
  -moz-transform: translate(0.9em, -0.9em);
  -ms-transform: translate(0.9em, -0.9em);
  -webkit-transform: translate(0.9em, -0.9em);
  transform: translate(0.9em, -0.9em);
  -moz-transition: all 0.25s linear;
  -o-transition: all 0.25s linear;
  -webkit-transition: all 0.25s linear;
  transition: all 0.25s linear;
  -moz-box-shadow: -2em 2em 0 #e1e1e1;
  -webkit-box-shadow: -2em 2em 0 #e1e1e1;
  box-shadow: -2em 2em 0 #e1e1e1;
}
.list-item:hover:before, .list-item:hover:after {
  -moz-transition: all 0.25s linear;
  -o-transition: all 0.25s linear;
  -webkit-transition: all 0.25s linear;
  transition: all 0.25s linear;
}
.list-item:hover:before {
  background: #b65234;
  width: 1em;
  top: 0.5em;
  left: -1em;
}
.list-item:hover:after {
  background: #b65234;
  width: 1em;
  bottom: -2.5em;
  left: 1em;
  height: 4em;
}
.list-item:before, .list-item:after {
  -moz-transition: all 0.25s linear;
  -o-transition: all 0.25s linear;
  -webkit-transition: all 0.25s linear;
  transition: all 0.25s linear;
}
.list-item:after {
  content: "";
  position: absolute;
  height: 4em;
  background: #181818;
  width: 0.5em;
  bottom: -2.25em;
  left: 1.5em;
  -moz-transform: rotate(90deg) skew(0deg, 45deg);
  -ms-transform: rotate(90deg) skew(0deg, 45deg);
  -webkit-transform: rotate(90deg) skew(0deg, 45deg);
  transform: rotate(90deg) skew(0deg, 45deg);
}
.list-item:before {
  content: "";
  position: absolute;
  height: 2.5em;
  background: #121212;
  width: 0.5em;
  top: 0.25em;
  left: -0.5em;
  -moz-transform: skewY(-45deg);
  -ms-transform: skewY(-45deg);
  -webkit-transform: skewY(-45deg);
  transform: skewY(-45deg);
}

#right-place{
	position: relative;
	vertical-align: top;
}
#wrapper_for_nav{
	height: 20px;
	width: 100%;
	display: block;
}
</style>
<div id = "wrapper_for_nav">
	<div id = "right-place">

		<ul id = "crazy_thing">
			<li><a class = "list-item" href = "/articles">All Articles</a></li>
			@foreach ($categories as $cats)
				<li>
					<a class = "list-item" href="/category/{{$cats->name}}">
						{{$cats->name}}
					</a>
				</li>
			@endforeach
		</ul>

	</div>
</div>

