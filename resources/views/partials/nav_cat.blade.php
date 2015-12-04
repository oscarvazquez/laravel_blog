<style>

@media (max-width: 765px) {
	.cat_tag{
		text-align: center !important;
		margin-top: 15px;
	}
	.inli{
		display: inline-block !important;
	}
	.more_nav{
		text-align: center !important;
	}
}
@media (min-width: 765px) {
	.more_nav{
		margin-right: 15px;
		margin-left: -65px;
		height: auto;
	}
	.fixed{
		position: fixed;
	}
}
   
@media (min-width: 1330px) {
	.cat_tag{

	}
}
  
</style>
<div class = "fixed">
<ul class="nav nav-pills nav-stacked more_nav sidebar" id = "category_navigation">

  <li class = "inli"><a class = 'list-item title_tag cat_tag grab_cat'>Categories</a></li>
  <hr/>
  <li class = "inli"><a class = "list-item cat_tag grab_cat"  href = "/articles">All Articles</a></li>
	@foreach ($categories as $cats)
		<li class = "inli">
			<a class = "list-item cat_tag grab_cat"  href="/category/{{$cats->name}}">
				{{$cats->name}}
			</a>
		</li>
	@endforeach
</ul>
</div>


