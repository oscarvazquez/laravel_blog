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
	public function store(Requests\CreateArticle $request)
	{
		$article = new Article($request->all());
		\Auth::user()->articles()->save($article);
		return redirect('articles');
	}
	public function edit($id)
	{
		$article = Article::find($id);
		return view('articles.edit', compact('article', $article));
	}
	public function update($id, Requests\CreateArticle $request)
	{
		$article = Article::find($id);
		$article->update(Request::all());
		return redirect('articles');
	}

}
