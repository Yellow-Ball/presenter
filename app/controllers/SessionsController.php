<?php

class SessionsController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		// If the user is logged in, force them back
		if( Auth::check() )
		{
			return Redirect::route('admin.index');
		}

		return View::make('sessions.login');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
		$auth = Auth::attempt(
				Input::only( 'email', 'password' ),
				Input::has('remember')
		);

		if( $auth )
		{
			return Redirect::route('admin.index');
		}

		Redirect::back()->withErrors('Email / Password is incorrect');
	}

	/**
	 * Display the specified resource.
	 * GET /sessions/{id}
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
	 * GET /sessions/{id}/edit
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
	 * PUT /sessions/{id}
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
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		if( Auth::check() )
		{
			Auth::logout();
		}

		Session::flash('message', 'Logged out successfully');
		return Redirect::route('login');
	}

}