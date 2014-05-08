<?php

use Illuminate\Filesystem\FileNotFoundException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ImageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /image
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /image/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /image
	 *
	 * @return Response
	 */
	public function store($slug)
	{
		try {
			// Get the client information
			$client = Client::where('slug', '=', $slug)->first();

			// Handle the incoming file
			$file        = Input::file('file');
			$newFileName = md5( $file->getClientOriginalName() ) . '.' . $file->getClientOriginalExtension();

			// Move the uploaded file
			$result      = Input::file('file')->move(public_path() . '/uploads/', $newFileName);

			// Insert it into the db
			Image::create([
				'filepath' => '/uploads/' . $newFileName,
				'active' => 1,
				'client_id' => $client->id
			]);
		}
		catch( \Exception $e )
		{
			return $e->getMessage();
		}
	}

	/**
	 * Display the specified resource.
	 * GET /image/{id}
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
	 * GET /image/{id}/edit
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
	 * PUT /image/{id}
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
	 * DELETE /image/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($client, $id)
	{
		// Try and find the image, then delete the file, then the model.
		try {
			$image = Image::findOrFail($id);
			File::delete( public_path() . $image->filepath );
			$image->delete();

			return Response::json([
				'result' => true
			]);
		}

		// The model didn't exist
		catch ( \Illuminate\Database\Eloquent\ModelNotFoundException $e )
		{
			return Response::json([
				'result' => false,
				'message' => $e->getMessage()
			]);
		}

		// The file didn't exist, so just remove the model
		catch ( \Illuminate\Filesystem\FileNotFoundException $e )
		{
			$image->delete();
			return Response::json([
				'result' => true,
				'message' => $e->getMessage()
			]);
		}

		// Something else happened
		catch ( \Exception $e )
		{
			return Response::json([
				'result' => false,
				'message' => $e->getMessage()
			]);
		}
	}

}