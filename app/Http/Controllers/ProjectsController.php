<?php namespace App\Http\Controllers;

use App\Project;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;

// use Illuminate\Http\Request;

class ProjectsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['only' => 'create', 'only' => 'edit']);
	}

	public function index()
	{
		$project =  \App\Project::all();
		return view('projects.index', compact('project'));
	}

	public function show(Project $project)
	{
		return view('projects.show')->with('project', $project);
	}

	public function create()
	{
		return view('projects.create');
	}

	public function store(Requests\CreateProject $request)
	{
		$this->createProject($request);
		\Session::flash('flash_message', 'Your project has been created!');
		return redirect('projects');
	}

	public function edit(Project $project)
	{

		return view('projects.edit', compact('project', $project));
	}

	public function update(Project $project, Requests\CreateProject $request)
	{
		$project->update(Request::all());
		return redirect('projects');
	}
	public function destroy(Project $project)
	{
		$project->delete();
		return redirect('projects');
	}

	/////////////////////// Private functions \\\\\\\\\\\\\\\\\\\\\


	private function createProject($request)
	{
		$project = \Auth::user()->projects()->create($request->all());

		return $project;
	}

}
