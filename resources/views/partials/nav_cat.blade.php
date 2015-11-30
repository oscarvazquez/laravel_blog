<ul class="nav nav-pills nav-stacked more_nav" id = "category_navigation">
  <li><a class = 'list-item title_tag grab_cat'>Categories</a></li>
  <hr/>
  <li><a class = "list-item cat_tag grab_cat"  href = "/articles">All Articles</a></li>
	@foreach ($categories as $cats)
		<li>
			<a class = "list-item cat_tag grab_cat"  href="/category/{{$cats->name}}">
				{{$cats->name}}
			</a>
		</li>
	@endforeach
</ul>

