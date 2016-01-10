<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('contact', 'WelcomeController@contact');

Route::resource('articles', 'ArticlesController');

Route::resource('projects', 'ProjectsController');

Route::get('category/{categories}', 'CategoriesController@show');

Route::resource('messages', 'MessagesController');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/sitemap', function()
{
	$file = public_path(). "/download/sitemap.xml";  // <- Replace with the path to your .xml file
	// check if the file exists
	if (file_exists($file)) {
    	// read the file into a string
    	$content = file_get_contents($file);
    	// create a Laravel Response using the content string, an http response code of 200(OK),
    	//  and an array of html headers including the pdf content type
    	return Response::make($content, 200, array('content-type'=>'application/xml'));
	}
});
