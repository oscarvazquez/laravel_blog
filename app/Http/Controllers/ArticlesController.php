<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;


class ArticlesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['only' => 'create']);
	}

	public function index() 
	{
		$article = \App\Article::latest('published_at')->published()->get();

		return view('articles.index', compact('article'));
	}

	public function show(Article $article)
	{
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
		\Session::flash('flash_message', 'Your article has been created!');
		return redirect('articles');
	}
	public function edit(Article $article)
	{
		return view('articles.edit', compact('article', $article));
	}
	public function update(Article $article, Requests\CreateArticle $request)
	{
		$article->update(Request::all());
		return redirect('articles');
	}

}
