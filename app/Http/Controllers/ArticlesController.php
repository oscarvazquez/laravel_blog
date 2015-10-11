<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;


class ArticlesController extends Controller {

	public function index() 
	{
		$article = \App\Article::latest('published_at')->published()->get();

		return view('articles.index', compact('article'));
	}

	public function show($id)
	{
		$article = \App\Article::find($id);

		if(is_null($article)) {
			abort(404);
		}

		return view('articles.show')->with('article', $article);
	}
	public function create()
	{
		return view('articles.create');
	}
	public function store()
	{
		$input = Request::all();
		Article::create($input);
		return redirect('articles');
	}

}
