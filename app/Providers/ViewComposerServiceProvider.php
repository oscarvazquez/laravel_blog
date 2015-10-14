<?php namespace App\Providers;

use App\Article;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{	
		$this->ComposedNavigation();
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	private function ComposedNavigation()
	{
		view()->composer('partials.nav', function($view)
		{
			$view->with('latest', Article::latest()->first());
		});
	}

}
