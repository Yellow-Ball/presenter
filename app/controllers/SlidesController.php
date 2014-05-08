<?php

class SlidesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /slides
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('slides.index');
	}

	/**
	 * Display a listing of the resource.
	 * GET /slides
	 *
	 * @return Response
	 */
	public function json()
	{
		$current = Setting::whereKey('active')->first()->value;
		$images = Image::whereClientId($current)->get(['filepath']);
		
		return Response::json([
			'client_id' => $current,
			'images' => $images->toArray()
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /slides/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /slides
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /slides/{id}
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
	 * GET /slides/{id}/edit
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
	 * PUT /slides/{id}
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
	 * DELETE /slides/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}