<?php

class SettingsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /settngs
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /settngs/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /settngs
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /settngs/{id}
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
	 * GET /settngs/{id}/edit
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
	 * PUT /settngs/{id}
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
	 * DELETE /settngs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function activate($slug)
	{
		// Grab the db info
		$client = Client::where('slug', '=', $slug)->first();
		$active = Setting::where('key', '=', 'active')->firstOrFail();
		
		// Set the active presentation to the new client id
		$active->value = $client->id;

		// Try and save the active presentation
		if( $active->save() )
		{
			Session::flash('message', sprintf('Active presentation changed to <strong>%s</strong>', $client->name));
			return Redirect::route('admin.index');
		}

		// If our code gets to here, something went majorly fucking wrong..
		Session::flash('message', 'Could not change active presentation');
		return Redirect::route('admin.index');
	}
}