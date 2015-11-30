<?php namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class MessagesController extends Controller {

	// public function __construct()
	// {
	// 	$this->middleware('auth', ['only' => 'index', 'only' => 'show', 'only' => 'destroy']);
	// }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$messages = \App\Message::all();
		return view('messages.index', compact('messages'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CreateMessage $request)
	{
		$this->createMessage($request);
		\Session::flash('flash_message', 'Your message has been sent, Ill get back to you shortly');
		return redirect('articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	private function createMessage($request)
	{
		$message = Message::create($request->all());
	}

}
