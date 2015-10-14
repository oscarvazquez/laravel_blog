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
		$category = \App\Category::lists('name', 'id');
		return view('articles.create', compact('category', $category));
	}

	public function store(Requests\CreateArticle $request)
	{
		$this->createArticle($request);
		\Session::flash('flash_message', 'Your article has been created!');
		return redirect('articles');
	}

	public function edit(Article $article)
	{
		$category = \App\Category::lists('name', 'id');
		return view('articles.edit', compact('article', $article, 'category', $category));
	}

	public function update(Article $article, Requests\CreateArticle $request)
	{
		$article->update(Request::all());
		$this->syncCategories($article, $request->input('cats'));
		return redirect('articles');
	}



//// private functions Sync categories and creating a brand new article




	private function syncCategories(Article $article, $categories)
	{
		$article->categories()->sync($categories);
	}

	private function createArticle($request) 
	{
		$article = \Auth::user()->articles()->create($request->all());
		
		$this->syncCategories($article, $request->input('cats'));
		
		return $article;
	}

}

