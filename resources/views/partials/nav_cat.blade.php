<ul class="nav nav-pills nav-stacked more_nav">
  <li><a class = 'list-item title_tag'>Categories</a></li>
  <li><a class = "list-item cat_tag" href = "/articles">All Articles</a></li>
	@foreach ($categories as $cats)
		<li>
			<a class = "list-item cat_tag" href="/category/{{$cats->name}}">
				{{$cats->name}}
			</a>
		</li>
	@endforeach
</ul>

