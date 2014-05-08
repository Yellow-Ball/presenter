<?php

class AdminClientsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /adminclients
	 *
	 * @return Response
	 */
	public function index()
	{
		$clients = Client::all();
		$active  = Setting::where('key', '=', 'active')->first();

		return View::Make('admin.clients.index')
			->withClients( $clients )
			->with( 'active', $active );
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /adminclients/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.clients.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adminclients
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('name');

		try {
			$client         = new Client;
			$client->name   = $input['name'];
			$client->active = 0;
			$client->save();

			Session::flash('message', 'Client Created! Upload slides below!');
			return Redirect::route('admin.client.show', [ 'client' => $client->slug ]);
		}
		catch ( \Illuminate\Database\QueryException $e )
		{
			Session::flash('message', 'Another client exists in the system with a similar name. Please choose another.');
			return Redirect::back()->withInput();
		}
		catch (\Exception $e)
		{
			Session::flash('message', $e->getMessage());
			return Redirect::back()->withInput();
		}
	}

	/**
	 * Display the specified resource.
	 * GET /adminclients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$client = Client::with('images')->where('slug', '=', $slug)->first();
		return View::make('admin.clients.show')->withClient($client)->with('images', $client->images());
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/clients/{slug}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($slug)
	{
		$client = Client::with('images')->whereSlug($slug)->first();
		return View::make('admin.clients.edit')->withClient($client);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /adminclients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($slug)
	{
		// Find the client
		try {
			$client = Client::whereSlug($slug)->firstOrFail();
		}
		catch (\Exception $e)
		{
			Session::flash('message', $e->getMessage());
			return Redirect::back()->withInput();
		}

		$client->fill( Input::only( [ 'name', 'slug'] ) );
		$client->save();

		Session::flash('message', 'Client Created! Upload slides below!');
		return Redirect::route('admin.client.show', [ 'client' => $client->slug ]);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /adminclients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}