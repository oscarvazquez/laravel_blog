<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller {

	public function show(Category $category)
	{
		$article = $category->articles;

		return view('articles.index', compact('article', $article));
	}

}
